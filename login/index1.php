
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <div class="container">
        <form action="login.php" method="post">
            <fieldset>
                <legend>Login:</legend>
                <?php if(isset($_GET['error'])) {?>
                    <p style="color:red;"><?php echo $_GET['error'];?></p>
                <?php  }?>
                <div class="input-data">
                    <label for="username">Username:</label>
                    <input type="text" name="username" required><br><br>
                </div>
                <div class="input-data">
                    <label for="password">Password:</label>
                    <input type="password" name="password" required>
                </div>
                <div class="input-data">
                    <input type="submit" name="login" value="Login">
                </div>
            </fieldset>
        </form>
    </div>
</body>
</html>
