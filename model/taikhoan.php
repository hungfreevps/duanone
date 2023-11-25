
<?php
session_start();

    function insert_taikhoan($user, $email, $pass){
        $sql="insert into taikhoan(user, email, pass) values('$user', '$email', '$pass')";
        pdo_execute($sql);
    }
    function dangnhap($email, $pass){
        $sql="select * from taikhoan where email='$email' and pass='$pass'";
        $taikhoan=pdo_query_one($sql);
        // $sql="select * from taikhoan";
        // $taikhoan = pdo_query($sql);
        if($taikhoan != false ){
            $user = $taikhoan['user'];
            $id = $taikhoan['id'];
            echo "</br></br></br></br>";
            // echo $email."</br>";
            // echo $pass;
            $_SESSION["user"] = $user;
            $_SESSION["id"] = $id;
            $_SESSION["loginsuccess"] = "Đăng nhập thành công";
            header('Location: index.php');
        }else{
            echo "Thông tin không chính xác";
        }
        // var_dump($taikhoan);
     }
    function dangxuat() {
        if (isset($_SESSION['user'])) {
            unset($_SESSION['user']);
            unset($_SESSION['id']);
        }
    }
    function thongtintk($id){
        $sql="select * from taikhoan where id = $id ";
        $taikhoan = pdo_query($sql);
        // var_dump($taikhoan);
        // print_r($taikhoan);
        return $taikhoan;
    }

    function update_taikhoan($id,$user,$email,$sdt){
            // $sql="update sanpham set iddm='".$iddm."',name='".$tensp."',price='".$giasp."',mota='".$mota."',img='".$hinh."' where id=".$id;
        $sql=  "UPDATE `taikhoan` SET `user` = '{$user}', `email` = '{$email}', `sdt` = '{$sdt}' WHERE `taikhoan`.`id` = $id";
        // pdo_execute($sql);
        
        $taikhoan = pdo_query($sql);
        return $taikhoan;
    
    }
    
?>