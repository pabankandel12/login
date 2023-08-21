<?php
include '../login/db_conn.php';

if(isset($_POST['submit']))
{
   
        $fullname=mysqli_real_escape_string($conn,$_POST['fullname']);
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $phone = mysqli_real_escape_string($conn,$_POST['phone']);
        $course = mysqli_real_escape_string($conn,$_POST['course']);

    

        $picture=$_FILES['picture']['name'];
        $picture_temp=$_FILES['picture']['tmp_name'];
        $picture_path="../upload/" .$picture;

        move_uploaded_file($picture_temp,$picture_path);

        $sql="INSERT INTO student (fullname,email,phone,course,picture) VALUES('$fullname','$email','$phone','$course','$picture')";

        if (mysqli_query($conn,$sql))
        {
            $_SESSION['message']="Student added sucessfully ";
            header("location:student-add.php");
            exit(0);
        }
        else{
            $_SESSION['message']="not inserted";
            header("Location:student-add.php");
            exit(0);
        }
    }
    mysqli_close($conn);
    ?>