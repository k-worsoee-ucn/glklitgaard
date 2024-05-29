const Sol = document.querySelector("#Book-sol");

window.addEventListener("load", ()=>{
    const DegreeMovement = 10; // < ændre det her for hurtigere rotation

    const SolBackground = Sol.querySelector("#Sun-figure"); // < Finger baggrunden for sol diven
    rotateSun(); // starter funktionen neden under
    function rotateSun(){
        const SolValues = window.getComputedStyle(SolBackground); //finder alt solbaggrundens style
        const rotationVal = parseInt(SolValues.getPropertyValue("rotate"), 10); // finder specifikt rotaten og laver til et nummer
        SolBackground.style.rotate = rotationVal+DegreeMovement+"deg"; // roterer til at det skal være nuværende rotation + mændgen nævvnt tidligere

        setTimeout(() => { // laver funktionen igen efter 100ms. more or less et kombliseret whileloop som kun køre igen efter x antal tid
            rotateSun();
        }, 500);
    }

    // Nu kommer det sjove! funktionalitet for solen. tiltænkt! at den kommer til bunden af siden og så kan bruges til at tage en til toppen af siden.
    // Umedbare tanker! kun på computer og tablet...
    
    let ClickActive = false;
    // ^ brugest til at vise true eller falsk, for at gøre funktionen skal lave mindre arbejde senere i funktionen
    window.addEventListener("scroll", ()=>{ // Vigtig! at window har scroll event listeneren
        if(window.innerWidth > 768){ //så det kun køre på størrere en tailwind mobil størrelser.
            if(window.scrollY > 0 && ClickActive == false){// hvis vi ikke er i toppen og at den ikke er aktiv
                // ^ ja, let'en er lavet så disse kun køre en gang istedet for altid når man scroller.
                ClickActive = true; //giver den true istedet for at den så kan bruges til senrere checks
                Sol.style.top = "75vh"; //giver ny top styling
                Sol.style.cursor = "pointer"; // giver bestemt mus frevisning når over elementet
                Sol.addEventListener("click",()=>{ //tilgiver et event listener der bare siger når klikket på så skal det tages til top af siden
                    window.scrollTo({
                        top: 0,
                        behavior: "smooth",
                      });
                })
            }
            if(window.scrollY == 0 && ClickActive == true){ // samme som her oppe ^ men omvendt
                ClickActive = false;
                Sol.style.top = "-50%";
                Sol.style.cursor = "default";
                Sol.removeEventListener("click",()=>{window.scrollTo({ //fjerner event listeneren, den skal skrives op på næsten samme måde, med det ", true" til sidst
                    top: 0,
                    behavior: "smooth",
                  });},true); // ved at fjrene event listeneren, så ved vi det ikke fucker med booking knappen <3
            }
        }
    })

    // ikke mere sol! sol lavet! i mobil er den bare sat til hidden, så det ikke er noget problemo!
    let Resized = true; //bruges til resize check

    const NavPoints = document.querySelectorAll(".nav-point"); //find alle nav pointsne
    NavPoints.forEach((NavP) => { // for hver der er
        const Arrow = NavP.querySelector(".nav-main-point").querySelector(".nav_arrow"); //const dens pil og underside div
        const undersites = NavP.querySelector(".underPoint");

        if(Arrow != null && undersites != null){
        NavP.addEventListener("mouseover", ()=>{ // når musen er over, rotere pelen og vis siderne
            if(window.innerWidth >= 1024){
                Arrow.style.rotate = "180deg";
                undersites.style.height = undersites.scrollHeight+"px";
            }
            Resized = false;
        });
        NavP.addEventListener("mouseout", ()=>{ //når ikke mere. så... ja modsatte
            if(window.innerWidth >= 1024){
                Arrow.style.rotate = "0deg";
                undersites.style.height = "0px";
            }
            Resized = false;
        });
    }});

    //men hvad nu hvis ikke laptop størrelse... burger menu!

        NavPoints.forEach((FNav) =>{
            if(FNav.querySelector(".fake-block")){
            FNav.querySelector(".fake-block").addEventListener("click",()=>{ // nå vi klikker på denne falske (som kun findes i mobil størrelse)
            if(window.innerWidth < 768){ // tjek vi er i den rigtige størrelse
                Resized = false; //set den her til falsk (bruges til resize checks)
                const Active = document.querySelector("#ActiveDropdown"); // find i dokumentet dette id
                if(Active != null && Active != NaN){ // og hvis den findes. mere el mindre, nulstil dens værdier
                    Active.style.height = Active.scrollHeight;
                    Active.querySelector(".fake-block").style.height = Active.querySelector(".fake-block").scrollHeight+"px";
                    Active.querySelector(".underPoint").style.height = "0";
                    Active.querySelector(".nav_arrow").style.rotate = "0deg";
                    Active.querySelector(".nav-main-point").style.height = "0";
                    Active.removeAttribute("id");
                }
                const Fake = FNav.querySelector(".fake-block"); // set const for det vi skal arbejde med lige om to
                const UnderPoints = FNav.querySelector(".underPoint");

                Fake.style.height = "0"; //højde nul, så det er den rigtige fremvist
                FNav.querySelector(".nav-main-point").style.height = FNav.querySelector(".nav-main-point").scrollHeight+"px"; //sæt til dens højde
                FNav.setAttribute("id", "ActiveDropdown"); // giv ID
                UnderPoints.style.height = UnderPoints.scrollHeight+"px"; // giv højde lig med hvor meget der skal brugest i pixels for at se det hele
            }
        })};
    });
            
    const BurgMenu = document.querySelector("#Burg-Menu"); // burger menu! (vises kun på tablet og mobil)
    const Nav = document.querySelector("header").querySelector("nav"); // nav'en
    let MenuOpen = false; // const til checks
    BurgMenu.addEventListener("click",()=>{ //hvis klikker på burger menu'en
        Resized = false; // for resize checks
        if(MenuOpen == false){ // hvis den ikke er åben
            if(window.innerWidth <= 1024){ // og hvis den ikke er laptop størrelse
                MenuOpen = true; // så sætter vi denne til true (for checks. så den kan lukke igen)
                Nav.style.right = "0"; //giv nav right 0 (så den kommer til skærmen)
                BurgMenu.querySelector("i").classList.add("Active"); // og giv en class til burger menuen
            }else{
            }
        } else{
            if(window.innerWidth <= 1024){
                MenuOpen = false;
                Nav.style.right = "-100%";
                BurgMenu.querySelector("i").classList.remove("Active");
            }
        }
    })

    // RESIZE
    window.addEventListener("resize",()=>{
        if(Resized == false){
            document.querySelector("header").querySelectorAll("nav, .nav-point, .nav-main-point, .fake-block, .underPoint, .underPoint a").forEach(e=>{// finder alle de her elementer! og for hver
                e.removeAttribute("style") //fjern stilen som vi har givet i js :)
            })
            Resized = true; // sær denne tilbage til true
            MenuOpen = false; // og alle andre lets vi har brugt ind til vidre, så den ikke kavder op
            ClickActive = false;
        }
    })
})