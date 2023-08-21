<?php
session_start();
if(!isset($_SESSION['username'])){
    header("location:index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crude Application</title>
</head>
<body>
    <style>
         .header{
            background:red;
         }
        .header ul{
            width: 100%;
            height:70px;
            display:flex;
            padding:5px;
           list-style-type:none;    
        }
        .header ul li{
            padding-left:10px;
            font-size:20px;
            padding-top:30px;
        }
        .header ul li a{
          text-decoration:none;  
        }
    </style>
    <div class="container">
        <div class="header">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="logout.php">Logout</a></li>
                <li><a href="../PROJECT/student-add.php">Add student</a></li>
                <li><a href="../DisplayRecord/display.php"> Show Data</a></li>
            </ul>
        </div>
    </div>
    
</body>
</html>
