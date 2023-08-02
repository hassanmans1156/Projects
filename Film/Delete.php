<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Film | Series</title>
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
        .form{
            background:gold;
            display:flex;
            flex-direction:column;
            height:300px;
            width:450px;
            border-radius:20px;
            
        }
        form {
            display:flex;
            justify-content:center;
            align-items:center;
            flex-direction:column;
        }
        .form h1{
            text-align:center;
            color:black;
        }
        .form form input{
            margin:10px;
            font-size:20px;
            padding:8px;
            border-radius:10px;
            font-weight:bold;
            border:none;

        }
            
        
        input:focus{
            outline:none;
        }
        select{
            padding:5px 15px;
            cursor:pointer;
            border-radius:10px;
            font-weight:bold;
            font-size:18px;
            margin:5px 0;
            width:60%;
            text-align:center;
        }
        select:focus{
            outline:none;
        }
        button{
            margin-top:20px;
            padding:10px 0;
            width:50%;
            background:black;
            color:gold;
            font-weight:bold;
            font-size:20px;
            border-radius:20px;
            cursor:pointer;
        }
    </style>
</head>
<body>
    <div class="content">
        <div class="form">
            <h1>Delete Film - Series</h1>
            <form method="post">
                <select name="nationality">
                    <option>Choose a Nationality</option>
                    <option>Lebanese</option>
                    <option>Syrian</option>
                    <option>Egyptian</option>
                </select>
                <select name="title">
                    <option>Choose a Title</option>
                    <?php
                        $con = mysqli_connect("localhost","root","","videos");
                        $results=mysqli_query($con,"SELECT * FROM filmseries");
                        while($rows=mysqli_fetch_array($results)){
                                echo "<option>$rows[Title]</option>";
                            }
                    ?>
                </select>
                
                <button name="delete">Delete</button>
            </form>
        </div>
    </div>
    
</body>

<?php
    $con = mysqli_connect("localhost","root","","videos");
    if(isset($_POST['delete'])){
        $title=$_POST['title'];
        $nation=$_POST['nationality'];
        $query = mysqli_query($con,"DELETE FROM filmseries WHERE Title='$title' AND Nationality='$nation'");
        if($query){
            ?>
            <script>
                swal({
                        title: "Film Deleted Successfully!",
                        text: "You clicked the button!",
                        icon: "success",
                    });
            </script>
            <?php

        }
    }  




?>
</html>