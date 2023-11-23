
<?php
session_start();

    function insert_taikhoan($user, $email, $pass){
        $sql="insert into taikhoan(user, email, pass) values('$user', '$email', '$pass')";
        pdo_execute($sql);
    }
    function dangnhap($email, $pass){
        $sql="select * from taikhoan where email='$email' and pass='$pass'";
        $taikhoan=pdo_query_one($sql);
        if($taikhoan != false ){
            $user= $taikhoan['user'];
            echo "<br>";
            echo $email;
            echo $pass;
            $_SESSION['user']=$user;
            $_SESSION['loginsucess']="Đăng nhập thành công";
            header('Location: index.php');
        }else{
            echo "Thông tin không chính xác";
        }
    }

     function get_user($user){
        $sql = "select * from taikhoan where user = '$user'";
        $result = pdo_query_one($sql);
        return $result;
    }
    
?>