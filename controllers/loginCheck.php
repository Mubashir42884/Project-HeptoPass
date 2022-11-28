<?php
    session_start();
    require_once "../models/membersModel.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

    $validate = searchMemberById($username, $password);

    if($username == "" && $password == ""){
        echo "<script>alert('Username and Password cannot be null!');</script>";
        #header('location: ../views/Login.php');

    }else if($validate == 'true'){

        $_SESSION['valid'] = 'true';
        $_SESSION['username'] = $username;
        header('location: ../views/members/Member Dashboard.php');
        
    }else if($validate == 'false'){
        echo "<script>alert('Invalid User!');</script>";
    }else{
        echo "<script>alert('User cannot be verified!');</script>";
    }


?>