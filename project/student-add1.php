<?php
// Start a new session or resume the existing one
session_start();

// Check if the user is logged in by verifying the session variable
if (!isset($_SESSION["username"])) {
    // Redirect the user to the login page if not logged in
    header("Location:../login/index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
</head>
<body>
              <?php
                    if(isset($_SESSION['message']))
                    {
                        echo "<h4>".$_SESSION['message']."</h4>";
                        unset($_SESSION['message']);
                    }
                ?>
                
                     <form action="code.php" method="POST">
                            <fieldset>
                                <legend>Add Student</legend>
                            
                                <label for="">Full Name</label>
                                <input type="text" name="fullname" required  />
                                <br><br>
                               <label for="">Email ID</label>
                                <input type="text" name="email" required  />
                                <br><br>
                                <label for="">Course</label>
                                <input type="text" name="course" required  />
                                <br><br>
                                <label for="">Phone No</label>
                                <input type="text" name="phone" required  />
                                <br><br>
                              <button type="submit" name="save_student" >Save Student</button>
                </fieldset>
                        </form>
                        <br><br>
                        <a href="../login/profile.php">Goto Home</a>
                        <a href="../login/logout.php">Log Out</a>
</body>
</html>