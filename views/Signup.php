

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Resgistration</title>

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
            <a href="Login.php">Login</a>
        </nav>
    </div>
  </thead>

    <div class="container">
      <header class="signup-header">MEMBER REGISTRATION</header>
      <form class="form" name="regForm" method="POST" action="../controllers/regCheck.php">
      <div class="input-field">
            <!--NAME-->
            <div class="name-field">
                <input type="text" name="name" placeholder="Enter your Name" class="name" required />
            </div>
            <span class="error name-error">

                <p class="error-text"> </p>
            </span>
        </div>

        <div class="input-field">
            <!--EMAIL-->
            <div class="email-field">
                <input type="email" name="email" placeholder="Enter your email" class="email" required />
            </div>
            <span class="error email-error">
                
                <p class="error-text"> </p>
            </span>
        </div>

        <div class="input-field">
            <!--PHONE-->
            <div class="phno-field">
                <input type="tel" name="phno" placeholder="Enter your Phone" class="phno" required />
            </div>
            <span class="error phone-error">
                
                <p class="error-text"> </p>
            </span>
        </div>

        <div class="input-field">
            <!--DOB-->
            <div class="dob-field">
                <input type="date" name="dob" placeholder="Enter your DOB" class="dob" required />
            </div>
            <span class="error dob-error">
                
                <p class="error-text"> </p>
            </span>
        </div>

        <div class="input-field">
            <!--USERNAME-->
            <div class="username-field">
                <input type="text" name="username" placeholder="Enter your Userame" class="username" required />
            </div>
            <span class="error username-error">
                
                <p class="error-text"> </p>
            </span>
        </div>

        <div class="input-field">
            <!--PASSWORD-->
            <div class="input-field password-field">
                <input type="password" name="password" placeholder="Create Password" class="password" required />
            </div>
            <span class="error password-error">
                
                <p class="error-text">
                     
                </p>
            </span>
        </div>

        <div class="input-field">
            <!--CONFIRM PASSWORD-->
            <div class="conpwd-field">
                <input type="password" name="conpwd" placeholder="Confirm Password" class="conpwd" required />
                
            </div>
            <span class="error conpwd-error">
                
                <p class="error-text">
                 
                </p>
            </span>
        </div>

        <div class="input-field">
            <!--AGREEMENT CHECK-->
            <div class="check">
                <input type="checkbox" name="check" id="check" required/>
                <span class="agree">Agree to Terms & Policy</span><br>
            </div>

            <!--SUBMIT & RESET-->
            <div class="submit-field button">
                <input type="submit" value="Register Now" name="register" />
            </div>
            <div class="reset-field button">
                <input type="reset" value="Reset" />
            </div>

            <!--ALREADY A MEMBER LOGIN-->
            <div class="login">
                    <p>Already a member?<a href="Login.php"> Login Here</a></p>
            </div>
        </div>
      </form>
    </div>

    <tfoot>
        <div class="fixed-footer">
            <div class="foot">Copyright &copy; 2022 | HeptoPass</div>        
        </div>
    </tfoot>

      <script src="../js/script.js"></script>

      </body>
</html>

