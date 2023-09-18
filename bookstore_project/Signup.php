
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
<body>
    <div class="center">
        <h1>Signup</h1>
        <form method="post" action ="checksign.php">
            <?php
            if(isset($_GET['error'])){ 
            
                echo("<p class='error'>".$_GET['error']."</p>");
            
            }
            ?>
        <div class="txt_field">
            <input type="email" required name="Email">
            <span></span>
            <label>Email</label>
        </div>
        <div class="txt_field">
            <input type="text" required name="Name">
            <span></span>
            <label>Username</label>
        </div>
        <div class="txt_field">
            <input type="password" required name="Password">
            <span></span>
            <label>Password</label>
        </div>
        
        <input type="submit" value="Login">
        <div class="signup_link">
            Have an account <a href="login.php">Login</a>
        </div>
        </form>
    </div>  
</body>
</html>