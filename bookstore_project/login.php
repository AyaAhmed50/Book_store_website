<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login page</title>
    <link rel="stylesheet" href="form.css">
  </head>
  <body>
    <div class="center">
      <h1>Login</h1>
      <?php
      if(isset($_GET['error'])){ 
            
        echo("<p class='error'>".$_GET['error']."</p>");
    
    }
      ?>
      <form method="post" action ="checkLogin.php">
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
      <div class="pass">
        <a href="http://" target="_blank" rel="noopener noreferrer">Forgot Password?</a>
      </div>
      <input type="submit" value="Login">
      <div class="signup_link">
        Not a member? <a href="Signup.php">Signup</a>
      </div>
      </form>
  </div>

  </body>
</html>
