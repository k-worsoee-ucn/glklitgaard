const WaveDiv = document.querySelectorAll(".Waves");

const body = document.querySelector("body");
const height = Math.max(body.scrollHeight, body.offsetHeight);

window.addEventListener("load",()=>{
    console.log(WaveDiv)
    if(WaveDiv.length > 0){
        WaveDiv.forEach(e=>{
            const ScrollWhen = e.getBoundingClientRect().top-window.innerHeight
            const ScrollStop = e.getBoundingClientRect().top+e.clientHeight+window.innerHeight;
            const Wave = e.querySelector("svg");
            console.log("aaa");
            window.addEventListener("scroll",()=>{
                if(window.scrollY > ScrollWhen && window.scrollY < ScrollStop){
                    const change = (window.scrollY-ScrollWhen)/2.5;
                    console.log(change);
                    Wave.style.transform = "translateX(-"+change+"px)";
                }
            })
        })
    }
})