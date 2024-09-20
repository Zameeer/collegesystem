<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login & Signup Form</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <div class="wrapper">
      <div class="title-text">
        <div class="title login">Login Form</div>
        <div class="title signup">Signup Form</div>
      </div>
      <div class="form-container">
        <div class="slide-controls">
          <input type="radio" name="slide" id="login" checked>
          <input type="radio" name="slide" id="signup">
          <label for="login" class="slide login">Login</label>
          <label for="signup" class="slide signup">Signup</label>
          <div class="slider-tab"></div>
        </div>
        <div class="form-inner">
          <form action="login.php" class="login" method="post">
            <div class="field">
              <input type="email" placeholder="Email Address" name="email" required>
            </div>
            <div class="field">
              <input type="password" placeholder="Password" name="password" required>
            </div>
            
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" name="Login" value="Login">
            </div>
            <div class="signup-link">Not a member? <a href="signup.php">Signup now</a></div>
          </form>
          <form action="login.php" class="signup" method="post">
          <div class="field">
              <input type="text" placeholder="First Name" name="fname" required>
            </div>
            <div class="field">
              <input type="text" placeholder="Last Name" name="lname" required>
            </div>
            <div class="field">
              <input type="email" placeholder="Email Address" name="email" required>
            </div>
            <div class="field">
              <input type="password" placeholder="Password" name="password" required>
            </div>
            <div class="field">
              <input type="password" placeholder="Confirm password" required>
            </div>
            
            
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" name="Signup" value="Signup">
            </div>
          </form>
        </div>
      </div>  
    </div>

    <script type="text/javascript" src="C:xampp\htdocs\lm\assets/custom/js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="C:xampp\htdocs\lm\assets/custom/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="C:xampp\htdocs\lm\assets/toastr/js/toastr.min.js"></script>
	<script type="text/javascript" src="C:xampp\htdocs\lm\assets/mycustom/js/login.js"></script>
    <script type="text/javascript" src="C:xampp\htdocs\lm\assets/mycustom/js/login.js"></script>
    <script>
      const loginText = document.querySelector(".title-text .login");
      const loginForm = document.querySelector("form.login");
      const loginBtn = document.querySelector("label.login");
      const signupBtn = document.querySelector("label.signup");
      const signupLink = document.querySelector("form .signup-link a");
      signupBtn.onclick = (()=>{
        loginForm.style.marginLeft = "-50%";
        loginText.style.marginLeft = "-50%";
      });
      loginBtn.onclick = (()=>{
        loginForm.style.marginLeft = "0%";
        loginText.style.marginLeft = "0%";
      });
      signupLink.onclick = (()=>{
        signupBtn.click();
        return false;
      });
    </script>

  </body>
</html>
