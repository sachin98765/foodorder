
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="css/login-style.css">
</head>
<body>
    
    <form action="login.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password"  required>
        <br>
        <div style="align-items: center; justify-content: center; display: flex;" ><a href="#" onclick="message()">Forgot Password</a></div>
        <br>
        <input type="submit" value="Login" name="login">
        <div style="align-items: center; justify-content: center; display: flex;"><span>New Member?</span><a href="form.php">Sign Up</a></div>

    </form>
    <script>
        function message() {
            alert("Please contact support to reset your password.");
        }
    </script>
</body>
</html>

