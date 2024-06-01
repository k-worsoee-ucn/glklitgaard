document.addEventListener("DOMContentLoaded", () => {

    if (window.location.href.includes("tag-din-hest-med-pa-ferie")) {
        let i = 1;
        const routeImg1 = document.querySelector(".routeImg1")
        const routeImg1Url = routeImg1.getAttribute("src")
    
        const routeImg2 = document.querySelector(".routeImg2")
        const routeImg2Url = routeImg2.getAttribute("src")
        
        const routeTitle = document.querySelector(".routeTitle")
        const routeTitleContent = routeTitle.textContent
    
        const routeText = document.querySelector(".routeText")
        const routeTextContent = routeText.textContent
    
        const left = document.querySelector(".slideLeft")
        const leftSvg = left.querySelector("svg")
        const leftPath = leftSvg.querySelector("path")
        leftPath.classList.add("hover:fill-brand-darkgreen", "hover:cursor-pointer")

        const right = document.querySelector(".slideRight")
        const rightSvg = right.querySelector("svg")
        const rightPath = rightSvg.querySelector("path")
        rightPath.classList.add("hover:fill-brand-darkgreen", "hover:cursor-pointer")
    
        function changeSlide() {
            if (i == 1) {
                routeImg1.setAttribute("src", routeImg1Url.replace("rute1.png", "rute2.png"))
                routeImg2.setAttribute("src", routeImg2Url.replace("rute1-sub.png", "rute2-sub.png"))
                routeTitle.textContent = "Rubjerg Knude Fyr"
                routeText.textContent = "Der findes et utal af forskellige ruter, som er skræddersyet til den ideelle ridetur - En ridetur på toppen af Lønstrup Klint, helt op til Rubjerg Knude Fyr er en sjov og spændende tur. "
            } else {
                routeImg1.setAttribute("src", routeImg1Url)
                routeImg2.setAttribute("src", routeImg2Url)
                routeTitle.textContent = routeTitleContent
                routeText.textContent = routeTextContent
            }
        }
    
        leftPath.addEventListener("click", () => {
            i = 2
            changeSlide();
            leftPath.style.display = "none"
            rightPath.style.display = "block"
        })
        rightPath.addEventListener("click", () => {
            i = 1
            changeSlide();
            leftPath.style.display = "block"
            rightPath.style.display = "none"
        })
    
    }
})