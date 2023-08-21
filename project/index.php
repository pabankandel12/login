<?php
session_start();

//connect the database 
include ('db_conn.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple form</title>
</head>
<body>
    <style>
        .data{
            margin-left:30%;
            margin-top:10px;
        }
    </style>
    <div class="container">
        <h2 style="text-align:center;" >Simple Exam From</h2>
        <hr style="width: 100%;height:5px;background-color:red;">
        <form action="StudentController.php" method="post">
            <fieldset>
                <legend>Enter all the filled</legend>
            <div class="data">
                <label for="name">Full Name:</label>
                <input type="text" name="name" required>
            </div><br>
            <div class="data">
                <label for="name">E-mail:</label>
                <input type="email" name="email" required>
            </div><br>
            <div class="data">
                <label for="name">Phone:</label>
                <input type="phone" name="phone" required>
            </div><br>
            <div class="data">
                <label for="name">Course:</label>
                <input type="text" name="email" required>
            </div><br>
            <div class="button" style="margin-left:38%;">
                <input type="submit" name="inset" value="Insert" style="width: 90px;color:red;">
            </div><br>
            </fieldset>
        </form>
        <a href="display.php">Display Data</a>
    </div>
</body>
</html>