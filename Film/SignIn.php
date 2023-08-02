<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Eagle Films</title>
    <style>
        *{
            margin:0;
            padding:0;
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            box-sizing:border-box;
        }
        .container{
            position: absolute;
            top:50%;
            right:0;
            transform:translate(-50%,-50%);
            background:white;
            padding:50px;
            width:400px;
            height:450px;
            border-radius:20px;
        }
        form{
            display:flex;
            flex-direction:column;
            align-items:center;
            justify-content:center;
        }
        form h1{
            color:lightblue;
            font-size:50px;
        }
        form input{
            margin:20px;
            padding:15px;
            border:none;
            border-bottom:2px solid lightgrey;
            width:100%;
            font-size:24px;

        } 
        input:focus{
            outline:none;
        }
        button{
            margin-top:20px;
            border:none;
            width:60%;
            height:60px;
            font-size:30px;
            border-radius:20px;
            background:transparent;
            font-weight:bold;
            color:lightblue;
            cursor:pointer;
            position:relative;
            transition:2s ease;
            overflow:hidden;
            border:1px solid lightblue;
        }
        
        button::before{
            content:'';
            position:absolute;
            top:0;
            left:0;
            width:100%;
            height:0%;
            background:lightblue;
            border-radius:20px 20px 0px 0px;
            transition:0.8s ease;
            z-index:-1;
        }
        
        button::after{
            content:'';
            position:absolute;
            bottom:0;
            left:0;
            width:100%;
            height:0%;
            background:lightblue;
            border-radius:0px 0px 20px 20px;
            transition:0.8s ease;
            z-index:-1;
        }
        
        button:hover{
            color:white;
            box-shadow:0 0 10px lightblue;
            
            
        }
        
        button:hover::before,button:hover::after{
            height:50%;
        }
        video{
            width:100%;
            
            
            
        }
        ::-webkit-scrollbar{
            display:none;
        }
    </style>
</head>
<body>
    <video src="Film.mp4" autoplay muted loop ></video> 
    <div class="container">
        <form method="post">
            <h1>SIGN IN</h1>
            <input type="text" name="username" placeholder="Username">
            <input type="text" name="password" placeholder="Password">
            <button class="btn" name="login">Login</button>
        </form>
    </div>
</body>
</html>