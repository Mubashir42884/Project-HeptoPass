<?php 
    require_once('db.php');

    function insertMember($user){
        $con = getConnection();
        $sql = "insert into members (uid, name, email, phno, gender, dob, username, pass, dp, address, status) values('', '{$user['name']}', '{$user['email']}', '{$user['phno']}', '{$user['gender']}', '{$user['dob']}', '{$user['username']}', '{$user['password']}', '', '', 'Basic');";
        $status = mysqli_query($con, $sql);
        return $status;
    }

    function searchMemberById($loginInfo){
        $con = getConnection();
        $sql = "select * from members where username = '{$loginInfo['uname']}' and pass='{$loginInfo['pass']}'";
        $status = mysqli_query($con, $sql);

        if($status == 'false'){
            return 'false';
        }else{
            return 'true';
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