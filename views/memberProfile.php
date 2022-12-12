<?php 
    session_start();
    if(!isset($_SESSION['valid'])){
        header('location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="../styles/Header-style.css">
    <script src="https://kit.fontawesome.com/718270188e.js" crossorigin="anonymous"></script>

    <title>Member Profile</title>

    <link rel="stylesheet" href="../styles/style.css" />

    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"rel="stylesheet"/>
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
            <a href="../controllers/Logout.php">Log Out</a>
        </nav>
    </div>
    </thead>
        <input type="checkbox" id="check">
            <label for="check">
                <i class="fas fa-bars" id="btn"></i>
                <i class="fas fa-times" id="cancel"></i>
            </label>
            <div class="sidebar">
                <header><a href="memberDashboard.php">HeptoPass</a></header>
                <ul>
                    <li><a href="memberProfile.php"><i class="fa-regular fa-user"></i>Profile</a></li>
                    <li><a href="#"><i class="fa-brands fa-slack"></i>Expense Management</a></li>
                    <li><a href="#"><i class="fa-solid fa-plus"></i>Extra Features</a></li>
                    <li><a href="#"><i class="fa-solid fa-gear"></i>Settings</a></li>
                    <li><a href="#"><i class="fa-regular fa-life-ring"></i>Services</a></li>
                </ul>
            </div>


        <div class="member-profile">
            <header class="signup-header">MEMBER PROFILE</header>
            
            <div class="viewProfile">
                <a href="ViewProfile.php"><i class="fa-solid fa-user"></i>View Profile</a>
                <a href="EditProfile.php" onclick="f1()"><i class="fa-solid fa-user-pen"></i>Edit Profile</a>
            </div>  
        </div>

    <tfoot>
        <div class="fixed-footer">
            <div class="foot">Copyright &copy; 2022 | HeptoPass</div>        
        </div>
    </tfoot>


    <script>
        function f1(){
            xhttp.open('POST', '../controllers/profileCheck.php', true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send("string=EDIT");
            xhttp.onreadystatechange = function (){
                if(this.readyState == 4 && this.status == 200){
                    return true;
                }
            }
        }
    </script>


</body>
</html>