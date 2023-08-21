<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Studentds Record</title>
</head>
<body>
    <?php
    include "../login/db_conn.php";
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "SELECT * FROM student WHERE id ='$id'";
        $result = mysqli_query($conn,$sql);
        if (mysqli_num_rows($result)>0) {
            $row = mysqli_fetch_assoc($result);

            echo '<center>';
            echo '<h2>Edit student Record</h2>';
            echo '<form action="update.php" method="POST" enctype="multipart/form-data">';
            echo '<input type="hidden" name="id" value="'.$row['id'].'">';
            echo '<label for="fullname" > full Name:</label>';
            echo '<input type="text" name="fullname" value="'.$row['fullname'].'" required>';
            echo '<br><br>';
            echo '<label for="email" > E-mail :</label>';
            echo '<input type="text" name="email" value="'.$row['email'].'" required>';
            echo '<br><br>';
            echo '<label for="phone" > Phone :</label>';
            echo '<input type="text" name="phone" value="'.$row['phone'].'" required>';
            echo '<br><br>';
            echo '<label for="fullname" > Course :</label>';
            echo '<input type="text" name="course" value="'.$row['course'].'" required>';
            echo '<br><br>';
            echo '<label for="photo" > photo :</label>';
            echo '<input type="file"  name="photo" value="'.$row['picture'].'" required>';
            echo '<br><br>';
            echo '<input type="submit" value="update">';
            echo '</form>';
            echo '<br><a href="display.php"><button> Cancel</button></a>';
            echo '</center>';

        }else{
            echo "record not found";
        }
    }else{
        echo "invalid request";
    }
      mysqli_close($conn);
    ?>
</body>
</html>