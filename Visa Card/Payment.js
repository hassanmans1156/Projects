let CardNumber = document.querySelector(".CNum");
let CardName = document.querySelector(".CName"); 
let CardMonth = document.querySelector(".CMonth");
let CardYear = document.querySelector(".CYear");
let InputNumber = document.querySelector(".INumber");
let InputHolder = document.querySelector(".IHolder");
let SelectMonth = document.querySelector(".SMonth");
let SelectYear = document.querySelector(".SYear");
let InputCode = document.querySelector(".ICode");
let Topic = document.querySelector(".topic");
let Holder = document.querySelector(".holder");
let ExpDate = document.querySelector(".edate");
let BackCode = document.querySelector(".BackCode");

/* Input Number Focus, Blur and Input*/
InputNumber.oninput = function(){
    CardNumber.value = InputNumber.value;
}
InputNumber.onfocus = function(){
    CardNumber.style.boxShadow="0 0 5px #fff inset";
}
InputNumber.onblur = function(){
    CardNumber.style.boxShadow="none";
}


/* Input Holder Focus, Blur and Input */
InputHolder.oninput = function(){
    CardName.textContent = InputHolder.value;
}
InputHolder.onfocus = function(){
    Holder.style.boxShadow="0 0 5px #fff inset";
}
InputHolder.onblur = function(){
    Holder.style.boxShadow="none";
}



/* Month and Year Selects Input */
SelectMonth.onchange = function(){
    CardMonth.textContent = SelectMonth.value;
}
SelectYear.onchange = function(){
    CardYear.textContent = SelectYear.value;
}
SelectMonth.onfocus = function(){
    ExpDate.style.boxShadow="0 0 5px #fff inset";
}
SelectMonth.onblur = function(){
    ExpDate.style.boxShadow="none";
}
SelectYear.onfocus = function(){
    ExpDate.style.boxShadow="0 0 5px #fff inset";
}
SelectYear.onblur = function(){
    ExpDate.style.boxShadow="none";
}




/*Input Code while Focus, Blur and Input */
InputCode.onfocus = function(){
        Topic.style.transform = "rotateY(180deg)";
}
InputCode.onblur = function(){
    Topic.style.transform = "rotateY(0)";   
}
InputCode.oninput = function(){
    BackCode.value = InputCode.value;   
}