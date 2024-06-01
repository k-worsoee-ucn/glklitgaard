if (window.location.href.includes("tag-din-hest-med-pa-ferie")) {
    let i = 1;
    const routeImg1 = document.querySelector(".routeImg1")
    const routeImg1Url = document.querySelector(".routeImg1").getAttribute("src")

    const routeImg2 = document.querySelector(".routeImg2")
    const routeImg2Url = document.querySelector(".routeImg2").getAttribute("src")
    
    const routeTitle = document.querySelector(".routeTitle")
    const routeTitleContent = document.querySelector(".routeTitle").textContent

    const RouteText = document.querySelector(".RouteText")
    const RouteTextContent = document.querySelector(".RouteText").textContent

    const left = document.querySelector(".fa-caret-left")
    const right = document.querySelector(".fa-caret-right")

    function changeSlide() {
        if (i = 1) {
            routeImg1.setAttribute("src", routeImg1Url.replace("rute1.png", "rute2.png"))
            routeImg2.setAttribute("src", routeImg2Url.replace("rute1-sub.png", "rute2-sub.png"))
            routeTitle.textContent = "Rubjerg Knude Fyr"
            RouteText.textContent = "Der findes et utal af forskellige ruter, som er skræddersyet til den ideelle ridetur - En ridetur på toppen af Lønstrup Klint, helt op til Rubjerg Knude Fyr er en sjov og spændende tur. "
        } else {
            routeImg1.setAttribute("src", routeImg1Url)
            routeImg2.setAttribute("src", routeImg2Url)
            routeTitle.textContent = routeTitleContent
            RouteText.textContent = RouteTextContent
        }
    }

    left.addEventListener("click", () => {
        i = 1
        changeSlide();
        left.classList.add("text-8xl")
        left.classList.remove("--fa-display-none")
        right.classList.remove("text-8xl")
        right.classList.add("--fa-display-none")
    })
    right.addEventListener("click", () => {
        i = 2
        changeSlide();
        left.classList.remove("text-8xl")
        left.classList.add("--fa-display-none")
        right.classList.add("text-8xl")
        right.classList.remove("--fa-display-none")
    })



}