<?php
include('../login/db_conn.php');


$id_to_delete = $_GET['id'];

$sql = "DELETE FROM student WHERE id=?";
$stmt = $conn->prepare($sql);
if($stmt == false){
    die("Error preparing the statement:".$conn->error);

}
$stmt->bind_param("i",$id_to_delete);

if ($stmt->execute()==TRUE) {
    $_SESSION['message'] = "Record deleted sucessfully.";
    header("location:display.php");
}else{
    $_SESSION['message'] = "Error deleting record.".$conn->error;
    header("location:display.php");
}
$stmt->close();
$conn->close();
?>