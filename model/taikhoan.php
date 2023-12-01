
<?php
session_start();

    function insert_taikhoan($user, $email, $pass, $sdt){
        $sql="insert into taikhoan(user, email, pass, sdt) values('$user', '$email', '$pass', '$sdt')";
        pdo_execute($sql);
    }
    function dangnhap($email, $pass){
        $sql="select * from taikhoan where email='$email' and pass='$pass'";
        $taikhoan=pdo_query_one($sql);
        // $sql="select * from taikhoan";
        // $taikhoan = pdo_query($sql);
        
        // var_dump($taikhoan);
        return $taikhoan;
     }
    function dangxuat() {
        if (isset($_SESSION['user'])) {
            unset($_SESSION['user']);
            unset($_SESSION['id']);
        }
    }
    function quenmk($email, $sdt){
        $sql="select * from taikhoan where email='$email' and sdt='$sdt'";
        $quenmk=pdo_query_one($sql);
        return $quenmk;
    }
    function thongtintk($id){
        $sql="select * from taikhoan where id = $id ";
        $taikhoan = pdo_query($sql);
        // var_dump($taikhoan);
        // print_r($taikhoan);
        return $taikhoan;
    }

    function update_taikhoan($id,$user,$email,$sdt){
        $sql=  "UPDATE `taikhoan` SET `user` = '{$user}', `email` = '{$email}', `sdt` = '{$sdt}' WHERE `taikhoan`.`id` = $id";
        
        $taikhoan = pdo_query($sql);
        return $taikhoan;
    
    }
    
?>