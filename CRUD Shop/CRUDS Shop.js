let tbody = document.getElementById("tbody");
let Title = document.getElementById("title");
let Price = document.getElementById("price");
let Tax = document.getElementById("tax");
let Ads = document.getElementById("ads");
let Total = document.getElementById("total");
let Discount = document.getElementById("discount");
let Category = document.getElementById("category");
let Create = document.getElementById("createBtn");
let Count = document.getElementById("count");
let UpdateBtn = document.getElementById("updateBtn");
let DelBtn = document.getElementById("deleteBtn");
let Search = document.getElementById("search");
let tmp;
let newPro;


//function getTotal() Price
function getTotal(){
    let Result=(+Price.value + +Tax.value + +Ads.value) - Discount.value;//Add Price Inputs and put them in result variable
    Total.innerHTML=Result;//Put Result value in p total tag;
    if(Price.value !=''){ // if there is a value in price input make the total background is lightgreen;
        Total.style.background="lightgreen";
    }
    else{ // if there is no value in price value make the total background red;
        Total.style.background="red";
    }
 }

 let data;
 if(localStorage.Product!=null){//When reloading the page we must check if there is a data in localStorage, if there is a data;
    data=JSON.parse(localStorage.Product);//Put the data located in localStorage in the array data[] to aware losing data.
 }
 else{
    data=[];
 }
 
Create.onclick = function(){// When we click on Create button;
    newPro={ // Here we must create a object holds the inputs value;
        Title:Title.value,
        Price:Price.value,
        Tax:Tax.value,
        Ads:Ads.value,
        Discount:Discount.value,
        Total:Total.textContent,
        Category:Category.value
    }
    if(Count.value!='' && Count.value>1){
        for(let i=0;i<Count.value;i++){
            data.push(newPro);
        }
    }else{
        data.push(newPro);// Add the created object to the array "data[]";
    }
    
    
    localStorage.setItem("Product",JSON.stringify(data)); //Add the array to localStorage to aware deleting the data while reloading the page;
    ClearInputs()
    ShowData()
} 
function ClearInputs(){
    Total.textContent='';
    Title.value='';
    Price.value='';
    Tax.value='';
    Ads.value='';
    Discount.value='';
    Category.value='';

}

function ShowData(){
        let table='';
    for(let i=0;i<data.length;i++){
        table+=`
        <tr>
                <td>${i+1}</td>
                <td>${data[i].Title}</td>
                <td>${data[i].Price}</td>
                <td>${data[i].Tax}</td>
                <td>${data[i].Ads}</td>
                <td>${data[i].Discount}</td>
                <td>${data[i].Total}</td>
                <td>${data[i].Category}</td>
                <td><button onclick="Update(${i})">Update</button></td>
                <td><button onclick="Delete(${i})">Delete</button></td>
        </tr>`;
    }
    tbody.innerHTML=table;
    DeleteBtn()
}
ShowData()
//
function Delete(i){
    data.splice(i,1);
    localStorage.Product=JSON.stringify(data);
    ShowData();
}
//
function DeleteBtn(){
    if(data.length>1){
        DelBtn.innerHTML=`
            <button onclick="DeleteAll()">Delete All (${data.length})</button>
        `
    }
    else{
        DelBtn.innerHTML='';
    }
}
function DeleteAll(){
    data.splice(0);
    localStorage.clear();
    ShowData()
}
function Update(i){
    Title.value=data[i].Title;
    Price.value=data[i].Price;
    Tax.value=data[i].Tax;
    Ads.value=data[i].Ads;
    Discount.value=data[i].Discount;
    Category.value=data[i].Category;
    Create.style.display="none";
    Count.style.display="none";
    UpdateBtn.style.display="block";
    getTotal()
    tmp=i;
    

}
function UpdateData(){
    newPro={ // Here we must create a object holds the inputs value;
        Title:Title.value,
        Price:Price.value,
        Tax:Tax.value,
        Ads:Ads.value,
        Discount:Discount.value,
        Total:Total.textContent,
        Category:Category.value
    }
    data[tmp]=newPro;
    ShowData()
    localStorage.Product=JSON.stringify(data);
    UpdateBtn.style.display="none";
    Create.style.display="block";
    Total.style.background="red";
    ClearInputs();
   
}
let searchMood;
function SearchTitle(){
    searchMood="Title"    
    Search.placeholder="Search by Title";
    Search.focus();

    
     
}
function SearchCategory(){
    searchMood="Category";
    Search.placeholder="Search by Category";
    Search.focus();
}

Search.onkeyup = function(){
    let table='';

        if(searchMood==="Title"){
            for(var i=0;i<data.length;i++){
            if(data[i].Title.includes(Search.value)){
                table+=`
                    <tr>
                        <td>${i+1}</td>
                        <td>${data[i].Title}</td>
                        <td>${data[i].Price}</td>
                        <td>${data[i].Tax}</td>
                        <td>${data[i].Ads}</td>
                        <td>${data[i].Discount}</td>
                        <td>${data[i].Total}</td>
                        <td>${data[i].Category}</td>
                        <td><button onclick="Update(${i})">Update</button></td>
                        <td><button onclick="Delete(${i})">Delete</button></td>
                    </tr>`  
                }
            
            }
        }
        else{
            for(var i=0;i<data.length;i++){
            if(data[i].Category.toLowerCase().includes(Search.value)){
                table+=`
                    <tr>
                        <td>${i+1}</td>
                        <td>${data[i].Title}</td>
                        <td>${data[i].Price}</td>
                        <td>${data[i].Tax}</td>
                        <td>${data[i].Ads}</td>
                        <td>${data[i].Discount}</td>
                        <td>${data[i].Total}</td>
                        <td>${data[i].Category}</td>
                        <td><button onclick="Update(${i})">Update</button></td>
                        <td><button onclick="Delete(${i})">Delete</button></td>
                    </tr>`  
                }
            
            }
        }
       
        tbody.innerHTML=table;
    }