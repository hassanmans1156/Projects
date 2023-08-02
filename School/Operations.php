<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;600;700&family=Dosis:wght@200;300;400;500;700&family=Itim&family=Lobster&family=Merriweather+Sans:wght@400;600;800&family=Quicksand:wght@300;400;500;700&family=Roboto:wght@400;700&family=Ubuntu:wght@300;400;700&display=swap" rel="stylesheet">
    <title>Admin|Tasks</title>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family: 'Quicksand', sans-serif;
        }
        header{
            position:fixed;
            width:100%;
            height:50px;
            background:#1F618D;
            display:flex;
            justify-content:center;
            align-items:center;
            color:#fff;
            
        }
        header a{
            color:#1F618D;
            background:gold;
            margin-left:20px;
            padding:5px;
            border-radius:5px;
            font-weight:bold;
            text-decoration:none;
            transition:.1s ease;
        }
        header a:hover{
            color:gold;
            background:#1F618D;
        }
        header div{
            cursor:pointer;
            padding:10px 20px;
            border-radius:5px;
            
        }
        header div:hover{
            background:rgba(255,255,255,0.3);
        }
        

        section{
            
            width:100%;
            height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
            flex-direction:column;
            gap:10px;
            background:url("StudentsBackground.jpg");
        }
        /* Add Container CSS*/
        .addContainer{
            margin-top:80px;
            width:60%;
            height:550px;
            background:gold;
            display:flex;
            justify-content:center;
            align-items:center;
            flex-direction:column;
            border-radius:10px;
            display:none;
            

        }
        .addContainer h2{
            padding:10px;
            text-align:center;
        }
        .addContainer .content form{
            display:flex;
            width:100%;
            gap:10px;
            align-items:center;
            flex-direction:column;
            
        }
        .addContainer .content form input{
            font-size:18px;
            padding:10px;
            border-radius:10px;
            border:none;
            outline:none;
        }
        .addContainer .content form button{
            font-size:18px;
            padding:10px;
            border-radius:10px;
            border:none;
            outline:none;
            width:50%;
            background:#000;
            color:#fff;
            cursor:pointer;
        }


        /* Delete Container CSS*/
        .DeleteContainer{
            margin-top:80px;
            width:60%;
            height:200px;
            background:gold;
            display:flex;
            justify-content:center;
            align-items:center;
            flex-direction:column;
            border-radius:10px;
            display:none;
            

        }
        .DeleteContainer h2{
            padding:10px;
            text-align:center;
        }
        .DeleteContainer .content form{
            display:flex;
            width:100%;
            gap:10px;
            align-items:center;
            flex-direction:column;
            
        }
        .DeleteContainer .content form input{
            font-size:18px;
            padding:10px;
            border-radius:10px;
            border:none;
            outline:none;
        }
        .DeleteContainer .content form button{
            font-size:18px;
            padding:10px;
            border-radius:10px;
            border:none;
            outline:none;
            width:60%;
            background:#000;
            color:#fff;
            cursor:pointer;
        }
        .DeleteContainer select{
            font-size:20px;
            padding:10px 20px;
            border-radius:20px;
            border:none;
            outline:none;
            cursor:pointer;
        }
        /*Update Container CSS*/

        .UpdateContainer{
            margin-top:80px;
            width:60%;
            height:550px;
            background:gold;
            display:flex;
            justify-content:center;
            align-items:center;
            flex-direction:column;
            border-radius:10px;
            display:none;

        }
        .UpdateContainer h2{
            padding:10px;
            text-align:center;
        }
        .UpdateContainer .content form{
            display:flex;
            width:100%;
            gap:10px;
            align-items:center;
            flex-direction:column;
            
        }
        .UpdateContainer .content form input{
            font-size:18px;
            padding:10px;
            border-radius:10px;
            border:none;
            outline:none;
        }
        .UpdateContainer .content form button{
            font-size:18px;
            padding:10px;
            border-radius:10px;
            border:none;
            outline:none;
            width:50%;
            background:#000;
            color:#fff;
            cursor:pointer;
        }
        .UpdateContainer select{
            font-size:20px;
            padding:10px 20px;
            border-radius:20px;
            border:none;
            outline:none;
            cursor:pointer;
        }
        /*Upload Container CSS*/

        .UploadContainer{
            margin-top:80px;
            width:60%;
            padding:10px;
            height:450px;
            background:gold;
            display:flex;
            justify-content:center;
            align-items:center;
            flex-direction:column;
            border-radius:10px;
            display:none;

        }
        .UploadContainer h2{
           padding:10px;
            text-align:center;
        }
        .UploadContainer .content form{
            display:flex;
            width:100%;
            gap:10px;
            align-items:center;
            flex-wrap:wrap;
            justify-content:center;
            
        }
        .UploadContainer .content form input{
            font-size:18px;
            padding:10px;
            border-radius:10px;
            border:none;
            outline:none;
        }
        .UploadContainer .content form button{
            font-size:18px;
            padding:10px;
            border-radius:10px;
            border:none;
            outline:none;
            width:62%;
            background:#000;
            color:#fff;
            cursor:pointer;
        }
        .UploadContainer select{
            font-size:20px;
            padding:10px 20px;
            border-radius:20px;
            border:none;
            outline:none;
            cursor:pointer;
        }
        .show{
            display:block;
        }
        
        .active{
            border-bottom:3px solid gold;
            color:gold;
        }
    </style>
</head>
<body>
    <header>
        <div class="Add Operation" id="Add" onclick="Show('addContainer','Add')">Add Student</div>
        <div class="Delete Operation" id="Delete" onclick="Show('DeleteContainer','Delete')">Delete Student</div>
        <div class="Update Operation" id="Update" onclick="Show('UpdateContainer','Update')">Update</div>
        <div class="Result Operation" id="Upload" onclick="Show('UploadContainer','Upload')">Upload Marks</div>
        <a href="Students.php">Students</a>
        <a href="Marks.php">Marks</a>
        <a href="Admin.php">Logout</a>
    </header>
    <section class="Home">
        <!--Add Container-->
        <div class="addContainer Container" id="addContainer">
            <h2>Add Student</h2>
            <div class="content">
                <form method="POST">
                    <input type="text" placeholder="First" name="first">
                    <input type="text" placeholder="Middle" name="middle">
                    <input type="text" placeholder="Last" name="last">
                    <input type="text" placeholder="Telephone" name="tel">
                    <input type="text" placeholder="Address" name="address">
                    <input type="text" placeholder="Grade" name="grade">
                    <input type="text" placeholder="Section" name="section">
                    <button name="add">Add</button>
                </form>
            </div>
        </div>
        <!--Delete Container-->
        <div class="DeleteContainer Container" id="DeleteContainer">
            <h2>Delete Student</h2>
            <div class="content">
                <form method="POST">
                    <select name="id">
                        <option>Choose ID</option>
                        <?php
                          $con = mysqli_connect("localhost","root","","school");
                          $results = mysqli_query($con,"SELECT * FROM students");
                          while($rows = mysqli_fetch_array($results)){
                            echo "<option>$rows[ID]</option>";
                          }  
                        ?>
                    </select>
                    <button name="Delete">Delete</button>
                </form>
            </div>
        </div>
        <!--Update Container-->
        <div class="UpdateContainer Container" id="UpdateContainer">
            <h2>Update Student</h2>
            <div class="content">
                <form method="POST">
                <select name="ident">
                        <option>Choose ID</option>
                        <?php
                          $con = mysqli_connect("localhost","root","","school");
                          $results = mysqli_query($con,"SELECT * FROM students");
                          while($rows = mysqli_fetch_array($results)){
                            echo "<option>$rows[ID]</option>";
                          }  
                        ?>
                    </select>
                    <input type="text" placeholder="First" name="Fir">
                    <input type="text" placeholder="Middle" name="Mid">
                    <input type="text" placeholder="Last" name="Las">
                    <input type="text" placeholder="Telephone" name="Tel">
                    <input type="text" placeholder="Address" name="Addr">
                    <input type="text" placeholder="Grade" name="Grade">
                    <input type="text" placeholder="Section" name="Sec">
                    <button name="update">Update</button>
                </form>
            </div>
        </div>
        <!--Uplaod Container-->
        <div class="UploadContainer Container" id="UploadContainer">
            <h2>Upload Student</h2>
            <div class="content">
                <form method="POST">
                    <select name="IdUpload">
                        <option>Choose ID</option>
                        <?php
                          $con = mysqli_connect("localhost","root","","school");
                          $results = mysqli_query($con,"SELECT * FROM students");
                          while($rows = mysqli_fetch_array($results)){
                            echo "<option>$rows[ID]</option>";
                          }  
                        ?>
                    </select>
                    <input type="text" placeholder="First" name="One">
                    <input type="text" placeholder="Middle" name="Two">
                    <input type="text" placeholder="Last" name="Three">
                    <input type="text" placeholder="Grade" name="Grade">
                    <input type="text" placeholder="Section" name="Section">
                    <input type="text" placeholder="Math" name="Math">
                    <input type="text" placeholder="Arabic" name="Arabic">
                    <input type="text" placeholder="English" name="English">
                    <input type="text" placeholder="Physics" name="Physics">
                    <input type="text" placeholder="Chemistry" name="Chemistry">
                    <input type="text" placeholder="Biology" name="Biology">
                    <input type="text" placeholder="History" name="History">
                    <input type="text" placeholder="Geography" name="Geography">
                    <input type="text" placeholder="Civics" name="Civics">
                    <input type="text" placeholder="Sport" name="Sport">
                    <button name="upload">Upload</button>
                </form>
            </div>
        </div>
    </section>
</body>
<script>
    let Containers = document.querySelectorAll(".Container");
    let Operations = document.querySelectorAll(".Operation");
    
    function Show(id,y){

        Containers.forEach(Container=>{
        Container.classList.remove("show");
        })
        Operations.forEach(Operation=>{
        Operation.classList.remove("active");
        })
        document.getElementById(y).classList.add("active");
        document.getElementById(id).classList.add("show");
    }
</script>

<?php
    $con = mysqli_connect("localhost","root","","school");
    if(isset($_POST['add'])){
       $first=$_POST['first'];
       $middle=$_POST['middle'];
       $last=$_POST['last'];
       $telephone=$_POST['tel'];
       $address=$_POST['address'];
       $grade=$_POST['grade'];
       $section=$_POST['section'];
       mysqli_query($con,"INSERT INTO students(First,Middle,Last,Telephone,Address,Grade,Section) VALUES('$first','$middle','$last','$telephone','$address','$grade','$section')");
       
       $_POST['first']="";
       $_POST['middle']="";
       $_POST['last']="";
       $_POST['tel']="";
       $_POST['address']="";
       $_POST['grade']="";
       $_POST['section']="";
    }
    
    if(isset($_POST['Delete'])){
        $con = mysqli_connect("localhost","root","","school");
        $id=$_POST['id'];
        mysqli_query($con,"DELETE FROM students WHERE ID=$id");
    }
    
    if(isset($_POST['update'])){
        $ident=$_POST['ident'];
        $Fir=$_POST['Fir'];
       $Mid=$_POST['Mid'];
       $Las=$_POST['Las'];
       $Tel=$_POST['Tel'];
       $Addr=$_POST['Addr'];
       $Grade=$_POST['Grade'];
       $Sec=$_POST['Sec'];
        $con = mysqli_connect("localhost","root","","school");
        mysqli_query($con,"UPDATE students set First='$Fir',Middle='$Mid',Last='$Las',Telephone='$Tel',Address='$Addr',Grade='$Grade',Section='$Sec' WHERE ID=$ident");
    }

    if(isset($_POST['upload'])){
        $con = mysqli_connect("localhost","root","","school");
        $IdUpload=$_POST['IdUpload'];
        $One =$_POST['One'];
        $Two =$_POST['Two'];
        $Three =$_POST['Three'];
        $Class =$_POST['Grade'];
        $Section =$_POST['Section'];
        $Math =$_POST['Math'];
        $Arabic =$_POST['Arabic'];
        $English =$_POST['English'];
        $Physics =$_POST['Physics'];
        $Chemistry =$_POST['Chemistry'];
        $Biology =$_POST['Biology'];
        $History =$_POST['History'];
        $Geography =$_POST['Geography'];
        $Civics =$_POST['Civics'];
        $Sport =$_POST['Sport'];
        mysqli_query($con,"INSERT INTO marks(ID,First,Middle,Last,Grade,Section,Math,Arabic,English,Physics,Chemistry,Biology,History,Geography,Civics,Sport) VALUES($IdUpload,'$One','$Two','$Three','$Class','$Section','$Math','$Arabic','$English','$Physics','$Chemistry','$Biology','$History','$Geography','$Civics','$Sport')");
    }
    
    

?>
</html>