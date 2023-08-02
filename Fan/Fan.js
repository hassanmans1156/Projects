let Fan = document.querySelector(".fan");
let audio = document.querySelector("audio");
function On(){
    Fan.classList.add("rotate-1");
    audio.play();
}
function Off(){
    for(var i=0;i<4;i++){
        Fan.classList.remove("rotate-"+i);
        audio.pause();
    }
}
function One(){
    Fan.classList.remove("rotate-3");
    Fan.classList.remove("rotate-2");
    Fan.classList.add("rotate-1");
    audio.play();
}
function Two(){
    Fan.classList.remove("rotate-3");
    Fan.classList.remove("rotate-1");
    Fan.classList.add("rotate-2");
    audio.play();
}
function Three(){
    Fan.classList.remove("rotate-2");
    Fan.classList.remove("rotate-1");
    Fan.classList.add("rotate-3");
    audio.play();
}