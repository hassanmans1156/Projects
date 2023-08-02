let secondWise = document.querySelector(".secondWise");
let minuteWise = document.querySelector(".minuteWise");
let hourWise = document.querySelector(".hourWise");



let rotate = setInterval(function(){
    let Time = new Date();
    let currentSecond=Time.getSeconds();
    let currentMinute=Time.getMinutes();
    let currentHour=Time.getHours();
    hourWise.style.transform=`rotate(${currentHour*30}deg)`;
    minuteWise.style.transform=`rotate(${currentMinute*6}deg)`;
    secondWise.style.transform=`rotate(${currentSecond*6}deg)`;
},1000)