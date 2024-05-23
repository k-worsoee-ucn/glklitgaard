// Nemt præmisse, hvis der er WP-Admin baren (som kun vises frem hvis man er logget ind some admin) så rykker vi headeren ned
const Header = document.querySelector("header");
const AdminBar = document.querySelector("#wpadminbar");

// Vi gør dette bøde ved load og resize, men da de begge skal gøre det samme, så beder vi bare om at bruge samme funktion
window.addEventListener("load", ()=>{
    WPAdminBar();
})
window.addEventListener("resize",()=>{
    WPAdminBar();
})

function WPAdminBar(){
    // Hvis admin baren findes eller hvis den ikke er ingen ting
    if(AdminBar != null){
        // brede af siden, da WP admin ændre størrelse
        if(window.innerWidth >= 783){
            Header.style.marginTop = 32+"px";
        } else{
            Header.style.marginTop = 46+"px";
        }
    }
}