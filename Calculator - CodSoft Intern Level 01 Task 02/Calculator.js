let Times = document.querySelector(".times");
let Divide = document.querySelector(".divide");
let Btns = document.querySelectorAll(".num");
let Signs = document.querySelectorAll(".sign");
let Screen = document.querySelector("input");
let ClearAll = document.querySelector(".clearAll");
let Clear = document.querySelector(".clear");
let Percent = document.querySelector(".percent");
let Equal = document.querySelector(".equal");
// Numbers Click
Btns.forEach(btn=>{
    btn.onclick = function(){
        Screen.value = Screen.value + btn.textContent;
    }
})
// Signs Click
Signs.forEach(sign=>{
    sign.onclick = function(){
        Screen.value = Screen.value + sign.textContent;
    }
})
// AC Click
ClearAll.onclick = function(){
    Screen.value="";
}
// C Click
Clear.onclick = function(){
    Screen.value=0;
}
// Percent click
Percent.onclick = function(){
    Screen.value = Screen.value * 0.01;
}
// Equal click
 Equal.onclick = function(){
    Screen.value = eval(Screen.value);
}
// Times Click
Times.onclick = function(){
    Screen.value = Screen.value + "*";
}
// Divide Click
Divide.onclick = function(){
    Screen.value = Screen.value + "/";
}