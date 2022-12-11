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
    <title>Member Login</title>

    <link rel="stylesheet" href="../styles/style.css" />

    <link
      href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
      rel="stylesheet"
    />
  </head>
<body >
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




  <input type="checkbox" id="check">
    <label for="check">
        <i class="fas fa-bars" id="btn"></i>
        <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
        <header>HeptoPass</header>
        <ul>
            <li><a href="#"><i class="fa-regular fa-user"></i>Profile</a></li>
            <li><a href="#"><i class="fa-brands fa-slack"></i>Expense Management</a></li>
            <li><a href="#"><i class="fa-solid fa-plus"></i>Extra Features</a></li>
            <li><a href="#"><i class="fa-solid fa-gear"></i>Settings</a></li>
            <li><a href="#"><i class="fa-regular fa-life-ring"></i>Services</a></li>
        </ul>
    </div>






  <tfoot>
        <div class="fixed-footer">
            <div class="foot">Copyright &copy; 2022 | HeptoPass</div>        
        </div>
  </tfoot>
    
</body>
</html>