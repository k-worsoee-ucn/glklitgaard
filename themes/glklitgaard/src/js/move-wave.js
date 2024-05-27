const WaveDiv = document.querySelectorAll(".Waves");
// ^finder aller elementer med classen Wave på en side

const body = document.querySelector("body");
const height = Math.max(body.scrollHeight, body.offsetHeight);
// ^ finder krops tagget og så efterføjlende højden på det. Math.max() finder bare det største af de to måder at finde højden på

window.addEventListener("load",()=>{
    // når siden loader, og hvis der er mere end nul .Waves (altså, hvis der er mindst en på siden)
    if(WaveDiv.length > 0){
        WaveDiv.forEach(e=>{
            // så for hver, skal vi inlæse et nummer fra hvornår den skal bevæge sig og hvornår den stopper
            const ScrollWhen = e.getBoundingClientRect().top-(window.innerHeight/2);
            // ^ højden på .Wave minus en halv skærm (det tages fra toppen af siden ned, så minus gør det kommer tidligere i scrolle processen)
            // v og stop når vi er til toppen af Waven, plus waves højde og en hel side
            const ScrollStop = e.getBoundingClientRect().top+e.clientHeight+window.innerHeight;
            const Wave = e.querySelector("svg");
            // ^ giver navn til SVG'en, da det er den vi bevæger.
            // v giv hver .Wave en event der sker når der scrolles
            window.addEventListener("scroll",()=>{
                // v lændgen på SVGen, WebKitCSSMatrix() finder bare CSS værdierne, og m41 er translateX værdien
                const WaveLength =  new WebKitCSSMatrix(Wave.style.transform)["m41"];
                // v Hvis vi er mere end minumunmet, mindre en maksimumet men også hvis waves ikke bevæger sig mere end det er langt.
                if(window.scrollY > ScrollWhen && window.scrollY < ScrollStop && WaveLength < Wave.clientWidth){
                    // v ændre på dens translateX værdi
                    const change = (window.scrollY-ScrollWhen)/1.5;
                    Wave.style.transform = "translateX(-"+change+"px)";
                }
            })
        })
    }
})