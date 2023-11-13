<?php
    include "model/pdo.php";
    include "model/taikhoan.php";

    include "view/header.php";
    include "global.php";
    if(isset($_GET['act'])&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch($act){
            case "dangky":
                if(isset($_POST['submit']) && ($_POST['submit']!="")){
                        $tentaikhoan = $_POST['tentaikhoan'];
                        $sdt = $_POST['sdt'];
                        $email = $_POST['email'];
                        $password = $_POST['password'];
                        insert_taikhoan($tentaikhoan,$sdt,$email,$password);
                        $thongbao="Đăng ký thành công";
                }
                include "dangky.php";
                break;
            case "dangnhap": 
                
            case "quenmk":
                if (isset($_POST['guiemail'])) {
                    $email = $_POST['email'];
                    $sendMailMess = sendMail($email);
                }
                include "view/login/quenmk.php";
                break;
        }        
    }else{
            include "view/home.php";
        }
    include "view/footer.php";
?>