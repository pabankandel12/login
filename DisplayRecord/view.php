<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View the record</title>
    <style>
        img{
            width:200px;
        }
    </style>
</head>
<body>
    <?php
    include('../login/db_conn.php');

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $sql = "SELECT * FROM student WHERE id='$id'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            $row = mysqli_fetch_assoc($result);
            
            echo '<center>';
            echo '<h2>View student Record</h2>';
            echo '<form action="display.php" method="POST">';
            echo '<input type="hidden" name="id" value="'.$row['id'].'">';
            echo '<img src="../upload/'.$row['picture'].'">';
            echo '<label for="fullname" > full Name:</label>';
            echo '<input type="text" name="fullname" value="'.$row['fullname'].'" readonly>';
            echo '<br><br>';
            echo '<label for="email" > E-mail :</label>';
            echo '<input type="text" name="email" value="'.$row['email'].'" readonly>';
            echo '<br><br>';
            echo '<label for="phone" > Phone :</label>';
            echo '<input type="text" name="phone" value="'.$row['phone'].'" readonly>';
            echo '<br><br>';
            echo '<label for="fullname" > Course :</label>';
            echo '<input type="text" name="course" value="'.$row['course'].'" readonly>';
            echo '<br><br>';
            echo '<input type="submit" value="ok">';
            echo '</form>';
            // echo '<br> <a herf="display.php"><button> ok </button></a>';
            echo '</center>';

        }else{
            echo "Invalid request";
        }
    }
    mysqli_close($conn);
    ?>
</body>
</html>