let menu = document.querySelector(".toggle");
    let navbar = document.querySelector(".navbar");
    let close = document.querySelector(".close");
    let header = document.querySelector("header");
    let links = document.querySelectorAll(".menu a");
    let Numbers = document.querySelector(".numbers");
    let Nums = document.querySelectorAll(".Num");
    let Sections = document.querySelectorAll("section");
    let Contents = document.querySelectorAll(".content");
    let Footer = document.querySelector("footer");
    let started = true;

    for(var i=0;i<Contents.length;i++){
        Contents[i].style.opacity=0;
        Contents[i].style.transform="translateY(0)";
    }
    /*Menu Open toggle Click*/
    menu.onclick = function(){
        navbar.classList.add("Open");
    }
    /*Menu Close x Click*/
    close.onclick = function(){
        navbar.classList.remove("Open");
    }
    /*Window Scroll*/
    window.onscroll = function(){
        
        /*Change Backround of Header while scrolling */
        if(window.scrollY>30){
            header.style.backgroundColor="#2C3E50";
            links.forEach(link=>{
                link.style.color="#1F618D";
            })
            
        }
        else{
            header.style.backgroundColor="transparent";
            links.forEach(link=>{
                link.style.color="#fff";
            })
        }
        /*Counting Numbers while scrolling*/
        if(window.scrollY>=Numbers.offsetTop-400){
            if(started){
                Nums.forEach(Num=>{
                    let count = setInterval(function(){
                        Num.textContent++;
                        if(Num.textContent == Num.dataset.goal){
                            clearInterval(count);
                        }
                    },5)
                })
            started = false;
            }
        }

        for(var i=0;i<Sections.length;i++){
            if(window.scrollY >= Sections[i].offsetTop - 400){
                Contents[i].style.opacity=1;
                Contents[i].style.transform="translateY(0)";
               }
            }
            

        if(window.scrollY >= Footer.offsetTop-600){
            Contents[4].style.opacity=1;
            }    
        }
    /*List Click*/
    function Change(x,y){
        document.getElementById(x).classList.toggle("rotate");
        document.getElementById(y).classList.toggle("Show");
    }