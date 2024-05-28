document.addEventListener("DOMContentLoaded", () => {
    if (window.location.href.includes("vores-heste")) {
        const targets = document.querySelectorAll(".horseshoe")
        const url = document.querySelector(".horseshoeurl");
    
        const horseshoe = document.createElement("img")
        horseshoe.classList.add("horseshoetrail")
        horseshoe.setAttribute("src", url.textContent)
    
        targets.forEach(target => {
            target.appendChild(horseshoe.cloneNode());
        })
    
    
    }
})