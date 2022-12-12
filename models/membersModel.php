<?php 
    require_once('db.php');

    function insertMember($user){
        $con = getConnection();
        $sql = "insert into members (uid, name, email, phno, gender, dob, username, pass, dp, address, status) values('', '{$user['name']}', '{$user['email']}', '{$user['phno']}', '{$user['gender']}', '{$user['dob']}', '{$user['username']}', '{$user['password']}', '', '', 'Basic');";
        $status = mysqli_query($con, $sql);
        return $status;
    }

    function searchMemberById($info){
        $con = getConnection();
        $sql = "select * from members where username = '{$info['username']}'";
        $status = mysqli_query($con, $sql);

        $resultCheck = mysqli_num_rows($status);

        if($resultCheck>0){
            while($row = mysqli_fetch_assoc($status)){
                $uid = $row['uid'];
                $name = $row['name'];
                $email = $row['email'];
                $phone = $row['phno'];
                $gender = $row['gender'];
                $dob = $row['dob'];
                $username = $row['username'];
                $address = $row['address'];

                $userinfo = ['uid'=>$uid, 'name'=>$name, 'email'=>$email, 'phone'=>$phone, 'gender'=>$gender, 'dob'=>$dob, 'username'=>$username, 'address'=>$address];

                return $userinfo;
            }
        }else{
            return 'Null';
        }
    }

    function updateMember($user){
        $con = getConnection();
        $uidd = $_SESSION['uid'];
        $sql = "update members set name='{$user['editname']}', email='{$user['editemail']}', phno='{$user['editphone']}', gender='{$user['editgender']}', dob='{$user['editdob']}', username='{$user['edituname']}', address='{$user['editaddress']}', status='Basic' where uid = '{$uidd}'";
        $status = mysqli_query($con, $sql);
        return $status;
    }

    function loginMember($user){
        $con = getConnection();
        $sql = "select * from members where username='{$user['username']}' and pass='{$user['password']}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        
        if($user != null){
            return true;
        }else{
            return false;
        }
    }
?>