<?php
include('../login/db_conn.php');
if ($_SERVER["REQUEST_METHOD"]== "POST") {
    $id = $_POST['id'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $course = $_POST['course'];
    
    $picture=$_FILES['photo']['name'];
    $picture_temp=$_FILES['photo']['tmp_name'];
    $picture_path="../upload/" .$picture;

    move_uploaded_file($picture_temp,$picture_path);

    $sql = "UPDATE student SET fullname='$fullname',email='$email',phone='$phone',course='$course',picture='$picture'WHERE id='$id'";

    if (mysqli_query($conn,$sql)) {
        $_SESSION['message'] = "Record update sucessfully!";
        header("location:display.php");
    }else{
        $_SESSION['message'] = "Error updateing Record:".mysqli_error($conn);
        header("location:edit.php");
    }
    mysqli_close($conn);

}