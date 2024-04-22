<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Login and Registration Form </title>
    <link rel="stylesheet" href="css/login.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <div class="container">
      <input type="checkbox" id="flip">
      <div class="cover">
        <div class="front">
          <img src="images/login.webp" alt="login pic">
          <div class="text">
            <span class="text-1">Every small step is valuable</span>
            <span class="text-2">Let's get connected</span>
          </div>
        </div>
      </div>
      <div class="forms">  
        <div class="form-content">
          <div class="login-form">
            <div class="title">Login</div>
            <form action="authentication.php" method="POST">
              <div class="input-boxes">
                <div class="input-box">
                  <i class="fas fa-envelope"></i>
                  <input  type="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="input-box">
                  <i class="fas fa-lock"></i>
                  <input type="password" name="password" placeholder="Enter your password" required>
                </div>
                <div class="text"><a href="#">Forgot password?</a></div>
                <div class="button input-box">
                  <input  type="submit" >
                </div>
                <div class="text sign-up-text">Don't have an account? <label for="flip">Signup now</label></div>
                <a href="index.html"><div class="back" >Back to Login</div></a>
              </div>
            </form>
          </div>
          <div class="signup-form">
            <div class="title">Signup</div>
            <form action="register.php" method="post">
              <div class="input-boxes">
                <div class="input-box">
                  <i class="fas fa-user"></i>
                  <input name = "name" type="text" placeholder="Enter your name" required>
                </div>
                <div class="input-box">
                  <i class="fas fa-envelope"></i>
                  <input name = "email" type="text" id="signupEmail" placeholder="Enter your email" required>
                </div>
                <div class="input-box">
                  <i class="fas fa-lock"></i>
                  <input name = "password" type="password" placeholder="Enter your password" required>
                </div>
                <div class="input-box">
                  <i class="fas fa-lock"></i>
                  <input name = "confirm_password" type="password" placeholder="Confirm Password" required>
                </div>
                <div class="button input-box">
                  <input type="submit"  name="Submit" value="Submit">
                </div>
                <div class="text sign-up-text">Already have an account? <label for="flip">Login now</label></div>
                <a href="index.html"><div class="back" >Back to Login</div></a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <script>
      
      function checkEmail() {
        var emailInput = document.getElementById("signupEmail").value;
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (!emailRegex.test(emailInput)) {
          alert("Invalid email address. Please enter a valid email.");
        }
      }
    </script>
  </body>
</html>
