<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eagle Series | Home</title>
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Aref+Ruqaa+Ink:wght@400;700&family=Cairo:wght@200;300;400;500;600;700;800&family=Dosis:wght@200&family=El+Messiri:wght@400;500;600;700&family=Noto+Kufi+Arabic:wght@100;200;300;400;500;700&family=Poppins:wght@100;200;300;400;500;600;800&family=Tajawal:wght@200;300;400;500;700;800;900&family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,700;0,900;1,100;1,200;1,300;1,400&family=Yeon+Sung&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Aref+Ruqaa+Ink:wght@400;700&family=Cairo:wght@200;300;400;500;600;700;800&family=Dosis:wght@200&family=Noto+Kufi+Arabic:wght@100;200;300;400;500;700&family=Poppins:wght@100;200;300;400;500;600;800&family=Tajawal:wght@200;300;400;500;700;800;900&family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,700;0,900;1,100;1,200;1,300;1,400&family=Yeon+Sung&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800&family=Dosis:wght@200&family=Poppins:wght@100;200;300;400;500;600;800&family=Tajawal:wght@200;300;400;500;700;800;900&family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,700;0,900;1,100;1,200;1,300;1,400&family=Yeon+Sung&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800&family=Dosis:wght@200&family=Poppins:wght@100;200;300;400;500;600;800&family=Tajawal:wght@200;300;400;500;700;800;900&family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,700;0,900;1,100;1,200;1,300;1,400&family=Yeon+Sung&display=swap');
        *{
            margin:0;
            padding:0;
            font-family:'Yeon Sung', cursive;
            box-sizing:border-box;
            scroll-behavior:smooth;
        }
        header{
            position:fixed;
            z-index:999;
            background:black;
            width:100%;
            display:flex;
            align-items:center;
            justify-content:space-between;
            box-shadow: 0 0 15px white;
           
        }
        header .icon{
            display:flex;
            align-items:center;
        }
        header .icon p{
            color:white;
            font-size:25px;
        }
        header .icon span{
            color:gold;
            margin-right:10px;
        }
        header .icon img{
            width:100px;
            height:80px;
            margin-right:10px;
            border-radius:50%;
        }
        header .links {
            margin-right:50px;
        }
        header .links a{
            margin:10px;
            font-size:25px;
            text-decoration:none;
            color:white;
            transition:0.8s ease;
            position:relative;

        }
        header .links a:hover{
            color:gold;
        }
        header .links a::before{
            content:'';
            position:absolute;
            bottom:-5px;
            left:0;
            height:2px;
            width:0%;
            background:gold;
            transition:0.8s ease;
        }
        header .links a:hover::before{
            width:100%;
        }
        .Home{
            background:url("Home.jpg");
            background-attachment:fixed;
            height:100vh;
            display:flex;
            align-items:center;
            
            
        }
        .Home .content{
            width:50%;
            margin-left:40px;
        }
        .Home .content h1{
            font-size:60px;
        }
        .Home .content p{
            font-weight:bold;
            font-size:24px;
            line-height:40px;
            text-align:justify;
        }
        .Home .content span{
            color:gold;

        }
        .Home a{
            
            margin-left:5%;
            width:200px;
            text-align:center;
            text-decoration:none;
            padding:10px 20px;
            border:none;
            background:gold;
            color:black;
            font-size:30px;
            font-weight:bold;
            border-radius:30px;
            transition:0.5s ease;
            
        }
        .Home a:hover{
            background:black;
            color:gold;
        }
        .Series{
            background:linear-gradient(black,orange,gold,gold,yellow);
            min-height:100vh;
            max-height:auto;
        }
    
         .Series .content{
            margin-top:30px;
         }   
        
        .card .info{
            padding:10px;
            display:flex;
            justify-content:center;
            align-items:center;
            flex-direction:column;
        }
        .card .info h1{
            color:white;
            text-align:right;
            font-weight:bold;
            
        }
        .card .info p{
            color:white;
            text-align:justify;
            direction:rtl;
            font-weight:bold;
        }
        .Series .content .card img{
            width:100%;
            height:200px;
            border-radius:20px;
            transition:1s ease;
        }
        .Series .content .card{
            width:250px;
            height:200px;
            box-shadow: 0 0 3px white;
            border-radius:20px;
            overflow:hidden;
            transition:.5s ease;
            cursor:pointer;
            margin:10px;
            background:black;
            
            
        }
        .Series .content .card:hover img{
            border-radius:20px 20px 0px 0px;
        }
        .Series .content .card:hover{
            height:400px;
        }
         .MButton{
            margin-left:80px;
            width:30%;
            background:gold;
            text-decoration:none;
            padding:10px;
            color:black;
            font-weight:bold;
            border-radius:10px;
            transition:0.8s ease;
            cursor:pointer;

        }
         .MButton:hover{
            box-shadow: 0 0 10px gold;
            transform:scale(1.1);
        }
        .Series .content{
            display:flex;
            flex-wrap:wrap;
            margin-left:100px;
            
        }
        ::-webkit-scrollbar{
        
            background:gold;
            width:15px;
        }
        ::-webkit-scrollbar-thumb{
            background:black;
            border-radius:50px;
            box-shadow:0 0 5px black;
    
            
        }
        .Series  .title{
                padding-top:30px;
                text-align:center;
                font-size:30px;
                color:white;
                font-family: 'El Messiri', sans-serif;
        }
        .Series .form{
            display:flex;
            justify-content:center;
            margin-top:30px;
        }
        .Series .form select{
            padding:15px 15px;
            background:black;
            color:white;
            font-weight:bold;
            font-size:20px;
            cursor: pointer;
            border-radius:10px;
            border:none;
            
        }
        .Series .form button{
            background:black;
            border:none;
            padding:10px;
            font-size:18px;
            color:gold;
            font-weight:bold;
            border-radius:20px;
            cursor:pointer;
        }
        
        select:focus{
            outline:none;
        }
        .card .info ul li{
            color:lightgreen;
        }
        option{
            background:black;
            color:white;
            cursor:pointer;
        }
        .Result{
            margin-left:100px;
        }
        .btn{
            display:flex;
            align-items:center;
        }
        footer{
            background:black;
            width:100%;
            height:100px;
            display:flex;
            justify-content:center;
            align-items:center;
        }
        .footText{
            display:flex;
            flex-direction:column;
            align-items:center;
        }
        .footText p {
            color:white;
        }
        .Film{
            height:70vh;
            width:100%;
            background:linear-gradient(yellow,gold,gold,orange,black);
            display:flex;
            justify-content:center;
            align-items:center;
        }
        .Film .content .card{
            height:200px;
            width:250px;
            border-radius:20px;
            background:black;
        }
        .Film .content .card img{
            width:100%;
            height:200px;
            border-radius:20px 20px 0 0;
        }
        .Film .content .card .info{
            display:flex;
            align-items:center;
            justify-content:center;
            flex-direction:column;
        }
        
        
        .swiper-pagination{
            color:black;
        }
        .one{
            height:100vh;
            width:100%;
            position:fixed;
            background:rgba(0,0,0,0.7);
            z-index:999;
            display:none;
        }
        .show{
            display:block;
        }
        .one .container{
            display: flex;
            justify-content:center;
            align-items:center;
            height:100vh;
            width:100%;
            
            
           
        }
        .one .container .card{
            height:500px;
            width:800px;
            border-radius:20px;
            
            
        }
        .one .container .card img{
            height:500px;
            width:800px;
            border-radius:20px;
            cursor: pointer;
        }
        .one .container .card .swiper .swiper-button-prev,.swiper-button-next{
            color:white;
        }
        .swiper-pagination-bullet{
            background:white;
        }
        .swiper-button-next:after, .swiper-button-prev:after{
            font-size:30px;
            opacity:0.6;
        }
        .swiper-pagination-bullet{
            border-radius:unset;
            width:20px;
            height:3px;
        }
        .swiper{
            border-radius: 20px;
        }
        .close{
            position:absolute;
            top:100px;
            right:30px;
            color:white;
            cursor: pointer;
            font-size:40px;
            font-weight:bold;
        }
       
        
        
        
        
        
    </style>
</head>
<body>
<section class="one">
    <div class="close">X</div>
    <div class="container">
        <!-- Slider main container -->
        <div class="card">
            <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                        <div class="swiper-slide"><img src="AlDabour.jpg"></div>
                        <div class="swiper-slide"><img src="beitJeddy.jpg"></div>
                        <div class="swiper-slide"><img src="AlDabour.jpg"></div>
                        <div class="swiper-slide"><img src="Bab-Alhara.jpg"></div>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
                <!-- If we need scrollbar -->
                <div class="swiper-scrollbar"></div>
                </div>
            </div>
        </div>
    </section>

        
    <header>
        <div class="icon">
            <img src="Icon.jpg">
            <p><span>Eagle</span>Series</p>
        </div>
        <div class="links">
            <a href="Manager.php">Admin</a>
            <a href="#Home">Home</a>
            <a href="#Series">Series</a>
            <a href="#About">About</a>
            <a href="SignIn.php">Logout</a>
        </div>
    </header>

    <section class="Home" id="Home">
        <div class="content">
            <h1>Eagle<span> Series</span></h1>
            <p>A film also called a movie, motion picture, moving picture, picture, photoplay or (slang) flick is a work of visual art that simulates experiences and otherwise communicates ideas, stories, perceptions, feelings, beauty, or atmosphere through the use of moving images. These images are generally accompanied by sound and, more rarely, other sensory stimulations. The word "cinema", short for cinematography, is often used to refer to filmmaking and the film industry, and to the art form that is the result of it.</p>
        </div>
            <a href="#Series">Series</a>
    </section>

    <section class="Series" id="Series">
            <h1 class="title">مسلسلات و أفلام</h1>
                <div class="form">
                    <form method="POST">
                        <select name="type">
                            <option>Type</option>
                            <option>Series</option>
                            <option>Films</option>
                        </select>
                        <select name="nationality">
                            <option>Nationality</option>
                            <option>Syrian</option>
                            <option>Lebanese</option>
                        </select>
                        <button class="Result" name="query">Results</button>
                    </form>
                </div>
    
                <div class="content">
                    <?php
                        $con=mysqli_connect("localhost","root","","videos");
                        if(isset($_POST['query'])){
                            $type=$_POST['type'];
                            $nationality=$_POST['nationality'];
                            $results=mysqli_query($con,"SELECT * FROM filmseries WHERE Type='$type' AND Nationality='$nationality'");
                                while($rows=mysqli_fetch_array($results)){
                                echo "
                                    <div class='card'>
                                        <img src='$rows[Image]'>
                                        <div class='info'>
                                            <h1>$rows[Title]</h1>
                                            <p>$rows[Description]</p>
                                            <ul>
                                                 <li>عدد المواسم : $rows[Seasons]</li>
                                            </ul>
                                        </div>
                                        <div class='btn'>
                                            <a class='MButton' href='More.php?ID=$rows[ID]'>More ></a>
                                        </div>      
                                    </div>";
                                }
                            }
                    ?>
                </div>
    </section>

    
</body>

<script>
    $(".exit").click(function(){
        $(".more").addClass("hide");
    });
    $("img").click(function(){
        $(".one").addClass("show");
    });
    $(".close").click(function(){
        $(".one").removeClass("show");
    })
</script>
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->

<script>

const swiper = new Swiper('.swiper', {
  // Optional parameters
  
  loop: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
    clickable:true,
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },
});
</script>

</html>