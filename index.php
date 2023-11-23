<?php
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
            case 'sanphamct':
                if(isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])){
                    $user=get_user($_SESSION['user']);
                    $idpro=$_POST['idpro'];
                    $noidung=$_POST['noidung'];
                    insert_binhluan($idpro,$user['id'],$noidung);
                }
                if(isset($_GET['id']) && ($_GET['id'] > 0)){
                    $id=$_GET['id'];
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

?>