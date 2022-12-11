<?php
        session_start();
        require_once("../models/membersModel.php");


            $username = $_POST['username'];
            $name = $_POST['name'];
            $password = $_POST['password'];
            $conpwd = $_POST['conpwd'];
            $phno = $_POST['phno'];
            $email = $_POST['email'];
            $gender = $_POST['gender'];
            $dob = $_POST['dob'];


            if($username == "" || $password == "" || $email == "" || $phno == ""){
                header('location: ../views/signup.php?null-value');
        
            }else { 
                $user = ['username'=> $username, 'name'=> $name, "password"=> $password, "phno"=> $phno, "email"=> $email, "gender"=> $gender, "dob"=>$dob];
                $_SESSION['user'] = $user;
                $validation = insertMember($user);
                if($validation){
                    header('location: ../views/Login.php?registration=success');
                }else{
                    header('location: ../views/Signup.php?registration=unsuccess');
                }
            }


            
?>