<?php 
    if(isset($_GET['err'])){
        echo "null username/password";
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Member Login</title>

    <link rel="stylesheet" href="../styles/style.css" />

    <link
      href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
  <thead>
    <div class="fixed-header">
        <p align="center">
            <a class="logo" href="Home.php">
                <img src="../assets/HeaderLogo.png" height="120px">
            </a>
        </p>
        <nav align="right">
            <a href="Home.php">Home</a>
            <a href="Signup.php">Registration</a>
        </nav>
    </div>
  </thead>

    <div class="container">
      <header class="login-header">MEMBER LOGIN</header>
      <form method="post" action="../controllers/loginCheck.php">

        <div class="field uid-field">
          <div class="login-field">
            <input type="text" name="username" placeholder="Enter Your Username" class="uid" />
          </div>
          <span class="error uid-error">
            <i class="bx bx-error-circle error-icon"></i>
            <p class="error-text"></p>
          </span>
        </div>

        <div class="field enter-password">
          <div class="login-field">
            <input
              type="password"
              name="password"
              placeholder="Enter Your Password"
              class="password"
            />
            
          </div>
          <span class="error password-error">
            <i class="bx bx-error-circle error-icon"></i>
            <p class="error-text">
              
            </p>
          </span>
        </div>

        <div class="login-field button">
          <input type="submit" value="Login" />
        </div>
        <div class="signup">
            <p>Don't have an account?<a href="Signup.php"> Sign Up Here</a></p>
        </div>
        <div class="adminLogin">
           <p><a href="administrationLogin.php">Administration Login</a></p>
        </div>
      </form>
    </div>

    <tfoot>
        <div class="fixed-footer">
            <div class="foot">Copyright &copy; 2022 | HeptoPass</div>        
        </div>
    </tfoot>
  </body>
</html>

