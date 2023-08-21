<?php
// sesssion_start();

// if(){

// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display record</title>
    <style>
        table{
            width:100%;
            border-collapse:collapse;
        }
        table ,th,td{
            border:solid black;
        }
        th,td{
            padding: 10px;
        }
        th{
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Student Record</h2>
    <?php
    include "../login/db_conn.php";
    if(isset($_SESSION['message'])){
        echo "<h4>".$_SESSION['message']."</h4>";
        unset($_SESSION['message']);
    }
    $query = "SELECT * FROM student";
    $result = mysqli_query($conn,$query);
    if ($result->num_rows> 0) {
        echo "<table>";
        echo '<tr><th>ID</th><th>Name</th><th>Email</th><th>phone</th><th>Course</th><th>Action</th></tr>';
        while ($row = $result-> fetch_assoc()) {
            echo '<tr>';
            echo '<td>'.$row["id"].'</td>';
            echo '<td>'.$row["fullname"].'</td>';
            echo '<td>'.$row["email"].'</td>';
            echo '<td>'.$row["phone"].'</td>';
            echo '<td>'.$row["course"].'</td>';
            echo '<td>
                    <a href="view.php?id='.$row["id"].' "> View</a>|
                    <a href="edit.php?id='.$row["id"].'"> edit</a>|
                    <a href="delete.php?id='.$row["id"].'"> Delete</a>|
            </td';
            echo  '</tr>';
        }
        echo '</table>';
        echo '<br><br>';
        echo '<a href="..\login\profile.php">Goto Home</a>';

    }else{
        echo "No record found.";
    }
    $conn->close();
    ?>
</body>
</html>