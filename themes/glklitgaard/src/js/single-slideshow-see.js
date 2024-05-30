window.addEventListener("load",()=>{ // når dokumentet loader
    if(document.querySelectorAll("img") != null){ // hvis documentet har billeder
        const Display = document.createElement("div"); //lav et display
        Display.setAttribute("class", "displayInactive"); // set klasse
    }
    /*const slideshows = document.querySelectorAll(".slideshow"); //find alle slideshowne der er
    let CurrentIndex = 0;// sæt index til 1 (start billede til arrays.)
    if(slideshows != null){ //hvis der findes slideshows. gør resten
        slideshows.forEach(ss =>{ // for hver slideshow på side (der kan være mere end en, så lavet til hver)
            const Images = ss.querySelector(".slideshow-img").querySelectorAll("img"); // find alle slideshow billederne
            Images[0].setAttribute("class", "ActiveIMG"); // giv den første aktiv klasse
            const Cont = ss.querySelector(".SlideControls"); //og find control div'en. til senere knapper

            let i = 0; // i bruges til at tildele værdi
            Images.forEach(()=>{ // for hver billede der er, laves en knap med værdiei. hver gang dette køre, stiger værdien, så alle knapper har unikke værdier
                const Butt = document.createElement("button"); // < lav knap
                Butt.setAttribute("value", i); // < tilsæt værdig
                if(i == 0){Butt.setAttribute("class","ActivelyOnIMG")} // < hvis det er den første, giv den aktiv klasse
                i++; // stig i værdien
                Cont.appendChild(Butt); // smæk den nd i cont consten
                Butt.addEventListener("click", ()=>{ // tilgiv alle en klik event
                    Slide(Butt.value, false); // tildel dens værdi, og så falsk (så vi kan bruge samme funktion til pilene!)
                })
            });

            ss.querySelector(".left").addEventListener("click",()=>{ // når man klikker på venstre, så kør funktionen slide(), med følgenede værdier
                Slide(-1, true);
            })
            ss.querySelector(".right").addEventListener("click",()=>{ // samme som over men... højre
                Slide(1, true);
            })

            function Slide(Index, direction) { //< funktione slide med værdi standin's
                const Butts = ss.querySelector(".SlideControls").querySelectorAll("button"); // find alle knapperne
                const olActive = ss.querySelector(".slideshow-img").querySelector(".ActiveIMG"); // og find the aktive billede
                let olInd = CurrentIndex; // sæt den nuværende index i et tempt let
                if(direction == false && Index != CurrentIndex){ // hvis en knap er blevet klikket (false delen) og den ikke har samme værdi som den nuværende index
                    if(Index < olInd){ // hvis den nye index er størrese end den gamle
                        while(Index < olInd){ // så alle bilederne med den støre værdi, sæt dem til mindre.
                            Images[olInd].style.left = "-100%";
                            olInd--;
                        }
                    } else{
                        while(Index > olInd){ // samme over men omvendt
                            Images[olInd].style.left = "100%";
                            olInd++;
                        }
                    }
                    ss.querySelector(".ActivelyOnIMG").classList.remove("ActivelyOnIMG"); //fjern klassen på det aktive knap
                    Butts[Index].classList.add("ActivelyOnIMG"); // og giv til denne basse
                    Images[Index].style.left = 0; // kør det nye index'ed billede vises.
                    olActive.classList.remove("ActiveIMG"); // fjern klaase
                    Images[Index].classList.add("ActiveIMG"); // og giv til denne her basse
                    CurrentIndex = Index; // giv current indexen samme værdi som den nye.

                } else if(direction == true){ // men hvis det er pilene der bliver klikket
                    let p = 0; // giv p 0 :) start af en array. bruger den til at tælle op i senere if statements
                    if(Images.length-1 < olInd+Index){ // hvis vi gør til næste ved sidste
                        Images.forEach((imgS)=>{ // for alle billerne, så sæt dem til at være skjult til venstre undtaget det første billede
                            if(p==0){
                                Images[0].style.left = 0;
                                ss.querySelector(".ActivelyOnIMG").classList.remove("ActivelyOnIMG");
                                Butts[0].classList.add("ActivelyOnIMG");
                                olActive.classList.remove("ActiveIMG");
                                Images[0].classList.add("ActiveIMG");
                                p++;
                                CurrentIndex = 0;
                            } else{imgS.style.left = "-100%"; p++;}
                        })
                    } else if(olInd+Index < 0){ // samme som over, men omvendt
                        const max = Images.length-1;
                        Images.forEach((imgS)=>{
                            if(p==max){
                                Images[max].style.left = 0;
                                ss.querySelector(".ActivelyOnIMG").classList.remove("ActivelyOnIMG");
                                Butts[max].classList.add("ActivelyOnIMG");
                                olActive.classList.remove("ActiveIMG");
                                Images[max].classList.add("ActiveIMG");
                                CurrentIndex = max;
                            } else{imgS.style.left = "100%"; p++;}
                        })
                    } else{ //dog hvis vi ikke når over max eller under nul. så bare... sammensæt index og den gamle, og brug dens værdi
                        Images[olInd+Index].style.left = 0;
                        ss.querySelector(".ActivelyOnIMG").classList.remove("ActivelyOnIMG");
                        Butts[olInd+Index].classList.add("ActivelyOnIMG");
                        olActive.classList.remove("ActiveIMG");
                        Images[olInd+Index].classList.add("ActiveIMG");  
                        if(Index == 1){ Images[olInd].style.left = "100%"} else{ Images[olInd].style.left = "-100%"}
                        CurrentIndex = olInd+Index;
                    }
                }

            }
        })
    }*/
})