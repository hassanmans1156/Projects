<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;600;700&family=Dosis:wght@200;300;400;500;700&family=Itim&family=Lobster&family=Merriweather+Sans:wght@400;600;800&family=Quicksand:wght@300;400;500;700&family=Roboto:wght@400;700&family=Ubuntu:wght@300;400;700&display=swap" rel="stylesheet">
    <title>Admin</title>
    <style>
       *{
        margin:0;
        padding:0;
        box-sizing:border-box;
        font-family: 'Quicksand', sans-serif;
       }
       .container{
        width:100%;
        height:100vh;
        background:url("StudentsBackground.jpg");
        display:flex;
        justify-content:center;
        align-items:center;
       }
       .form{
        width:350px;
        height:350px;
        background:gold;
        padding:20px;
        display:flex;
        justify-content:space-evenly;
        align-items:center;
        flex-direction:column;
        border-radius:20px;
        }
        form{
            display:flex;
            flex-direction:column;
            justify-content:center;
            align-items:center;
            gap:30px;
        }
        form h2{
            text-align:center;
            font-size:40px;
        }
      
       form label{
        display:block;
        transform:translateX(5px);
        margin:3px 0;
       }
       form input{
        border:none;
        outline:none;
        font-size:20px;
        border-radius:10px;
        padding:10px 5px;
       }
       .form button{
        width:80%;
        padding: 10px 0;
        border:none;
        outline:none;
        background:#333;
        color:#fff;
        font-weight:bold;
        border-radius:10px;
        cursor:pointer;

       }
       .link a{
            position:absolute;
            top:10px;
            right:10px;
            color:#1F618D;
            text-decoration:none;
            background:#fff;
            padding:8px;
            font-weight:bold;
            border-radius:10px;
       }
       .link a:hover{
            color:#fff;
            background:#1F618D;
            transition:.2s ease;
       }
    </style>
</head>
<body>
    <div class="link">
        <a href="School.php">
            <i class="fa-solid fa-arrow-left"></i>
            Back
        </a>
    </div>
    <div class="container">
        <div class="form">
        <h2>Admin</h2>
            <form method="POST">
                
                <div class="name">
                    <label>Username</label>
                    <input type="text" name="user">
                </div>
                <div class="password">
                    <label>Password</label>
                    <input type="text" name="pass">
                </div>
                <button name="login">login</button>
            </form>
        </div>
    </div>
</body>
<?php
    $con = mysqli_connect("localhost","root","","school");
    if(isset($_POST["login"])){
        $username = $_POST["user"];
        $password = $_POST["pass"];
        $result = mysqli_query($con,"SELECT * FROM admin");
        while($row = mysqli_fetch_array($result)){
            if($username == $row["username"] && $password == $row["password"]){
                header("Location:Operations.php");
            }
        }
    }
    

?>
</html>