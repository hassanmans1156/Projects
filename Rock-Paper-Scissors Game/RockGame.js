let PlayerValue = document.querySelector(".PlayRes");
let ComputerValue = document.querySelector(".CompRes");
let Pwin = document.querySelector(".PlayerWin");
let Cwin = document.querySelector(".ComputerWin");
let Draw = document.querySelector(".Draw");
let PlayerScore = document.querySelector(".PlayScore");
let ComputerScore = document.querySelector(".CompScore");
let results = document.querySelectorAll(".result");
let array =["Rock","Paper","Scissor"];
function Input(name){
    PlayerValue.textContent=name;
    Computer();
    Results();
}
function Computer(){
    var random = Math.floor(Math.random()*array.length);
    ComputerValue.textContent=array[random];

}
function Results(){
    if(PlayerValue.textContent=="Rock" && ComputerValue.textContent=="Scissor"){
        Pwin.style.opacity=1;
        PlayerScore.textContent++;

    }
    if(PlayerValue.textContent=="Paper" && ComputerValue.textContent=="Rock"){
        Pwin.style.opacity=1;
        PlayerScore.textContent++;

    }
    if(PlayerValue.textContent=="Scissor" && ComputerValue.textContent=="Paper"){
        Pwin.style.opacity=1;
        PlayerScore.textContent++;

    }
    
    if(ComputerValue.textContent=="Rock" && PlayerValue.textContent=="Scissor"){
        Cwin.style.opacity=1;
        ComputerScore.textContent++;

    }
    if(ComputerValue.textContent=="Paper" && PlayerValue.textContent=="Rock"){
        Cwin.style.opacity=1;
        ComputerScore.textContent++;

    }
    if(ComputerValue.textContent=="Scissor" && PlayerValue.textContent=="Paper"){
        Cwin.style.opacity=1;
        ComputerScore.textContent++;

    }
    if(PlayerValue.textContent == ComputerValue.textContent){
        Draw.style.opacity=1;
    }
}

var hide = setInterval(function(){
    results.forEach(result=>{
        result.style.opacity=0;
    })
    PlayerValue.textContent="";
    ComputerValue.textContent="";
},3000)

function Reset(){
PlayerValue.textContent="";
ComputerValue.textContent="";
PlayerScore.textContent=0;
ComputerScore.textContent=0;
}
