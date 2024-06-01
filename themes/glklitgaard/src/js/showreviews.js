let bodyEl = document.querySelector("body")
if (bodyEl.classList.contains("home")) {
    const reviews = document.querySelector(".reviews")
    const theme_url = document.querySelector(".theme_url").textContent

    fetch(theme_url + "/src/js/reviews.json")
        .then(res => res.json())
        .then(data => {
            for (let i = 0; i < 5; i++) {
                const reviewContainer = document.createElement("div")
                reviewContainer.classList.add("reviewContainer", "grid", "lg:py-12","py-16", "px-5")
                reviews.append(reviewContainer)

                const reviewTitle = document.createElement("h3")
                reviewTitle.classList.add("mt-5")
                reviewTitle.textContent = data.reviews[i].review_title


                const reviewDesc = document.createElement("p")
                reviewDesc.textContent = data.reviews[i].review_text

                const reviewer = document.createElement("p")
                reviewer.classList.add("font-bold", "text-lg")
                reviewer.textContent = data.reviews[i].name

                const stars = data.reviews[i].review_score

                const reviewScore = document.createElement("div")
                reviewScore.classList.add("inline-flex")

                for (let i = 1; i <= stars; i++) {
                    const filledStar = document.createElement("img")
                    filledStar.setAttribute("src", theme_url + "/assets/svg/star_filled.svg")
                    reviewScore.append(filledStar)
                }

                for (let i = stars + 1; i <= 5; i++) {
                    const emptyStar = document.createElement("img");
                    emptyStar.setAttribute("src", theme_url + "/assets/svg/star_empty.svg");
                    reviewScore.append(emptyStar);
                }

                reviewContainer.append(reviewScore, reviewTitle, reviewDesc, reviewer)
            }
        })
}