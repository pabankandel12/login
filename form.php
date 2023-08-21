<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example of Form</title>
    <style>
        .result {
            margin-left: 100px;
            padding-left: 100px;
            border: 2px solid red;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <div class="container" style="margin-left: 40%; margin-top: 50px; border-radius: 2px;">
        <form action="<?php $_SERVER["PHP_SELF"];  ?>" method="POST">
            <h2>PHP Form Validation Example</h2>
            <h2><span class="error">* Required field</span></h2>
            <div class="data">
                <span>Name</span>
                <input type="text" name="name">
                <span class="error">* <?php echo $nameErr; ?></span>
                <br><br>
            </div>
            <div class="data">
                <span>E-mail</span>
                <input type="email" name="email">
                <span class="error">* <?php echo $emailErr; ?></span><br><br>
            </div>
            <div class="data">
                <span>Website</span>
                <input type="text" name="website">
                <span class="error">* <?php echo $websiteErr; ?></span><br><br>
            </div>
            <div class="data">
                <span>Comment</span>
                <textarea name="comment" id="" cols="30" rows="10"></textarea>
                <span class="error">* <?php echo $commentErr; ?></span><br><br>
            </div>
            <div class="data">
                <span>Gender</span>
                <input type="radio" name="gender" value="female">Female
                <input type="radio" name="gender" value="male">Male
                <input type="radio" name="gender" value="other">Other
                <br><br>
            </div>
            <div class="data">
                <input type="submit" name="submit" value="Submit"><br><br>
            </div>
        </form>
        <?php 
        $nameErr = $emailErr = $websiteErr = $commentErr = ""; // Define error variables
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
                $nameErr = "Name is required";
            }
            if (empty($_POST["email"])) {
                $emailErr = "Email is required";
            }
            // Add more validation logic as needed for other fields
            
            // If there are no errors, process the form data
            if (empty($nameErr) && empty($emailErr) && empty($websiteErr) && empty($commentErr)) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $website = $_POST['website'];
                $comment = $_POST['comment'];
                $gender = $_POST['gender'];
                
                // Data processing logic goes here
                // For example, you can display the results:
                echo "<div class='result'>";
                echo "Name: " . $name . "<br>";
                echo "E-mail: " . $email . "<br>";
                echo "Website: " . $website . "<br>";
                echo "Comment: " . $comment . "<br>";
                echo "Gender: " . $gender . "<br>";
                echo "</div>";
            }
        }
        ?>
    </div>
</body>
</html>
