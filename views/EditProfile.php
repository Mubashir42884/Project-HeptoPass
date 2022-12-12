<?php 
    session_start();
    if(!isset($_SESSION['valid'])){
        header('location: login.php');
    }
?>

<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
</head>

<body style="font-family: Quicksand ;">
    <table border="0">
        <tr bgcolor="#4e0755">

            <th style='border:white;' align="center" colspan="2">
                <a href="memberDashboard.php"><img src="../assets/Logo.png" height="180"></a>

                <p style='border:none; font-size: 20;' align="right">
                    <a href="memberDashboard.php" style="color: #99d9ea ;">Home</a>&nbsp;|&nbsp;&nbsp;
                    <a href="../controllers/Logout.php" style="color: #99d9ea ;">&nbsp;Log Out</a>&nbsp;&nbsp;
                </p>
            </th>
        </tr>

        <tr style="font-size: 26px;">
            <td align="center">
                <form method="post" action="../controllers/editCheck.php">
                
                    <fieldset style=" border-radius: 30px;">
                    <legend  style="color: #4e0755; border-radius: 5px;"><b>EDIT PROFILE</b></legend>
                    <table border="0">
                        <tr style="font-size: 20px;">
                            <td style="color: #4e0755;">Name</td>
                            <td> :
                            <input type="text" size="28" name="editname" id="editname" value="" placeholder="<?php echo $_SESSION['name']; ?>" style="font-family:'Quicksand'; font-size: 18px;" />
                            <input type="reset" name="editname" id="editname" value="Reset" style="font-family:'Quicksand'; font-size: 18px;"/>
                            </td>
                        </tr>

                        <tr style="font-size: 20px;">
                            <td style="color: #4e0755;">Email</td>
                            <td> : 
                            <input type="text" size="28" name="editemail" id="editname" value="" placeholder="<?php echo $_SESSION['email']; ?>" style="font-family:'Quicksand'; font-size: 18px;" />
                            <input type="reset" name="editname" id="editname" value="Reset" style="font-family:'Quicksand'; font-size: 18px;"/>
                            
                            </td>
                        </tr>

                        <tr style="font-size: 20px;">
                            <td style="color: #4e0755;">Phone No</td>
                            <td> : 
                            <input type="text" size="28" name="editphone" id="editname" value="" placeholder="<?php echo $_SESSION['phone']; ?>" style="font-family:'Quicksand'; font-size: 18px;" />
                            <input type="reset" name="editname" id="editname" value="Reset" style="font-family:'Quicksand'; font-size: 18px;"/>
                            
                        </td>
                        </tr>

                        <tr style="font-size: 20px;">
                            <td style="color: #4e0755;">Gender </td>
                            <td> : 
                            <input type="text" size="18" name="editgender" id="editname" value="" placeholder="<?php echo $_SESSION['gender']; ?>" style="font-family:'Quicksand'; font-size: 18px;" />
                            <select style="font-family:'Quicksand'; font-size: 18px;"><option value="Male">Male</option><option value="Female">Female</option><option value="Others">Others</option></select>
                            <input type="reset" name="editname" id="editname" value="Reset" style="font-family:'Quicksand'; font-size: 18px;"/>
                            
                            </td>
                        </tr>

                        <tr style="font-size: 20px;">
                            <td style="color: #4e0755;">Date of Birth</td>
                            <td> :
                            <input type="text" readonly size="9" name="editdate" id="editname" value="" placeholder="<?php echo $_SESSION['dob']; ?>" style="font-family:'Quicksand'; font-size: 18px;" />
                            <input type="date" name="editdob" id="editdate" value="" style="font-family:'Quicksand'; font-size: 18px;"/>
                            <input type="reset" name="editname" id="editname" value="Reset" style="font-family:'Quicksand'; font-size: 18px;"/>
                            </td>
                        </tr>

                        <tr style="font-size: 20px;">
                            <td style="color: #4e0755;">Address</td>
                            <td> :
                            <input type="text"  size="28" name="editaddress" id="editname" value="" placeholder="<?php echo $_SESSION['address']; ?>" style="font-family:'Quicksand'; font-size: 18px;" />
                            <input type="reset" name="editaddress" id="editname" value="Reset" style="font-family:'Quicksand'; font-size: 18px;"/>
                            </td>
                        </tr>

                        <tr style="font-size: 20px;">
                            <td style="color: #4e0755;">Username</td>
                            <td> : 
                            <input type="text" size="28" name="edituname" id="editname" value="" placeholder="<?php echo $_SESSION['uname']; ?>" style="font-family:'Quicksand'; font-size: 18px;" />
                            <input type="reset" name="editname" id="editname" value="Reset" style="font-family:'Quicksand'; font-size: 18px;"/>
                            
                            </td>
                        </tr>

                        <tr style="font-size: 26px;">
                            <td colspan="2" align="center">
                               <br><br> <input type="submit" name="save" value="Save" style="font-family:'Quicksand'; font-size: 22px;">
                            </td>
                        </tr>
                    </table>
                    </fieldset>
                </form>
            </td>
        </tr>

        <tr>
            <td colspan="3" width="1920" height="50" style='border:none;'>
                <h4 align="center">Copyright ⓒ 2022</h4>
            </td>
        </tr>
    </table>
</body>
</html>