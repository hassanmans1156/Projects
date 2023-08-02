<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Film | Series</title>
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
            height:740px;
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
            width:80%;

        }
        label{
            background:white;
            color:black;
            cursor: pointer;
            padding:15px;
            width:70%;
            margin:10px 0;
            text-align:center;
            font-weight:bold;
            font-size::24px;
            border-radius:20px;
            
            
        }
        input:focus{
            outline:none;
        }
        select{
            padding:8px 0;
            cursor:pointer;
            border-radius:10px;
            font-weight:bold;
            font-size:18px;
            margin:10px 0;
            width:80%;
            border:none;
            text-align:center;
        }
        select:focus{
            outline:none;
        }
        button{
            margin-top:20px;
            padding:10px 0;
            width:80%;
            background:black;
            color:gold;
            font-weight:bold;
            font-size:20px;
            border-radius:20px;
            cursor:pointer;
        }
        textarea{
            border-radius:10px;
            resize:none;
            border:none;
            font-size:20px;
            font-weight:bold;
            padding:10px;
            margin:5px 0;
        }
        textarea:focus{
            outline:none;
        }
    </style>
</head>
<body>
    <div class="content">
        <div class="form">
            <h1>New Film - Series</h1>
            <form method="post" enctype="multipart/form-data">
                <input type="text" name="title" placeholder="Title">
                <input type="text" name="Desc" placeholder="Desciption">
                <textarea name="text" cols="29" rows="2" placeholder="Information"></textarea>
                <input type="text" name="Seasons" placeholder="Seasons">
                <input type="file" name="image" id="image" style="display:none;">
                <input type="text" name="link" placeholder="Watch link">
                <select name="nationality">
                    <option>Nationality</option>
                    <option>Lebanese</option>
                    <option>Syrian</option>
                    <option>Egyptian</option>
                </select>
                <select name="type">
                    <option>Type</option>
                    <option>Series</option>
                    <option>Film</option>
                </select>
                <label for="image">Image</label>
                <button name="insert">Insert</button>
            </form>
        </div>
    </div>
    
</body>

<?php
    $con = mysqli_connect("localhost","root","","videos");
    if(isset($_POST['insert'])){
            $title=$_POST['title'];
            $desc=$_POST['Desc'];
            $text=$_POST['text'];
            $seasons=$_POST['Seasons'];
            $image=$_FILES['image'];
            $image_name=$_FILES['image']['name'];
            $image_location=$_FILES['image']['tmp_name'];
            $image_upload="Pics/".$image_name;
            $nationality=$_POST['nationality'];
            $type=$_POST['type'];
            $link=$_POST['link'];
            $query = mysqli_query($con,"INSERT INTO filmseries(Title,Description,Seasons,Nationality,Type,Image,Text,Link) VALUES('$title','$desc','$seasons','$nationality','$type','$image_upload','$text','$link')");
            if($query){
                ?>
                    <script>
                        swal({
                                title: "Film Added Successfully!",
                                text: "You clicked the button!",
                                icon: "success",
                            });
                    </script>
                <?php
            }

    }



?>
</html>