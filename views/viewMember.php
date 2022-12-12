<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="../styles/Header-style.css">
    <script src="https://kit.fontawesome.com/718270188e.js" crossorigin="anonymous"></script>

    <title>Member Login</title>

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

    <div class="viewProfile">
        <table border="0">
        <tr bgcolor="#4e0755">
            <th style='border:white;' align="center" colspan="2">
                <a href="Member Dashboard.php"><img src="../../assets/Logo.png" height="180"></a>
                <p style='border:none; font-size: 20;' align="right">
                    <a href="ViewProfile.php" style="color: #99d9ea ;">
                    <?php 
                        $username = $_SESSION['user']['username'];
                        echo($username);
                    ?>
                    </a>&nbsp;|&nbsp;
                    <a href="Member Dashboard.php" style="color: #99d9ea ;">Home</a>&nbsp;|&nbsp;&nbsp;
                    <a href="../../controllers/Logout.php" style="color: #99d9ea ;">&nbsp;Log Out</a>&nbsp;&nbsp;
                </p>
            </th>
        </tr>

        <tr style="font-size: 26px;">
            <td align="center">
                <form method="post" action="">
                
                    <fieldset style="width: 750px; border-radius: 30px;">
                    <legend  style="color: #4e0755; border-radius: 5px;"><b>VIEW PROFILE</b></legend>
                    <table border="0">
                        <tr style="font-size: 20px;">
                            <td style="color: #4e0755;">Name</td>
                            <td> :
                                <?php
                                $name = $_SESSION['user']['name'];
                                echo($name);
                                ?>
                            </td>
                        </tr>

                        <tr style="font-size: 20px;">
                            <td style="color: #4e0755;">Email</td>
                            <td> : 
                                <?php
                                $email = $_SESSION['user']['email'];
                                echo($email);
                                ?>
                            </td>
                        </tr>

                        <tr style="font-size: 20px;">
                            <td style="color: #4e0755;">Phone No</td>
                            <td> : 
                                <?php
                                $phno=$_SESSION['user']['phno'];
                                echo($phno);
                                ?>
                        </td>
                        </tr>

                        <tr style="font-size: 20px;">
                            <td style="color: #4e0755;">Gender </td>
                            <td> : 
                                <?php
                                $gender = $_SESSION['user']['gender'];
                                echo($gender);
                                ?>
                            </td>
                        </tr>

                        <tr style="font-size: 20px;">
                            <td style="color: #4e0755;">Date of Birth</td>
                            <td> :
                                    <?php
                                    $dob = $_SESSION['user']['dob'];
                                    echo($dob);
                                    ?>
                            </td>
                        </tr>

                        <tr style="font-size: 20px;">
                            <td style="color: #4e0755;">Username</td>
                            <td> : <?php 
                            $username=$_SESSION['user']['username'];
                            echo($username); ?>
                        </tr>

                        <tr style="font-size: 20px;" valign=top>
                            <td style="color: #4e0755;">Profile Picture</td>
                            <td>
                                <?php
                                $dpset  = $_SESSION['user']['dp'];
                                $dp_src = "../../assets/upload/".$dpset;
                                if(is_null($dpset)==1){
                                    echo ": Not Available. Upload your Picture <a href='UploadDP.php' style='color: #4e0755;'>here.</a>";
                                }else{
                                    echo "<img src=".$dp_src." height=200 weight=200>";
                                    echo "<b><b>Update Profile Picture <a href='UploadDP.php' style='color: #4e0755;'>here.</a>";
                                }
                                ?>
                            </td>
                        </tr> 
                    </table>
        </div>
</body>
</html>

