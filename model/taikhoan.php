
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
            $_SESSION['email']=$email;
        }else{
            return "Thông tin không chính xác";
        }
        var_dump($taikhoan);
        die;
     }
    
?>