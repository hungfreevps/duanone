<?php
    ob_start();
    include "model/pdo.php";
    include "model/taikhoan.php";
    include "model/sanpham.php";
    include "model/binhluan.php";
    include "model/namphathanh.php";
    include "model/giochieu.php";
    include "model/ngaychieu.php";
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

                    if(empty($pass) && empty($email)){
                        $thongbao = " Email và mật khẩu không được bỏ trống";
                    }else{
                        if(($_POST['email'] != " ") && ($_POST['pass'] != " ")){
                            $taikhoan = dangnhap($email, $pass);
                        
                            if($taikhoan != false ){
                                $_SESSION["user"] = $taikhoan['user'];
                                $_SESSION["iduser"] = $taikhoan['id'];
                                $_SESSION["role"] = $taikhoan['role'];
                                $_SESSION["loginsuccess"] = "Đăng nhập thành công";
                                header('Location: index.php');
                            }else{
                                $thongbao= "Thông tin không chính xác";
                            }
                        }
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

                    if(!empty($_POST['user']) && !empty($_POST['email']) && !empty($_POST['pass']) && !empty($_POST['sdt'])){
                        insert_taikhoan($user, $email, $pass, $sdt);
                        $thongbao="Đăng ký thành công";
                    }else{
                        $thongbaoloi = "Bạn chưa nhập đầy đủ thông tin";
                    }
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
                    if(empty($_POST['email']) && empty($_POST['sdt'])){
                        $thongbaoloi = "Thông tin không chính xác";
                    }else{
                        $email=$_POST['email'];
                        $sdt=$_POST['sdt'];
                        
                        $quenmk =quenmk($email, $sdt);
                        if(is_array($quenmk)){
                            $thongbao = "Mật khẩu của bạn là: ".$quenmk['pass'];
                        }else{
                            $thongbaoloi = "Thông tin không chính xác";
                        }
                    }
                 }
                include "view/login/quenmk.php";
                break;
            case 'thongtintk':
                $iduser = $_GET["iduser"]; 
                if(isset($_GET['iduser']) && $_GET['iduser']>0 ){
                    $taikhoan = thongtintk($_GET['iduser']);
                }
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $user=$_POST['user'];
                    $email=$_POST['email'];
                    $sdt=$_POST['sdt'];
                    $pass=$_POST['pass'];
                    $taikhoan = update_taikhoan($iduser,$user,$email,$sdt,$pass);
                    $thongbao="cập nhật thành công!";
                    header("Location: ".$_SERVER['PHP_SELF']);
                    exit();
                }
                include "view/login/thongtintk.php";
                break;
            case "suathongtintk":
                $iduser = $_GET["iduser"]; 
                if(isset($_GET['iduser'])&&($_GET['iduser']>0)){
                    $taikhoan = thongtintk($_GET['iduser']);
                }
                include "view/login/suathongtintk.php";
                break;
            case "lichsudatve":
                $iduser = $_GET["iduser"];
                $kq = loadlsghe1($iduser);
                
                include "view/login/lichsudatve.php";
                break;
            case 'hometk':
                if(isset($_POST['keyword']) &&  $_POST['keyword'] != " " ){
                    $kyw = $_POST['keyword'];
                    $phimhome = loadall_sanpham_home_timkiem($kyw);
                }else{
                    header("location: index.php");
                }
                include "view/home.php";
                break;

            case 'sanphamct': 
                if(isset($_SESSION["iduser"])){
                    $iduser = $_SESSION["iduser"];
                }
                if(isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])){
                    $user = get_user($_SESSION['user']);
                    $idpro = $_GET["idphim"];
                    $noidung = $_POST['noidung'];
                    insert_binhluan($idpro ,$user['id'],$noidung);
                }
                if(isset($_GET['idphim']) && ($_GET['idphim'] > 0)){
                    $idphim=$_GET['idphim'];
                    $phimsp=loadone_sanpham($idphim);
                    $binhluan=loadall_binhluan($idphim);
                    $listgiochieu = loadgiochieu();
                    include "view/sanphamct.php";
                }
                break;
            case 'chongio':
                if(!isset($_SESSION["iduser"])){
                    header("location: index.php?act=dangnhap");
                }
                $idphim = $_GET["idphim"];
                $iduser = $_GET["iduser"]; 
                if(isset($SESSION["id"])){
                    echo $SESSION["id"];
                }
                if(isset($_GET["idphim"]) && $_GET["idphim"] >0){
                    $idphim=$_GET['idphim'];
                    $phimsp = loadone_sanpham($idphim);
                    
                }
                if(isset($_POST["submit"]) && $_POST["submit"]){   
                    $idphim = $_GET["idphim"];
                    $giochieu = $_POST["choosen-time"];
                    $ngaychieu = $_POST["choosen-date"];

                    if(!empty($_POST["choosen-time"]) && !empty($_POST["choosen-date"])){
                        insert_ghe1($idphim, $iduser, $giochieu, $ngaychieu);
                        header("location: index.php?act=chonghe&idphim=$idphim&iduser=$iduser");
                    }else{
                        $thongbao = "Bạn chưa chọn ngày và giờ ";
                    }
                }

                $result = loadghe($idphim);
                $listgiochieu = loadgiochieu();
                include "view/chongio.php";
                break;
            case 'chonghe':
                $idphim = $_GET["idphim"];
                $iduser = $_GET["iduser"];
                if(isset($_GET["idphim"]) && $_GET["idphim"] >0){
                    $idphim=$_GET['idphim'];
                    $phimsp = loadone_sanpham($idphim);
                }
                // $kq = loadghe($idphim);
                $loadghe = loadghe($idphim);
                if(isset($_POST["submit"]) && $_POST["submit"]){
                    $idphim = $_GET['idphim'];    
                    $ghe1 = $_POST["ghe1"];
                    $ghe2 = $_POST["ghe2"];
                    $ghe3 = $_POST["ghe3"];
                    $tong = $_POST["tong"];
                    $tenghe = $_POST["tenghe"];

                    if(!empty($_POST["ghe1"]) && !empty($_POST["tenghe"])){
                        insert_ghe2($idphim, $iduser, $ghe1, $ghe2, $ghe3, $tong, $tenghe);
                    }
                    $A2 = $_POST["A2"];$A3 = $_POST["A3"];$A4 = $_POST["A4"];$A5 = $_POST["A5"];$A6 = $_POST["A6"];$A7 = $_POST["A7"];$A8 = $_POST["A8"];$A9 = $_POST["A9"];$A10 = $_POST["A10"];$A11 = $_POST["A11"];$A12 = $_POST["A12"];$A13 = $_POST["A13"];$A14 = $_POST["A14"];$A15 = $_POST["A15"];$A16 = $_POST["A16"];$A17 = $_POST["A17"];$B1 = $_POST["B1"];$B2 = $_POST["B2"];$B3 = $_POST["B3"];$B4 = $_POST["B4"];$B5 = $_POST["B5"];$B6 = $_POST["B6"];$B7 = $_POST["B7"];$B8 = $_POST["B8"];$B9 = $_POST["B9"];$B10 = $_POST["B10"];$B11 = $_POST["B11"];$B12 = $_POST["B12"];$B13 = $_POST["B13"];$B14 = $_POST["B14"];$B15 = $_POST["B15"];$B16 = $_POST["B16"];$B17 = $_POST["B17"];$B18 = $_POST["B18"];$C1 = $_POST["C1"];$C2 = $_POST["C2"];$C3 = $_POST["C3"];$C4 = $_POST["C4"];$C5 = $_POST["C5"];$C6 = $_POST["C6"];$C7 = $_POST["C7"];$C8 = $_POST["C8"];$C9 = $_POST["C9"];$C10 = $_POST["C10"];$C11 = $_POST["C11"];$C12 = $_POST["C12"];$C13 = $_POST["C13"];$C14 = $_POST["C14"];$C15 = $_POST["C15"];$C16 = $_POST["C16"];$C17 = $_POST["C17"];$C18 = $_POST["C18"];$D1 = $_POST["D1"];$D2 = $_POST["D2"];$D3 = $_POST["D3"];$D4 = $_POST["D4"];$D5 = $_POST["D5"];$D6 = $_POST["D6"];$D7 = $_POST["D7"];$D8 = $_POST["D8"];$D9 = $_POST["D9"];$D10 = $_POST["D10"];$D11 = $_POST["D11"];$D12 = $_POST["D12"];$D13 = $_POST["D13"];$D14 = $_POST["D14"];$D15 = $_POST["D15"];$D16 = $_POST["D16"];$D17 = $_POST["D17"];$D18 = $_POST["D18"];$E1 = $_POST["E1"];$E2 = $_POST["E2"];$E3 = $_POST["E3"];$E4 = $_POST["E4"];$E5 = $_POST["E5"];$E6 = $_POST["E6"];$E7 = $_POST["E7"];$E8 = $_POST["E8"];$E9 = $_POST["E9"];$E10 = $_POST["E10"];$E11 = $_POST["E11"];$E12 = $_POST["E12"];$E13 = $_POST["E13"];$E14 = $_POST["E14"];$E15 = $_POST["E15"];$E16 = $_POST["E16"];$E17 = $_POST["E17"];$E18 = $_POST["E18"];$F1 = $_POST["F1"];$F2 = $_POST["F2"];$F3 = $_POST["F3"];$F4 = $_POST["F4"];$F5 = $_POST["F5"];$F6 = $_POST["F6"];$F7 = $_POST["F7"];$F8 = $_POST["F8"];$F9 = $_POST["F9"];$F10 = $_POST["F10"];$F11 = $_POST["F11"];$F12 = $_POST["F12"];$F13 = $_POST["F13"];$F14 = $_POST["F14"];$F15 = $_POST["F15"];$F16 = $_POST["F16"];$F17 = $_POST["F17"];$F18 = $_POST["F18"];$G1 = $_POST["G1"];$G2 = $_POST["G2"];$G3 = $_POST["G3"];$G4 = $_POST["G4"];$G5 = $_POST["G5"];$G6 = $_POST["G6"];$G7 = $_POST["G7"];$G8 = $_POST["G8"];$G9 = $_POST["G9"];$G10 = $_POST["G10"];$G11 = $_POST["G11"];$G12 = $_POST["G12"];$G13 = $_POST["G13"];$G14 = $_POST["G14"];$G15 = $_POST["G15"];$G16 = $_POST["G16"];$G17 = $_POST["G17"];$G18 = $_POST["G18"];$I3 = $_POST["I3"];$I4 = $_POST["I4"];$I5 = $_POST["I5"];$I6 = $_POST["I6"];$I7 = $_POST["I7"];$I8 = $_POST["I8"];$I9 = $_POST["I9"];$I10 = $_POST["I10"];$I11 = $_POST["I11"];$I12 = $_POST["I12"];$I13 = $_POST["I13"];$I14 = $_POST["I14"];$I15 = $_POST["I15"];$I16 = $_POST["I16"];$J5 = $_POST["J5"];$J6 = $_POST["J6"];$J7 = $_POST["J7"];$J8 = $_POST["J8"];$J9 = $_POST["J9"];$J10 = $_POST["J10"];$J11 = $_POST["J11"];$J12 = $_POST["J12"];$J13 = $_POST["J13"];$J14 = $_POST["J14"];$K5 = $_POST["K5"];$K6 = $_POST["K6"];$K7 = $_POST["K7"];$K8 = $_POST["K8"];$K9 = $_POST["K9"];$K10 = $_POST["K10"];$K11 = $_POST["K11"];$K12 = $_POST["K12"];$K13 = $_POST["K13"];$K14 = $_POST["K14"];$L6 = $_POST["L6"];$L7 = $_POST["L7"];$L8 = $_POST["L8"];$L9 = $_POST["L9"];$L10 = $_POST["L10"];$L11 = $_POST["L11"];$L12 = $_POST["L12"];$L13 = $_POST["L13"];

                    update_ghe($idphim, $A2, $A3, $A4, $A5, $A6, $A7, $A8, $A9, $A10, $A11, $A12, $A13, $A14, $A15, $A16, $A17, $B1, $B2, $B3, $B4, $B5, $B6, $B7, $B8, $B9, $B10, $B11, $B12, $B13, $B14, $B15, $B16, $B17, $B18, $C1, $C2, $C3, $C4, $C5, $C6, $C7, $C8, $C9, $C10, $C11, $C12, $C13, $C14, $C15, $C16, $C17, $C18, $D1, $D2, $D3, $D4, $D5, $D6, $D7, $D8, $D9, $D10, $D11, $D12, $D13, $D14, $D15, $D16, $D17, $D18, $E1, $E2, $E3, $E4, $E5, $E6, $E7, $E8, $E9, $E10, $E11, $E12, $E13, $E14, $E15, $E16, $E17, $E18, $F1, $F2, $F3, $F4, $F5, $F6, $F7, $F8, $F9, $F10, $F11, $F12, $F13, $F14, $F15, $F16, $F17, $F18, $G1, $G2, $G3, $G4, $G5, $G6, $G7, $G8, $G9, $G10, $G11, $G12, $G13, $G14, $G15, $G16, $G17, $G18, $I3, $I4, $I5, $I6, $I7, $I8, $I9, $I10, $I11, $I12, $I13, $I14, $I15, $I16, $J5, $J6, $J7, $J8, $J9, $J10, $J11, $J12, $J13, $J14, $K5, $K6, $K7, $K8, $K9, $K10, $K11, $K12, $K13, $K14, $L6, $L7, $L8, $L9, $L10, $L11, $L12, $L13);

                    header("location: index.php?act=thanhtoan&idphim=$idphim&iduser=$iduser");
                }
                $ketqua = laytenghe($idphim);
                include "view/chonghe.php";
                break;
            case 'thanhtoan':
                $iduser = $_GET["iduser"];
                $idphim=$_GET['idphim'];
                if(isset($_GET["idphim"]) && $_GET["idphim"] >0){
                    $idphim=$_GET['idphim'];
                    $phimsp = loadone_sanpham($idphim);
                }
                $kq = loadlsghe($idphim, $iduser);
                include "view/thanhtoan.php";
                break;
            case 'hoanthanh':

                include "view/hoanthanh.php";
                break;
            case'momoatm':
                include "view/momo.php";
                break;
            case've': 
                $idphim = $_GET["idphim"];
                $iduser = $_GET["iduser"];
                $kq = load_momo($idphim, $iduser);
                $kq1 = loadlsghe($idphim, $iduser);
                $kq2 = loadone_sanpham($idphim);
                include "view/ve.php";
                break;   
        }
    }else{
      
        include "view/home.php";
    }
    
    include "view/footer.php";
    ob_end_flush();
?>