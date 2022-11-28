<?php 
    require_once('db.php');

    function insertMember($user){
        $con = getConnection();
        $sql = "insert into members values('', '{$user['name']}', '{$user['email']}', '{$user['phno']}', '{$user['gender']}', '{$user['dob']}', '{$user['username']}', '{$user['password']}', '', '', 'Basic')";
        $status = mysqli_query($con, $sql);
        return $status;
    }

    function searchMemberById($uname,$pwd){
        $con = getConnection();
        $username = $uname ;
        $pass = $pwd;
        $sql = "select * from members where username = '$username' and pass='$pass'";
        $status = mysqli_query($con, $sql);
        if($status){
            return 'true';
        }else{
            return 'false';
        }
    }


    function loginMember($user){
        $con = getConnection();

        $sql = "select * from users where username='{$user['username']}' and password='{$user['password']}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        
        if($user != null){
            return true;
        }else{
            return false;
        }
    }
?>