

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
      <form name="regForm" method="POST" action="../controllers/regCheck.php">

        <div class="field name-field">
          <div class="input-field">
            <input type="text" name="name" placeholder="Enter your Name" class="name" required />
          </div>
          <span class="error name-error">
            <i class="bx bx-error-circle error-icon"></i>
            <p class="error-text">Please enter a valid Name</p>
          </span>
        </div>

        <div class="field email-field">
          <div class="input-field">
            <input type="email"  name="email" placeholder="Enter your email" class="email" required/>
          </div>
          <span class="error email-error">
            <i class="bx bx-error-circle error-icon"></i>
            <p class="error-text">Please enter a valid email</p>
          </span>
        </div>

        <div class="field phone-field">
          <div class="input-field">
            <input type="tel" name="phno" placeholder="Enter your Phone No." class="phno" required/>
          </div>
          <span class="error phone-error">
            <i class="bx bx-error-circle error-icon"></i>
            <p class="error-text">Please enter a valid Phone No.</p>
          </span>
        </div>

        <div class="field dob-field">
          <div class="input-field">
            <input type="date" name="dob" placeholder="Enter your Date of Birth" class="dob" required/>
          </div>
          <span class="error dob-error">
            <i class="bx bx-error-circle error-icon"></i>
            <p class="error-text">Please enter a valid DOB!</p>
          </span>
        </div>

        <div class="field uid-field">
          <div class="input-field">
            <input type="text" name="username" placeholder="Enter your Username" class="uid" required/>
          </div>
          <span  class="error uid-error">
            <i class="bx bx-error-circle error-icon"></i>
            <p id="uidError" class="error-text">Please enter a valid Username</p>
          </span>
        </div>

        <div class="field create-password">
          <div class="input-field">
            <input
              type="password"
              name="password"
              placeholder="Create password"
              class="password"
              required
            />
            <i class="bx bx-hide show-hide"></i>
          </div>
          <span class="error password-error">
            <i class="bx bx-error-circle error-icon"></i>
            <p class="error-text">
              Please enter atleast 8 charatcer with number, symbol, small and
              capital letter.
            </p>
          </span>
        </div>

        <div class="field confirm-password">
          <div class="input-field">
            <input
              type="password"
              name="conpwd"
              placeholder="Confirm password"
              class="cPassword"
              required
            />
            <i class="bx bx-hide show-hide"></i>
          </div>
          <span class="error cPassword-error">
            <i class="bx bx-error-circle error-icon"></i>
            <p class="error-text">Password don't match</p>
          </span>
        </div>

        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1">
          <input type="radio" name="gender" id="dot-2">
          <input type="radio" name="gender" id="dot-3">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Others</span>
            </label>
          </div>
        </div>

        <div class="check">
            <input type="checkbox" name="check" id="click" required/>
            <span class="agree">Agree to Terms & Policy</span><br>
            <span class="error" name="check-error" id="check-error"></span>
        </div>

        <div class="input-field button">
          <input type="submit" value="Register Now" name="register" />
        </div>
        <div class="input-field button">
          <input type="reset" value="Reset" />
        </div>

        <div class="login">
            <p>Already a member?<a href="Login.php"> Login Here</a></p>
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

