
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
            unset($_SESSION['iduser']);
            session_unset();
        }
    }
    function quenmk($email, $sdt){
        $sql="select * from taikhoan where email='$email' and sdt='$sdt'";
        $quenmk=pdo_query_one($sql);
        return $quenmk;
    }
    function thongtintk($id){
        $sql="select * from taikhoan where id = $id ";
        $taikhoan = pdo_query_one($sql);
        // var_dump($taikhoan);
        // print_r($taikhoan);
        return $taikhoan;
    }

    function update_taikhoan($idtk,$user,$email,$sdt,$pass){
        $sql=  "UPDATE `taikhoan` SET `user` = '{$user}', `email` = '{$email}', `sdt` = '{$sdt}', `pass` = '{$pass}' WHERE `taikhoan`.`id` = $idtk";
        
        $taikhoan = pdo_query_one($sql);
        return $taikhoan;
    
    }

    function get_user($user){
        $sql = "select * from taikhoan where user = '$user'";
        $result = pdo_query_one($sql);
        return $result;
    }
    
?>