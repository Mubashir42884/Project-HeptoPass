<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../styles/Login-style.css">
    <script src="https://kit.fontawesome.com/718270188e.js" crossorigin="anonymous"></script>

    <title>Registration</title>
</head>
<body>

    <div class="dsiplay">
        
        <div class="title">

            <p align="center">
                <a href="Home.php">
                    <img src="../assets/HeaderLogo.png" height="140px">
                </a>
            </p>
            <nav>
                <br><br><br><br><br><br>
                <ul>
                    <li><a href="Signup.php">Registration</a></li>
                    <li><a href="Login.php">Login</a></li>
                    <li><a href="Home.php">Home</a></li>
                </ul>      
            </nav>

        </div>

        <div class="container">
        <div class="label">MEMBER REGISTRATION</div>
        <form class="login_form" method="post" action="../controllers/regCheck.php">

            <div class="user_details">
                <div class="input_box">
                    <span class="details">Name :</span>
                    <input type="text" name="name" id="name" onkeyup="validateName()" value="" placeholder="Enter Name" required>
                </div>
                <span class="error name-error" name="name-error" id="name-error">
                    <i class="fa-solid fa-circle-exclamation error-icon"></i>
                    <p class="error-text">Enter a valid name!</p>
                </span>

                <div class="input_box">
                    <span class="details">Email :</span>
                    <input type="text" name="email" id="email" value="" placeholder="Enter Email" required>
                </div>
                

                <div class="input_box">
                    <span class="details">Phone No :</span>
                    <input type="tel" name="phno" id="phno" value="" placeholder="Enter Phone" required>
                    <span class="error" name="phone-error" id="phone-error"></span>
                </div>

                <div class="input_box">
                    <span class="details">Date of Birth :</span>
                    <input type="date" name="dob" id="dob" value="" required>
                    <span class="error" name="dob-error" id="dob-error"></span>
                </div>
                
                <div class="input_box">
                    <span class="details">Username :</span>
                    <input type="text" name="username" id="uid" value="" placeholder="Enter Username" required>
                    <span class="error" name="username-error" id="username-error"></span>
                </div>

                <div class="input_box">
                    <span class="details">Password :</span>
                    <input type="password" name="password" id="pass" value="" placeholder="Enter Password" required>
                </div>
                <span class="error email-error" name="email-error" id="email-error">
                        <i class="fa-solid fa-eye"></i>
                        <p class="error-text">Enter a valid Password!</p>
                </span>

                <div class="input_box">
                    <span class="details">Confirm Password :</span>
                    <input type="password" name="conpwd" id="conpwd" value="" placeholder="Confirm Password" required>
                    <span class="error" name="conpwd-error" id="conpwd-error"></span>
                </div>
            </div>

            <div class="gender_details">
                <input type="radio" name="gender" id="dot-1" value="Male">
                <input type="radio" name="gender" id="dot-2" value="Female">
                <input type="radio" name="gender" id="dot-3" value="Others">

                <span class="gender_title">Gender</span>
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
                <span class="error" name="gender-error" id="gender-error"></span>
            </div>

            <div class="check">
                <input type="checkbox" name="check" id="click" required/>
                <span class="agree">Agree to Terms & Policy</span><br>
                <span class="error" name="check-error" id="check-error"></span>
            </div>

            <div class="button">
                <input type="submit" value="Register">
                <input type="reset" value="Reset">
            </div>
        </form>
        </div>
    </div>
    <script src="error.js"></script>

</body>
</html>