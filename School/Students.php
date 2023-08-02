<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;600;700&family=Dosis:wght@200;300;400;500;700&family=Itim&family=Lobster&family=Merriweather+Sans:wght@400;600;800&family=Quicksand:wght@300;400;500;700&family=Roboto:wght@400;700&family=Ubuntu:wght@300;400;700&display=swap" rel="stylesheet">
    <title>Students</title>
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
            padding:20px 0;
        }
        body{
            background:#1F618D;
        }
        section .content{
            width:80%;
            display:flex;
            justify-content:center;
            align-items:center;
        }
        table{
            margin-top:100px;
            width:100%;
            margin-left:200px;
            border-collapse:collapse;
        }
        table th,td{
            padding:5px;
            text-align:center;
        }
        
        th{
            background:#333;
            color:#fff;
        }
        td{
          background:gold;
          color:#1F618D;
          font-weight:bold;  
        }
    </style>
</head>
<body>
    <header>
        <p>Students</p>
    </header>
    <section class="Students">
        <div class="content">
            <table border="1">
                <tr>
                    <th>ID</th>
                    <th>First</th>
                    <th>Middle</th>
                    <th>Last</th>
                    <th>Telephone</th>
                    <th>Address</th>
                    <th>Grade</th>
                    <th>Section</th>

                </tr>
                <?php
                    $con = mysqli_connect("localhost","root","","school");
                    $results = mysqli_query($con,"SELECT * FROM students");
                    while($rows = mysqli_fetch_array($results)){
                        echo "
                        <tr>
                            <td>$rows[ID]</td>
                            <td>$rows[First]</td>
                            <td>$rows[Middle]</td>
                            <td>$rows[Last]</td>
                            <td>$rows[Telephone]</td>
                            <td>$rows[Address]</td>
                            <td>$rows[Grade]</td>
                            <td>$rows[Section]</td>
                        </tr>
                        ";
                    }
                
                
                ?>
                
            </table>
        </div>
    </section>
</body>
</html>