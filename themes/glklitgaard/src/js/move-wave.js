const WaveDiv = document.querySelectorAll(".Waves");

const body = document.querySelector("body");
const height = Math.max(body.scrollHeight, body.offsetHeight);

window.addEventListener("load",()=>{
    if(WaveDiv.length > 0){
        WaveDiv.forEach(e=>{
            const ScrollWhen = e.getBoundingClientRect().top-(window.innerHeight/2);
            const ScrollStop = e.getBoundingClientRect().top+e.clientHeight+window.innerHeight;
            const Wave = e.querySelector("svg");
            window.addEventListener("scroll",()=>{
                const WaveLength =  new WebKitCSSMatrix(Wave.style.transform)["m41"];
                if(window.scrollY > ScrollWhen && window.scrollY < ScrollStop && WaveLength < Wave.clientWidth){
                    const change = (window.scrollY-ScrollWhen)/2.5;
                    Wave.style.transform = "translateX(-"+change+"px)";
                }
            })
        })
    }
})