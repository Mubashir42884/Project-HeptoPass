<?php 
    session_start();
    if(!isset($_SESSION['valid'])){
        header('location: login.php');
    }
?>

<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member Profile</title>
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
                <form method="post" action="">
                
                    <fieldset style="width: 750px; border-radius: 30px;">
                    <legend  style="color: #4e0755; border-radius: 5px;"><b>VIEW PROFILE</b></legend>
                    
                        

                    <table border="0">
                    <input type="button" id="view" value="View Profile" onclick="viewProfile1()">
                        <tr style="font-size: 20px;">
                            <td>
                                <span class="name" id="name"></span>
                            </td>
                        </tr>
                        <tr>
                            <td align="center">
                                <button>
                                    <a href="memberProfile.php">Back</a>
                                </button>
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

    <script>
        function viewProfile1(){
            let name = document.getElementById('name').value;
            let xhttp  = new XMLHttpRequest();

            xhttp.open('POST', '../controllers/profileCheck.php', true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send("string=NAME");
            xhttp.onreadystatechange = function (){
                if(this.readyState == 4 && this.status == 200){
                    document.getElementById('name').innerHTML = this.responseText;
                }
            }
        }
    </script>

</body>
</html>