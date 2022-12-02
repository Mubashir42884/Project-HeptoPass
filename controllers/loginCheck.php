<?php
    session_start();
    require_once "../models/administrationModel.php";
    require_once "../models/membersModel.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == "" && $password == ""){
        echo "<script>alert('Username & Password cannot be null!');</script>";
    }else if($username == $password){
        echo "<script>alert('Password cannot be your Username!');</script>";
    }else{
        $loginValidation = ['uname'=> $username, "pass"=> $password];
        $validate = searchMemberById($loginValidation);
        
        if($validate == 'true'){
            header('location: ../views/members/Member Dashboard.php?msg=welcome');
        }else{
            header('location: ../views/Login.php?login=unsuccessfull');
        }
    }
?>