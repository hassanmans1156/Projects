<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;600;700&family=Dosis:wght@200;300;400;500;700&family=Itim&family=Lobster&family=Merriweather+Sans:wght@400;600;800&family=Quicksand:wght@300;400;500;700&family=Roboto:wght@400;700&family=Ubuntu:wght@300;400;700&display=swap" rel="stylesheet">
    <title>School</title>
    <link rel="stylesheet" href="School.css">
    <style>
       
        
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <span class="material-symbols-outlined toggle">menu</span>
            <img src="SchoolLogo2.jpg">
            <a href="#Home">School</a>
        </div>
        <div class="links">
            <ul>
                <li><a href="#Home">Home</a></li>
                <li><a href="#Levels">Levels</a></li>
                <li><a href="#Classes">Classes</a></li>
                <li><a href="#Home">Teachers</a></li>
                <li><a href="#Home">Contact us</a></li>
                <li><a href="Admin.php">Admin</a></li>
            </ul>
        </div>
    </header>
    <section id="Home" class="Home Section-1">
        <div class="content Content-1">
            <div class="info">
                <h3>Welcome on our site</h3>
                <h1>Global High School</h1>
                <p>A school is an educational institution designed to provide learning spaces and learning environments for the teaching of students under the direction of teachers. Most countries have systems of formal education, which is sometimes compulsory. In these systems, students progress through a series of schools. The names for these schools vary by country,  but generally include primary school for young children and secondary school for teenagers who have completed primary education. An institution where higher education is taught is commonly called a university college or university.</p>
            </div>
        </div>
    </section>
    <div class="navbar">
        <span class="material-symbols-outlined close">close</span>
        <ul class="menu">
            
            <a href=""><li>Teachers</li></a>
            <a href=""><li>Classes</li></a>
            <a href="Marks.php"><li>Results</li></a>
            <a href=""><li>Daily Lessons</li></a>
        </ul>
    </div>

    <section class="Studying" id="Levels">
        <h2>Levels</h2>
        <div class="content">
            <div class="card primary">
                <div class="curtain"></div>
                <h1>Primary Stage</h1>
                <p>A primary school, elementary school or grade school is a school for primary education of children who are four to eleven years of age. Primary schooling follows pre-school and precedes secondary schooling.</p>
            </div>
            <div class="card intermediate">
                <div class="curtain"></div>
                <h1>Intermediate Stage</h1>
                <p>A middle school is an educational stage which exists in some countries, providing education between primary school and secondary school. The concept, regulation and classification of middle schools, as well as the ages covered, vary between and sometimes within countries.</p>
            </div>
            <div class="card secondary">
                <div class="curtain"></div>
                <h1>Secondary Stage</h1>
                <p>A secondary school describes an institution that provides secondary education and also usually includes the building where this takes place. Some secondary schools provide both lower secondary education and upper secondary education.</p>
            </div>
        </div>
    </section>

    <section class="classes" id="Classes">
        <h2>Classes</h2>
            <div class="content">
                <div class="list primary">
                    <div class="title" onclick="Change('span-primary','list-primary')">
                        <p>Primary Stage Costs</p>
                        <span class="material-symbols-outlined" id="span-primary">expand_more</span>
                    </div>
                    <div class="Details" id="list-primary">
                        <ul class="points prime" >
                          <li>Grade 1 - 5,450,000 LBP </li>
                          <li>Grade 2 - 6,300,000 LBP </li>
                          <li>Grade 3 - 7,500,000 LBP </li>
                          <li>Grade 4 - 8,340,000 LBP </li>
                          <li>Grade 5 - 9,200,000 LBP </li>
                        </ul>
                    </div>
                </div>
                <div class="list intermediate">
                    <div class="title" onclick="Change('span-intermediate','list-intermediate')">
                        <p>Intermediate Stage Costs</p>
                        <span class="material-symbols-outlined" id="span-intermediate">expand_more</span>
                    </div>
                    <div class="Details" id="list-intermediate">
                        <ul class="points mediate" >
                          <li>Grade 6 - 5,450,000  LBP</li>
                          <li>Grade 7 - 6,300,000  LBP</li>
                          <li>Grade 8 - 7,500,000  LBP</li>
                          <li>Grade 9 - 8,340,000  LBP</li>
                          </uL>
                    </div>
                </div>
                <div class="list secondary">
                    <div class="title" onclick="Change('span-secondary','list-secondary')">
                        <p>Secondary Stage Costs</p>
                        <span class="material-symbols-outlined" id="span-secondary">expand_more</span>
                    </div>
                    <div class="Details" id="list-secondary">
                        <ul class="points second" >
                          <li>Grade 10 - 5,450,000 LBP </li>
                          <li>Grade 11 - 6,300,000 LBP </li>
                          <li>Grade 12 - 7,500,000 LBP </li>
                          
                        </ul>
                    </div>
                </div>
            </div>
    </section>
    <section class="numbers">
        <h1>Statistics</h1>
        <div class="content">
            <div class="card-number">
                <div class="Students"></div>
                <div class="content-number">
                    <h3>Students</h3>
                    <p class="Students-Number Num" data-goal="<?php
                        $count=0;
                        $con = mysqli_connect("localhost","root","","school");
                        $results = mysqli_query($con,"SELECT * FROM students");
                        while($rows = mysqli_fetch_array($results)){
                            $count=$count+1;
                        }
                        echo $count;
                    
                    ?>">0</p>
                </div>
            </div>
            <div class="card-number">
                <div class="Teachers"></div>
                <div class="content-number">
                    <h3>Teachers</h3>
                    <p class="Teachers-Number Num" data-goal="30">0</p>
                </div>
            </div>
            <div class="card-number">
                <div class="Members"></div>
                <div class="content-number">
                    <h3>Management Members</h3>
                    <p class="Management-Number Num" data-goal="8">0</p>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="content">
            <div class="icons">
                <a href=""><i class="fa-brands fa-facebook"></i></a>
                <a href=""><i class="fa-brands fa-twitter"></i></a>
                <a href=""><i class="fa-brands fa-instagram"></i></a>
                <a href=""><i class="fa-brands fa-youtube"></i></a>
                <a href=""><i class="fa-brands fa-linkedin"></i></a>
            </div>
            <div class="location">
                <p>Lebanon</p>
                <p>Beirut</p>
                <p>Choueifat</p>
                <p>Al Amrousiyeh</p>
            </div>
            <div class="Developer">
                <i class="fa-regular fa-copyright"></i>
                <p>Designed and Developed by <span>Hassan Mansour</span></p>
            </div>
        </div>
    </footer>
</body>




<script src="School.js"></script>
</html>