<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Aref+Ruqaa+Ink:wght@400;700&family=Cairo:wght@200;300;400;500;600;700;800&family=Dosis:wght@200&family=El+Messiri:wght@400;500;600;700&family=Noto+Kufi+Arabic:wght@100;200;300;400;500;700&family=Poppins:wght@100;200;300;400;500;600;800&family=Tajawal:wght@200;300;400;500;700;800;900&family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,700;0,900;1,100;1,200;1,300;1,400&family=Yeon+Sung&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Aref+Ruqaa+Ink:wght@400;700&family=Cairo:wght@200;300;400;500;600;700;800&family=Dosis:wght@200&family=Noto+Kufi+Arabic:wght@100;200;300;400;500;700&family=Poppins:wght@100;200;300;400;500;600;800&family=Tajawal:wght@200;300;400;500;700;800;900&family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,700;0,900;1,100;1,200;1,300;1,400&family=Yeon+Sung&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800&family=Dosis:wght@200&family=Poppins:wght@100;200;300;400;500;600;800&family=Tajawal:wght@200;300;400;500;700;800;900&family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,700;0,900;1,100;1,200;1,300;1,400&family=Yeon+Sung&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800&family=Dosis:wght@200&family=Poppins:wght@100;200;300;400;500;600;800&family=Tajawal:wght@200;300;400;500;700;800;900&family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,700;0,900;1,100;1,200;1,300;1,400&family=Yeon+Sung&display=swap');
        *{
            font-family:'El Messiri', sans-serif;
        }
        body{
            background:black;
        }
        .content{
            position:absolute;
            top:50%;
            left:50%;
            transform:translate(-50%,-50%);
        }
        .content .links{
            display:flex;
            flex-direction:column;
        }
        .links a{
            margin-top:20px;
            background:gold;
            color:black;
            text-decoration:none;
            font-weight:bold;
            font-size:30px;
            padding:20px;
            border-radius:20px;
            text-align:center;
            transition:0.5s ease;
        }
        .links a:hover{
            transform:translateY(-10px);
        }
    </style>
</head>
<body>
    <div class="content">
        <div class="links">
            <a href="Add.php">Add Film - Series</a>
            <a href="Delete.php">Delete Film - Series</a>
            <a href="Update.php">Update Film - Series</a>
            <a href="Manager.php">Logout</a>
        </div>
    </div>
    
</body>
</html>