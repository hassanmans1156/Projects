<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;600;700&family=Dosis:wght@200;300;400;500;700&family=Itim&family=Lobster&family=Merriweather+Sans:wght@400;600;800&family=Quicksand:wght@300;400;500;700&family=Roboto:wght@400;700&family=Ubuntu:wght@300;400;700&display=swap" rel="stylesheet">
    <title>Marks</title>
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
            display:flex;
            justify-content:center;
            align-items:center;
            color:#1F618D;
            font-size:24px;
            font-weight:bold;
            background:gold;
            padding:5px 0;
        }
        body{
            background:#1F618D;
        }
        section .container{
            width:80%;
            height:100%;
            display:flex;
            justify-content:center;
            align-items:center;
            flex-direction:column;
        }
        table{
            
            margin-top:20px;
            width:60%;
            margin-left:200px;
            border-collapse:collapse;
        }
        table th,td{
            padding:5px;
            text-align:center;
        }
        
        th{ width:30%;
            background:#333;
            color:#fff;
        }
        td{
          background:gold;
          color:#1F618D;
          font-weight:bold;  
        }
        .container select{
            font-size:20px;
            padding:10px 20px;
            border-radius:20px;
            border:none;
            outline:none;
            cursor:pointer;
            font-weight:bold;
        }
        .content{
            margin-top:50px;
        }
        .container button{
            font-size:18px;
            padding:10px;
            border-radius:10px;
            border:none;
            outline:none;
            background:gold;
            color:#1F618D;
            cursor:pointer;
            margin-left:30px;
            font-weight:bold;
        }
        
    </style>
</head>
<body>
<header>
        <p>Marks</p>
    </header>
    <section class="Marks">
        <div class="container">
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
                    <button name="Show">Submit</button>
                </form>
            </div>
            <table border="1">
                
                <?php
                    $con = mysqli_connect("localhost","root","","school");
                    
                    if(isset($_POST['Show'])){
                        $id = $_POST['id'];
                        $Rows = mysqli_query($con,"SELECT * FROM marks WHERE ID=$id");
                        while($Results = mysqli_fetch_array($Rows)){
                            $Sum = $Results['Math'] + $Results['Arabic'] + $Results['English'] + $Results['Physics'] + $Results['Chemistry'] + $Results['Biology'] + $Results['History'] + $Results['Geography'] + $Results['Civics'] + $Results['Sport'];
                            $Average = number_format(($Sum*20)/310,2);
                            echo "
                            <tr>
                                <th>ID</th>
                                <td>$Results[ID]</td>
                            </tr>
                            <tr>
                                <th>First</th>
                                <td>$Results[First]</td>
                            </tr>
                            <tr>
                                <th>Middle</th>
                                <td>$Results[Middle]</td>
                            </tr>
                            <tr>
                                <th>Last</th>
                                <td>$Results[Last]</td>
                            </tr>
                            <tr>
                                <th>Grade</th>
                                <td>$Results[Grade]</td>
                            </tr>
                            <tr>
                                <th>Section</th>
                                <td>$Results[Section]</td>
                            </tr>
                            <tr>
                                <th>Math</th>
                                <td>$Results[Math] / 60</td>
                            </tr>
                            <tr>
                                <th>Arabic</th>
                                <td>$Results[Arabic] / 60</td>
                            </tr>
                            <tr>
                                <th>English</th>
                                <td>$Results[English] / 60</td>
                            </tr>
                            <tr>
                                <th>Physics</th>
                                <td>$Results[Physics] / 20</td>
                            </tr>
                            <tr>
                                <th>Chemistry</th>
                                <td>$Results[Chemistry] / 20</td>
                            </tr>
                            <tr>
                                <th>Biology</th>
                                <td>$Results[Biology] / 20</td>
                            </tr>
                            <tr>
                                <th>History</th>
                                <td>$Results[History] / 20</td>
                            </tr>
                            <tr>
                                <th>Geography</th>
                                <td>$Results[Geography] / 20</td>
                            </tr>
                            <tr>
                                <th>Civics</th>
                                <td>$Results[Civics] / 20</td>
                            </tr>
                            <tr>
                                <th>Sport</th>
                                <td>$Results[Sport] / 10</td>
                            </tr>
                            <tr>
                                <th>Total</th>
                                <td> $Sum / 310 </td>
                            </tr>
                            <tr>
                                <th>Average</th>
                                <td> $Average / 20 </td>
                            </tr>
                            <tr>
                                <th>Result</th>";
                                     if($Average>=10){
                                        echo "<td>Succeed</td>";
                                    }
                                    else if($Average>=14){
                                        echo "<td>Succeed Good</td>";
                                    }
                                    else if($Average>=16){
                                        echo "<td>Succeed Very Good</td>";
                                    }
                                    else if($Average>=18){
                                        echo "<td>Succeed Excellent</td>";
                                    }
                                    else{
                                        echo "<td>Failed</td>";
                                    }
                                "
                                
                                
                            </tr>

                        
                        ";
                        }
                       
                    }
                    
                        
                    
                
                
                ?>
                
            </table>
        </div>
    </section> 
</body>
</html>