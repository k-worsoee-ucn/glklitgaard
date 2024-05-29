// Nemt præmisse, hvis der er WP-Admin baren (som kun vises frem hvis man er logget ind some admin) så rykker vi headeren ned
const Header = document.querySelector("header");
const AdminBar = document.querySelector("#wpadminbar");

// Vi gør dette bøde ved load og resize, men da de begge skal gøre det samme, så beder vi bare om at bruge samme funktion
window.addEventListener("load", ()=>{
    WPAdminBar();
    //Tailvind stadig ny til mig (victoria) så benytter js for at give padding nok til første sektion så det kan læses
    if(AdminBar != null && AdminBar != NaN && AdminBar != ""){
        document.querySelectorAll("section")[0].style.paddingTop = Header.querySelector("nav").clientHeight+50+"px"
    }
})
window.addEventListener("resize",()=>{
    WPAdminBar();
})

function WPAdminBar(){
    // Hvis admin baren findes eller hvis den ikke er ingen ting
    if(AdminBar != null && AdminBar != NaN && AdminBar != ""){
        // brede af siden, da WP admin ændre størrelse
        if(window.innerWidth >= 783){
            Header.style.top = 32+"px";
        } else{
            Header.style.top = 46+"px";
        }
    }
}