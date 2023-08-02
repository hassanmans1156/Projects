<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>More | Film - Series</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Aref+Ruqaa+Ink:wght@400;700&family=Cairo:wght@200;300;400;500;600;700;800&family=Dosis:wght@200&family=El+Messiri:wght@400;500;600;700&family=Noto+Kufi+Arabic:wght@100;200;300;400;500;700&family=Poppins:wght@100;200;300;400;500;600;800&family=Tajawal:wght@200;300;400;500;700;800;900&family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,700;0,900;1,100;1,200;1,300;1,400&family=Yeon+Sung&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Aref+Ruqaa+Ink:wght@400;700&family=Cairo:wght@200;300;400;500;600;700;800&family=Dosis:wght@200&family=Noto+Kufi+Arabic:wght@100;200;300;400;500;700&family=Poppins:wght@100;200;300;400;500;600;800&family=Tajawal:wght@200;300;400;500;700;800;900&family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,700;0,900;1,100;1,200;1,300;1,400&family=Yeon+Sung&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800&family=Dosis:wght@200&family=Poppins:wght@100;200;300;400;500;600;800&family=Tajawal:wght@200;300;400;500;700;800;900&family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,700;0,900;1,100;1,200;1,300;1,400&family=Yeon+Sung&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800&family=Dosis:wght@200&family=Poppins:wght@100;200;300;400;500;600;800&family=Tajawal:wght@200;300;400;500;700;800;900&family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,700;0,900;1,100;1,200;1,300;1,400&family=Yeon+Sung&display=swap');
        *{
            font-family: 'El Messiri', sans-serif;
        }
        body{
            background:rgb(0,0,0);
        }
        .content{
            background:black;
            display:flex;
            width:1000px;
            height:750px;
            position:absolute;
            top:50%;
            left:50%;
            transform:translate(-50%,-50%);
            border-radius:20px;
            box-shadow: 0 0 6px white;
           
        }
        .content img{
            width:50%;
            border-radius:20px 0 0 20px;
        }
        .content .info{
            width:50%;
            display:flex;
            flex-direction:column;
            justify-content:center;
            align-items:center;
        }
        .content .info p{
            color:white;
            text-align:justify;
            line-height:30px;
            direction:rtl;
            padding:20px;
        }
        .info h1{
            color:white;
            text-align:center;
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
        .exit{
            color:white;
            position:absolute;
            top:20px;
            right:20px;
            text-decoration:none;
            font-size:24px;
        }
    </style>
</head>
<body>
    <?php
        $ID=$_GET['ID'];
        $con = mysqli_connect("localhost","root","","videos");
        $results = mysqli_query($con,"SELECT * FROM filmseries WHERE ID=$ID");
        while($rows= mysqli_fetch_array($results)){
            echo"
                <div class='content'>
                    <a href='Home.php' class='exit'>X</a>
                    <img src='$rows[Image]'>
                             <div class='info'>
                                <h1>$rows[Title]</h1>
                                <p>$rows[Text]</p>  
                                    <div class='link'>
                                        <a href='$rows[Link]' class='MButton'>Watch Now</a>
                                    </div>
                            </div>
                </div>
            
            
            
            ";
        }
    ?>
    
    
    
</body>
</html>