<?php
    ob_start();
    include "model/pdo.php";
    include "model/taikhoan.php";
    include "model/sanpham.php";
    include "model/binhluan.php";
    include "model/giochieu.php";
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
                    
                    $taikhoan = dangnhap($email, $pass);
                    
                    if($taikhoan != false ){
                        $user = $taikhoan['user'];
                        $id = $taikhoan['id'];
                        $role = $taikhoan['role'];
                        echo "</br></br></br></br>";
                        // echo $email."</br>";
                        // echo $pass;
                        $_SESSION["user"] = $user;
                        $_SESSION["id"] = $id;
                        $_SESSION["role"] = $role;
                        $_SESSION["loginsuccess"] = "Đăng nhập thành công";
                        header('Location: index.php');
                    }else{
                        $thongbao= "Thông tin không chính xác";
                    }
                 }
                include "view/login/dangnhap.php";
                break;
            
            case 'dangky':
                if(isset($_POST['dangky'])&&($_POST['dangky'])){
                    $user=$_POST['user'];
                    $email=$_POST['email'];
                    $pass=$_POST['pass'];
                    $sdt=$_POST['sdt'];
                    
                    insert_taikhoan($user, $email, $pass, $sdt);
                    $thongbao="Đăng ký thành công";
                }
                include "view/login/dangki.php";
                break;
            case 'dangxuat':
                dangxuat();
                include "view/home.php";
                header("location: index.php");
                break;
            case 'quenmk':
                if(isset($_POST['quenmk'])&&($_POST['quenmk'])){
                    $email=$_POST['email'];
                    $sdt=$_POST['sdt'];
                    
                    $quenmk =quenmk($email, $sdt);
                    if(is_array($quenmk)){
                        $thongbao = "Mật khẩu của bạn là: ".$quenmk['pass'];
                    }else{
                        $thongbaoloi = "Thông tin không chính xác";
                    }
                 }
                include "view/login/quenmk.php";
                break;
            case 'thongtintk':
                if(isset($_GET['idtk']) && $_GET['idtk']>0 ){
                    $taikhoan = thongtintk($_GET['idtk']);
                };
                include "view/login/thongtintk.php";
                break;

            case "suathongtintk":
                if(isset($_GET['idtk'])&&($_GET['idtk']>0)){
                    $taikhoan = thongtintk($_GET['idtk']);
                }
                include "view/login/suathongtintk.php";
                break;
            case "updatethongtintk":
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $id=$_POST['id'];
                    $user=$_POST['user'];
                    $email=$_POST['email'];
                    $sdt=$_POST['sdt'];
                    $taikhoan = update_taikhoan($id,$user,$email,$sdt);
                    $thongbao="cập nhật thành công!";
                }
                include "view/login/thongtintk.php";
                break;
            case 'sanphamct': 
                if(isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])){
                    $user=get_user($_SESSION['user']);
                    $idpro=$_POST['idpro'];
                    $noidung=$_POST['noidung'];
                    insert_binhluan($idpro,$user['id'],$noidung);
                }
                if(isset($_GET['idphim']) && ($_GET['idphim'] > 0)){
                    $idphim=$_GET['idphim'];
                    $phimsp=loadone_sanpham($idphim);
                    $binhluan=load_binhluan($idphim);
                    include "view/sanphamct.php";
                }else{
                    include "view/home.php";
                }
                break;
            case 'chongio':
                $listgiochieu = loadgiochieu();
                include "view/chongio.php";
                break;
            case 'chonghe':
                $kq = loadghe();
                $d = 

                if(isset($_POST["submit"]) && $_POST["submit"]){
                        
                    $ghe1 = $_POST["ghe1"];
                    $ghe2 = $_POST["ghe2"];
                    $ghe3 = $_POST["ghe3"];
                    $tong = $_POST["tong"];
                    $tenghe = $_POST["tenghe"];
                   
                    $kq = insert_ghe($ghe1, $ghe2, $ghe3, $tong, $tenghe);


                }
                
                include "view/chonghe.php";
                break;
            case 'thanhtoan':
                $kq = loadghe();
                echo "</br></br></br></br></br></br></br>";
                var_dump($kq);
                echo "</br>";
                include "view/thanhtoan.php";
                break;
        }
    }else{
        include "view/home.php";
    }
    
    include "view/footer.php";
    ob_end_flush();
?>