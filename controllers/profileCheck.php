<?php
    session_start();
    require_once "../models/membersModel.php";

    $username = $_SESSION['username'];
    $getit = $_REQUEST['string'];

    if($getit==='NAME'){

        $con = getConnection();
        $sql = "select * from members where username = '$username'";
        $result = mysqli_query($con, $sql);

        $resultCheck = mysqli_num_rows($result);

        if($resultCheck>0){
            while($row = mysqli_fetch_assoc($result)){

                $uid = $row['uid'];
                $name = $row['name'];
                $email = $row['email'];
                $phone = $row['phno'];
                $gender = $row['gender'];
                $dob = $row['dob'];
                $username = $row['username'];
                $address = $row['address'];

                $_SESSION['uid'] = $uid;
                $_SESSION['name'] = $name;
                $_SESSION['phone'] = $phone;
                $_SESSION['email'] = $email;
                $_SESSION['gender'] = $gender;
                $_SESSION['dob'] = $dob;
                $_SESSION['address'] = $address;
                $_SESSION['uname'] = $username;

                echo "<table>
                        <tr>
                            <td>Name</td>
                            <td>: ".$name; echo "</td>
                        </tr>
                        <tr>
                            <td>User ID</td>
                            <td>: ".$uid; echo "</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>: ".$email; echo "</td>
                        </tr>
                        <tr>
                            <td>Phone No.</td>
                            <td>: ".$phone; echo "</td>
                        </tr>
                        <tr>
                            <td>Gender</td>
                            <td>: ".$gender; echo "</td>
                        </tr>
                        <tr>
                            <td>Date of Birth</td>
                            <td>: ".$dob; echo "</td>
                        </tr>
                        <tr>
                            <td>Username</td>
                            <td>: ".$username; echo "</td>
                        </tr>
                    </table>";
            }

        }else{
             echo "Null";
        }

    }
    
    if($getit==='EDIT'){

        $con = getConnection();
        $sql = "select * from members where username = '$username'";
        $result = mysqli_query($con, $sql);

        $resultCheck = mysqli_num_rows($result);

        if($resultCheck>0){
            while($row = mysqli_fetch_assoc($result)){

                $uid = $row['uid'];
                $name = $row['name'];
                $email = $row['email'];
                $phone = $row['phno'];
                $gender = $row['gender'];
                $dob = $row['dob'];
                $username = $row['username'];
                $address = $row['address'];

                $_SESSION['uid'] = $uid;
                $_SESSION['name'] = $name;
                $_SESSION['phone'] = $phone;
                $_SESSION['email'] = $email;
                $_SESSION['gender'] = $gender;
                $_SESSION['dob'] = $dob;
                $_SESSION['address'] = $address;
                $_SESSION['uname'] = $username;

                header('location: EditProfile.php');
            }

        }else{
             echo "Null";
        }

    }










    // $user = ['username'=>$username];
    // $info = searchMemberById($user);

    // if($info == null){
    //     echo "<script>alert('No Info found!');</script>";
    // }else{
        



        // if($getit === 'NAME'){
        //     echo $_SESSION['name'];
        // }
        // if($getit === 'EMAIL'){
        //     echo $_SESSION['email'];
        // }
        // if($getit === 'PHONE'){
        //     echo $_SESSION['phone'];
        // }
        // if($getit === 'GENDER'){
        //     echo $_SESSION['gender'];
        // }
        // if($getit === 'DOB'){
        //     echo $_SESSION['dob'];
        // }
        // if($getit === 'UNAME'){
        //     echo $_SESSION['uname'];
        // }
        // if($getit === 'ADDRESS'){
        //     echo $_SESSION['address'];
        // }
        // if($getit === 'UID'){
        //     echo $_SESSION['uid'];
        // }
        
    //}
?>