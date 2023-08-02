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
        body{
            background:black;

        }
        *{
            margin:0;
            padding:0;
            font-family:'Poppins',sans-serif;
            box-sizing:border-box;
        }
        .form{
            position:absolute;
            top:50%;
            left:50%;
            transform:translate(-50%,-50%);
            background:gold;
            display:flex;
            justify-content:center;
            align-items:center;
            flex-direction:column;
            width:380px;
            height:45%;
            padding:50px;
            border-radius:20px;
            box-shadow: 20px 20px 5px black;
        } 
        .form h1{
            color:black;
            font-family: 'El Messiri', sans-serif;
        }
        form{
            display:flex;
            justify-content:center;
            align-items:center;
            flex-direction:column;
            
        }
        form input{
            margin:15px;
            padding:10px;
            font-size:20px;
            border-radius:20px;
            border:none;
        }
        form button{
            margin-top:20px;
            width:40%;
            font-size:18px;
            padding:10px;
            font-weight:bold;
            border-radius:20px;
            cursor:pointer;
            background:black;
            color:gold;
        }
        input::placeholder{
            color:lightgrey;
        }
        input:focus{
            outline:none;
        }
        fieldset{
            border-radius:30px;
            
        }
        fieldset legend{
            color:white;
            font-family: 'El Messiri', sans-serif;
            padding:0px 8px;
        }

    </style>
</head>
<body>
    
    <div class="form">
        <h1>Admin</h1>
        <form method="POST">
            <input type="text" name="username" placeholder="Username">
            <input type="text" name="password" placeholder="Password">
            <button name="login">Login</button>
        </form>
    </div>
    
</body>
<?php
    $con = mysqli_connect('localhost','root','','videos');
    if(isset($_POST['login'])){
        $user= $_POST['username'];
        $pass= $_POST['password'];
        $results= mysqli_query($con,'SELECT * FROM adver');
        while($row=mysqli_fetch_array($results)){
            if($user==$row['username'] && $pass==$row['password']){
                header("Location:adminTasks.php");
            }
        }
    }
?>
</html>