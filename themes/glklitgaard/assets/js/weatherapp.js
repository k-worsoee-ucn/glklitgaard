fetch("https://api.openweathermap.org/data/2.5/forecast?lat=57.42090629883396&lon=9.760785184175162&appid=bc4db9f05db9ebb9432465630a0cde72&units=metric&lang=da")
    .then(res => res.json())
    .then(data => {
        //Saves data.list
        const weatherWeek = data.list;

        //Saves the date part of the dt_txt string
        const getDate = (dt_txt) => dt_txt.split(' ')[0];

        // Object to hold the data sorted by date
        const sortedData = {};

        // Loop through each entry in the data
        weatherWeek.forEach(entry => {
            // Extract the date
            const date = getDate(entry.dt_txt);
            // If the date doesn't exist in sortedData, initialize it with an empty array
            if (!sortedData[date]) {
                sortedData[date] = [];
            }
            // Add the entry to the array for the corresponding date
            sortedData[date].push(entry);
        });

        // Convert the object to an array of arrays for each date
        const result = Object.values(sortedData);
        const container = document.querySelector(".forecastContainer")
        container.classList.add(`grid-cols-${result.length}`)
        //To contain the highest temp per day
        const highestTemps = [];
        //To contain the lowest temp per day
        const lowestTemps = [];

        //Function to format the API's date (yyyy-mm-dd hh:mm:ss) to mm/dd/yyyy
        function formatDate(dateString) {
            //Splits at the space to seperate date and time
            const [datePart, timePart] = dateString.split(' ')
            //Splits to year month and day
            const [year, month, day] = datePart.split('-')
            //Returns in wanted format
            return `${month}/${day}/${year}`
        }

        //Function to get the day name based on date
        function getDayName(dateStr, locale) {
            const date = new Date(dateStr)
            return date.toLocaleDateString(locale, { weekday: 'long' })
        }

        // Loop through the dayData arrays, one for each date
        for (let i = 0; i < result.length; i++) {
            const dayData = result[i]

            // Extract the temperatures for the day and find the highest and lowest temperatures
            const temps = dayData.map(entry => entry.main.temp);
            const highTemp = Math.round(Math.max(...temps))
            const lowTemp = Math.round(Math.min(...temps))

            // Get the weather icon code from the first entry of the day
            const IconCode = dayData[0].weather[0].icon;
            let weatherIconCode = IconCode;

            //Replace night icon with day icon
            if(IconCode.includes("n")) {
                weatherIconCode = IconCode.replace(/n/g, "d")
            }

            // Store the highest and lowest temperatures for the day
            highestTemps.push(highTemp);
            lowestTemps.push(lowTemp);

            // Get the container element for the forecast
            const container = document.querySelector(".forecastContainer")
            // Create a new div for the day's forecast
            const forecastDay = document.createElement("div")
            forecastDay.classList.add("forecastDay", "grid", "bg-white", "shadow-lg", "py-10")
            container.append(forecastDay);

            // Create an element for the day name
            const dayName = document.createElement("h3")
            dayName.classList.add("dayName", "text-center")
            const dateStr = formatDate(dayData[0].dt_txt)

            const dayNameString = getDayName(dateStr, "da-DK")

            dayName.textContent = dayNameString.charAt(0).toUpperCase() + dayNameString.slice(1) + " d. " + dateStr.substring(3, 5);

            // Create an element for the weather icon
            const weatherIcon = document.createElement("img")
            weatherIcon.classList.add("m-auto")
            weatherIcon.setAttribute("src", `https://openweathermap.org/img/wn/${weatherIconCode}@2x.png`)

            // Create elements for the high and low temperatures
            const dayHigh = document.createElement("p")
            dayHigh.textContent = highTemp + "\u00B0";
            dayHigh.classList.add("dayHigh", "text-4xl", "font-bold", "text-center");
            const dayLow = document.createElement("p")
            dayLow.textContent = lowTemp + "\u00B0";
            dayLow.classList.add("dayLow", "text-4xl", "text-center")

            // Create a container for the temperatures and append the high and low temps
            const tempContainer = document.createElement("div")
            tempContainer.classList.add("tempContainer", "grid", "grid-cols-2")
            tempContainer.append(dayHigh, dayLow)

            // Append the day name, weather icon, and temperature container to the forecast day div
            forecastDay.append(dayName, weatherIcon, tempContainer)

            // Create a container for additional weather details (humidity and wind)
            const additWeather = document.createElement("div")
            additWeather.classList.add("additWeather", "grid")
            forecastDay.append(additWeather)

            // Create containers for humidity and wind
            const humidContainer = document.createElement("div")
            humidContainer.classList.add("humidityContainer", "grid")
            const windContainer = document.createElement("div")
            windContainer.classList.add("windContainer", "grid")
            additWeather.append(humidContainer, windContainer)

            // Create and append the humidity icon and value
            const humidityIcon = document.createElement("i")
            humidityIcon.classList.add("fa-solid", "fa-droplet", "text-right", "my-auto", "mx-0", "mt-1")
            const humidity = document.createElement("p")
            humidity.classList.add("text-left")
            humidity.textContent = dayData[0].main.humidity + "%"
            humidContainer.append(humidityIcon, humidity)

            // Create and append the wind icon and value
            const windIcon = document.createElement("i")
            windIcon.classList.add("fa-solid", "fa-wind", "text-right", "my-auto", "mx-0", "mt-1")
            const wind = document.createElement("p")
            wind.classList.add("text-left")
            wind.textContent = dayData[0].wind.speed.toFixed(1) + "m/s"
            windContainer.append(windIcon, wind)

        }

    })
    //Error handling
    .catch(err => console.log("An error occured: ", err));
