	// Section Skills JS
	let HtmlPer = document.querySelector(".HTMLLevel");
	let CssPer = document.querySelector(".CSSLevel");
	let PhpPer = document.querySelector(".PHPLevel");
	let JsPer = document.querySelector(".JSLevel");
	let JqueryPer = document.querySelector(".JQUERYLevel");
	let JavaPer = document.querySelector(".JAVALevel");
	let CPer = document.querySelector(".CLevel");
	let BootstrapPer = document.querySelector(".BOOTSTRAPLevel");
	let htmlground = document.querySelector(".HTMLBack");
	let cssground = document.querySelector(".CSSBack");
	let jsground = document.querySelector(".JAVASCRIPTBack");
	let phpground = document.querySelector(".PHPBack");
	let jqueryground = document.querySelector(".JQUERYBack");
	let javaground = document.querySelector(".JAVABack");
	let cground = document.querySelector(".CBack");
	let bootstrapground = document.querySelector(".BOOTSTRAPBack");
	
	window.onload = function(){

		// Skills' Percentages
		var HTMLpercent = setInterval(function(){
			HtmlPer.textContent++
			if(HtmlPer.textContent == HtmlPer.dataset.percent){
				clearInterval(HTMLpercent);
			}
		},100)

		var CSSpercent = setInterval(function(){
			CssPer.textContent++
			if(CssPer.textContent == CssPer.dataset.percent){
				clearInterval(CSSpercent);
			}
		},100)

		var JSpercent = setInterval(function(){
			JsPer.textContent++
			if(JsPer.textContent == JsPer.dataset.percent){
				clearInterval(JSpercent);
			}
		},100)

		var PHPpercent = setInterval(function(){
			PhpPer.textContent++
			if(PhpPer.textContent == PhpPer.dataset.percent){
				clearInterval(PHPpercent);
			}
		},100)

		var JQUERYpercent = setInterval(function(){
			JqueryPer.textContent++
			if(JqueryPer.textContent == JqueryPer.dataset.percent){
				clearInterval(JQUERYpercent);
			}
		},100)

		var JAVApercent = setInterval(function(){
			JavaPer.textContent++
			if(JavaPer.textContent == JavaPer.dataset.percent){
				clearInterval(JAVApercent);
			}
		},100)

		var Cpercent = setInterval(function(){
			CPer.textContent++
			if(CPer.textContent == CPer.dataset.percent){
				clearInterval(Cpercent);
			}
		},100)

		var BOOTSTRAPpercent = setInterval(function(){
			BootstrapPer.textContent++
			if(BootstrapPer.textContent == BootstrapPer.dataset.percent){
				clearInterval(BOOTSTRAPpercent);
			}
		},100)

		// Background's Heights
		
		var HTMLBackHeight = setInterval(function(){
			htmlground.style.height = htmlground.dataset.height;
		},100)
		var CSSBackHeight = setInterval(function(){
			cssground.style.height = cssground.dataset.height;
		},100)
		var JAVASCRIPTBackHeight = setInterval(function(){
			jsground.style.height = jsground.dataset.height;
		},100)
		var PHPBackHeight = setInterval(function(){
			phpground.style.height = phpground.dataset.height;
		},100)
		var JQUERYBackHeight = setInterval(function(){
			jqueryground.style.height = jqueryground.dataset.height;
		},100)
		var JAVABackHeight = setInterval(function(){
			javaground.style.height = javaground.dataset.height;
		},100)
		var CBackHeight = setInterval(function(){
			cground.style.height = cground.dataset.height;
		},100)
		var BOOTSTRAPBackHeight = setInterval(function(){
			bootstrapground.style.height = bootstrapground.dataset.height;
		},100)
		
	}

	// Section Projects JS
	 // Restaurant Project JS
	 let rimage = document.querySelector(".restaurant-picture");
	 let rtitle = document.querySelector(".restaurant-website-title");
	 let rdescription = document.querySelector(".restaurant-website-description");
	 let rright = document.querySelector(".restaurant-right-arrow");
	 let rleft = document.querySelector(".restaurant-left-arrow");
	 let rindex=0;
	 let Restaurant=[
		 {
			 src:"Restaurant.jpg",
			 title:"Restaurant Website",
			 description:"This is a home page of the website that consists of gallery of the products, cart and order form.",
		 },
		 {
			 src:"Food Speciality.jpg",
			 title:"Restaurant Website",
			 description:"This is a food section of the website that consists of gallery of the products.",
		 },
		 {
			 src:"Popular Foods.jpg",
			 title:"Restaurant Website",
			 description:"This is a popular food section of the website that consists of some delicious food that our restaurant is famous for.",
		 },
		 {
			 src:"Order.jpg",
			 title:"Restaurant Website",
			 description:"This is a order food section that the user can use it to order whatever he/she wants.",
		 },
		 {
			 src:"Login.jpg",
			 title:"Restaurant Website",
			 description:"In this page the user can put his/her account inorder to enter the website. ",
		 },
		 {
			 src:"Create Account.jpg",
			 title:"Restaurant Website",
			 description:"In this page the user can create a new account.",
		 },
		 {
			 src:"Reset Password.jpg",
			 title:"Restaurant Website",
			 description:"In this page the user can change his/her password if he/she forgot it.",
		 },
		 {
			 src:"Admin.jpg",
			 title:"Restaurant Website",
			 description:"In this page the admin can login his/her account.",
		 },
		 {
			 src:"AdminOperations.jpg",
			 title:"Restaurant Website",
			 description:"In this page the admin has many tasks to do like add a product, delete, update and check if there is a orders available.",
		 },
		 {
			 src:"Add Product.jpg",
			 title:"Restaurant Website",
			 description:"In this page the admin can add a new product by indicating its image, title, description and price.",
		 },
		 {
			 src:"Delete Product.jpg",
			 title:"Restaurant Website",
			 description:"In this page the admin can delete a  product by indicating its title and description.",
		 },
		 {
			 src:"Available Products.jpg",
			 title:"Restaurant Website",
			 description:"In this page the user can see the available products in the restaurant.",
		 },
		 {
			 src:"Food Orders.jpg",
			 title:"Restaurant Website",
			 description:"In this page the admin can check if there are an orders.",
		 },
	 ]
	 rimage.src = Restaurant[rindex]["src"];
	 rtitle.textContent = Restaurant[rindex]["title"];
	 rdescription.textContent = Restaurant[rindex]["description"];
 
	 rright.onclick = function(){
		 if(rindex>=Restaurant.length-1){
			 rindex=0;
		 }else{
			 rindex++;
		 }
		 
		 rimage.src = Restaurant[rindex]["src"];
		 rtitle.textContent = Restaurant[rindex]["title"];
		 rdescription.textContent = Restaurant[rindex]["description"];
	 }
	 rleft.onclick = function(){
		 if(rindex<=0){
			 rindex=Restaurant.length-1;
		 }else{
			 rindex--;
		 }
		 rimage.src = Restaurant[rindex]["src"];
		 rtitle.textContent = Restaurant[rindex]["title"];
		 rdescription.textContent = Restaurant[rindex]["description"];
	 }
 
 
	 // School Project JS
	 let simage = document.querySelector(".school-picture");
	 let stitle = document.querySelector(".school-website-title");
	 let sdescription = document.querySelector(".school-website-description");
	 let sright = document.querySelector(".school-right-arrow");
	 let sleft = document.querySelector(".school-left-arrow");
	 let sindex=0;
	 let School=[
		 {
			 src:"School.jpg",
			 title:"School Website",
			 description:"This is a home page of the website that consists of the levels of education at school, number of students and teacher in the school.",
		 },
		 {
			 src:"School Admin.jpg",
			 title:"School Website",
			 description:"In this page the admin login his/her account.",
		 },
		 {
			 src:"School Add Student.jpg",
			 title:"School Website",
			 description:"In this page the admin can add a new student into the school database.",
		 },
		 {
			 src:"School Delete Student.jpg",
			 title:"School Website",
			 description:"In this page the admin can delete a student from the school database.",
		 },
		 {
			 src:"School Update Student.jpg",
			 title:"School Website",
			 description:"In this page the admin can change the info of the student who go up for a new grade or change his address.",
		 },
		 {
			 src:"School Upload Marks.jpg",
			 title:"School Website",
			 description:"In this page the admin can upload the marks of the students.",
		 },
		 {
			 src:"School Marks.jpg",
			 title:"School Website",
			 description:"In this page the student can see his/her marks.",
		 },
		 
	 ]
	 simage.src = School[sindex]["src"];
	 stitle.textContent = School[sindex]["title"];
	 sdescription.textContent = School[sindex]["description"];
 
	 sright.onclick = function(){
		 if(sindex>=School.length-1){
			 sindex=0;
		 }else{
			 sindex++;
		 }
		 
		 simage.src = School[sindex]["src"];
		 stitle.textContent = School[sindex]["title"];
		 sdescription.textContent = School[sindex]["description"];
	 }
	 sleft.onclick = function(){
		 if(sindex<=0){
			 sindex=School.length-1;
		 }else{
			 sindex--;
		 }
		 simage.src = School[sindex]["src"];
		 stitle.textContent = School[sindex]["title"];
		 sdescription.textContent = School[sindex]["description"];
	 }
 
	 // Film Project JS
	 let fimage = document.querySelector(".film-picture");
	 let ftitle = document.querySelector(".film-website-title");
	 let fdescription = document.querySelector(".film-website-description");
	 let fright = document.querySelector(".film-right-arrow");
	 let fleft = document.querySelector(".film-left-arrow");
	 let findex=0;
	 let Film=[
		 {
			 src:"Film.jpg",
			 title:"Film Website",
			 description:"This is a home page of the website that consists of the levels of education at Film, number of students and teacher in the Film.",
		 },
		 {
			 src:"Film Login.jpg",
			 title:"Film Website",
			 description:"In this page the user can login his/her account.",
		 },
		 {
			 src:"Film Admin.jpg",
			 title:"Film Website",
			 description:"In this page the admin login his/her account.",
		 },
		 {
			 src:"Film Admin Tasks.jpg",
			 title:"Film Website",
			 description:"In this page the admin can add a new student into the Film database.",
		 },
		 {
			 src:"Film Delete.jpg",
			 title:"Film Website",
			 description:"In this page the admin can delete a film from the Film database.",
		 },
		 {
			 src:"Film Update.jpg",
			 title:"Film Website",
			 description:"In this page the admin can change the info of the film or series.",
		 },
		 {
			 src:"Film Add.jpg",
			 title:"Film Website",
			 description:"In this page the admin can upload a new Film or Series.",
		 },
		 {
			 src:"Film List.jpg",
			 title:"Film Website",
			 description:"In this page the user can see all films and series by indicating the type and nationality.",
		 },
		 
	 ]
	 fimage.src = Film[findex]["src"];
	 ftitle.textContent = Film[findex]["title"];
	 fdescription.textContent = Film[findex]["description"];
 
	 fright.onclick = function(){
		 if(findex>=Film.length-1){
			 findex=0;
		 }else{
			 findex++;
		 }
		 
		 fimage.src = Film[findex]["src"];
		 ftitle.textContent = Film[findex]["title"];
		 fdescription.textContent = Film[findex]["description"];
	 }
	 fleft.onclick = function(){
		 if(findex<=0){
			 findex=Film.length-1;
		 }else{
			 findex--;
		 }
		 fimage.src = Film[findex]["src"];
		 ftitle.textContent = Film[findex]["title"];
		 fdescription.textContent = Film[findex]["description"];
	 }