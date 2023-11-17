<?php
    ob_start();
    include "model/pdo.php";
    include "model/taikhoan.php";
    include "model/sanpham.php";
    include "model/binhluan.php";
    include "global.php";

    $phimhome=loadall_sanpham_home();
    $phimtop=loadall_sanpham_top();

    include "view/header.php";
    if(isset($_GET['act'])&&($_GET['act'])){
        $act=$_GET['act'];
        switch ($act) {
            case 'dangnhap':
                if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
                    $email=$_POST['email'];
                    $pass=$_POST['pass'];
                    
                    dangnhap($email, $pass);
                 }
                include "view/login/dangnhap.php";
                break;
            
            case 'dangky':
                if(isset($_POST['dangky'])&&($_POST['dangky'])){
                    $user=$_POST['user'];
                    $email=$_POST['email'];
                    $pass=$_POST['pass'];
                    
                    insert_taikhoan($user, $email, $pass);
                    $thongbao="Đăng ký thành công";
                    
                }
                include "view/login/dangki.php";
                break;
            case 'dangxuat':
                dangxuat();
                include "view/home.php";
                header("location: index.php");
                break;
            case 'sanphamct':
                
                if(isset($_GET['idsp']) && ($_GET['idsp'] > 0)){
                    $id=$_GET['idsp'];
                    $onesp=loadone_sanpham($id);
                    $binhluan=load_binhluan($id);
                    include "view/sanphamct.php";
                }else{
                    include "view/home.php";
                }
                
                break;
        }
    }else{
        include "view/home.php";
    }
    
    include "view/footer.php";
    ob_end_flush();

?>