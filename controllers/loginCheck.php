<?php
    session_start();
    //require_once "../models/administrationModel.php";
    require_once "../models/membersModel.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = ['username'=>$username, 'password'=>$password];
    $status = loginMember($user);

    if($username == "" && $password == ""){
        echo "<script>alert('Username & Password cannot be null!');</script>";
    }else if($status){
        $_SESSION['valid'] = 'true';
        header('location: ../views/memberDashboard.php');
    }else{
        echo "<script>alert('Invalid User!!');</script>";
    }
?>