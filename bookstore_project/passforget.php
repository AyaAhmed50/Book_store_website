<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forget password</title>
</head>
<body>
<div class="center">
        <h1>Login</h1>
        <form method="post" action ="index.php">
        <div class="txt_field">
            <input type="email" required>
            <span></span>
            <label>Email</label>
        </div>
        <div class="txt_field">
            <input type="text" required>
            <span></span>
            <label>Username</label>
        </div>
        <div class="pass">
            <a href="http://" target="_blank" rel="noopener noreferrer">Forgot Password?</a>
        </div>
        <input type="submit" value="Login">
        <div class="signup_link">
            Have an account <a href="login.php">Login</a>
        </div>
        </form>
    </div>  
</body>
</html>