<?php
ob_start();
include "../admin/header.php";
include "../model/pdo.php";
include "../model/sanpham.php";
include "../model/theloai.php";
include "../model/quocgia.php";
include "../model/tacgia.php";
include "../model/ngaychieu.php";
include "../model/namphathanh.php";
include "../model/giochieu.php";


if((isset($_GET['act'])) && ($_GET['act']!="")){
    $act = $_GET['act'];
    switch ($act){
        //gio chieu
        case 'themgio':
            if(isset($_POST['themmoi']) && $_POST['themmoi']){
                $giochieu = $_POST['gio'];
                if(empty($giochieu)){
                    $thongbao = "Không được để trống";
                } else{
                    $addgio = themgio($giochieu);
                    $thongbao = "Thêm thành công";
                    header('location: index.php?act=danhmuc');
                }
            }
            include "../admin/giochieu/add.php";
            break;
        case 'updategiochieu':
            if(isset($_POST['capnhat']) && $_POST['capnhat']){
                $idgc = $_POST['idgc'];
                $giochieu = $_POST['giochieu'];
                suagiochieu($idgc,$giochieu);             
                header('location: index.php?act=danhmuc');
            }
            $listgiochieu = loadgiochieu();
            include "../admin/theloai/list.php";
            break;
        case 'suagiochieu':
            if(isset($_GET['idgc']) && $_GET['idgc']>0){
                $idgc = $_GET['idgc'];
                $giochieu=loadonegiochieu($idgc);
            }
            $listgiochieu = loadgiochieu();
            include "../admin/giochieu/update.php";
            break;
        
        case 'xoagc':
            if(isset($_GET['idgc'])){
                xoagc($_GET['idgc']);
                header('location: index.php?act=danhmuc');
                }
            include "../admin/theloai/update.php";
            break;  
        //nam phat hanh
        case 'themnam':
            if(isset($_POST['themmoi']) && $_POST['themmoi']){
                $nam = $_POST['nam'];
                if(empty($nam)){
                    $thongbao = "Không được để trống";
                } else{
                    $addnam = themnam($nam);
                    $thongbao = "Thêm thành công";
                    header('location: index.php?act=danhmuc');

                }
            }
            include "../admin/nam/add.php";
            break;          
        case 'updatenam':
            if(isset($_POST['capnhat']) && $_POST['capnhat']){
                $idn = $_POST['idn'];
                $nam = $_POST['nam'];
                suanam($idn,$nam);             
                header('location: index.php?act=danhmuc');
            }
            $listnamphathanh = loadnamphathanh();
            include "../admin/theloai/list.php";
            break;
        case 'suanam':
            if(isset($_GET['idn']) && $_GET['idn']>0){
                $idn = $_GET['idn'];
                $nam=loadonenam($idn);
            }
            $listnamphathanh = loadnamphathanh();
            include "../admin/nam/update.php";
            break;
        
        case 'xoanam':
            if(isset($_GET['idn'])){
                xoan ($_GET['idn']);
                header('location: index.php?act=danhmuc');
                }
            include "../admin/theloai/update.php";
            break;       

    
        //ngay chieu
        case 'themngaychieu':
            if(isset($_POST['themmoi']) && $_POST['themmoi']){
                $ngaychieu = $_POST['ngaychieu'];
                if(empty($ngaychieu)){
                    $thongbao = "Không được để trống";
                } else{
                    $addngaychieu = themngaychieu($ngaychieu);
                    $thongbao = "Thêm thành công";
                    header('location: index.php?act=danhmuc');

                }
            }
            include "../admin/ngaychieu/add.php";
            break;
        case 'updatengaychieu':
            if(isset($_POST['capnhat']) && $_POST['capnhat']){
                $idnc = $_POST['idnc'];
                $ngaychieu = $_POST['ngaychieu'];
                suangaychieu($idnc,$ngaychieu);             
                header('location: index.php?act=danhmuc');
            }
            $listngaychieu = loadngaychieu();
            include "../admin/theloai/list.php";
            break;
        case 'suangaychieu':
            if(isset($_GET['idnc']) && $_GET['idnc']>0){
                $idnc = $_GET['idnc'];
                $ngaychieulist=loadonengaychieu($idnc);
            }
            $listngaychieu = loadngaychieu();
            include "../admin/ngaychieu/update.php";
            break;
        
        case 'xoatheloai':
            if(isset($_GET['idtl'])){
                xoatl($_GET['idtl']);
                header('location: index.php?act=danhmuc');
                }
            include "../admin/theloai/update.php";
            break;       

        //tac ngay chieu
        case 'updatetacgia':
            if(isset($_POST['capnhat']) && $_POST['capnhat']){
                $idtg = $_POST['idtg'];
                $tentacgia = $_POST['tacgia'];
                suatacgia($idtg,$tentacgia);             
                header('location: index.php?act=danhmuc');
            }
            $listtacgia = loadtacgia();
            include "../admin/theloai/list.php";
            break;
        case 'suatacgia':
            if(isset($_GET['idtg']) && $_GET['idtg']>0){
                $idtg = $_GET['idtg'];
                $tacgia=loadonetacgia($idtg);
            }
            $listtacgia = loadtacgia();
            include "../admin/tacgia/update.php";
            break;
        case 'themtacgia':
            if(isset($_POST['themmoi']) && $_POST['themmoi']){
                $tentacgia = $_POST['tacgia'];
                if(empty($tentacgia)){
                    $thongbao = "Không được để trống";
                } else{
                    $addtacgia = themtacgia($tentacgia);
                    $thongbao = "Thêm thành công";
                    header('location: index.php?act=danhmuc');

                }
            }
            include "../admin/tacgia/add.php";
            break;
        case 'xoatacgia':
            if(isset($_GET['idtg'])){
                xoatg($_GET['idtg']);
                header('location: index.php?act=danhmuc');
            }
            include "../admin/tacgia/update.php";
            break;

        //quoc gia
        
        case 'themquocgia':
            if(isset($_POST['themmoi']) && $_POST['themmoi']){
                $tenquocgia = $_POST['quocgia'];
                if(empty($tenquocgia)){
                    $thongbao = "Không được để trống";
                } else{
                    $addquocgia = themquocgia($tenquocgia);
                    $thongbao = "Thêm thành công";
                    header('location: index.php?act=danhmuc');

                }
            }
            include "../admin/quocgia/add.php";
            break;
        case 'updatequocgia':
            if(isset($_POST['capnhat']) && $_POST['capnhat']){
                $idqg = $_POST['idqg'];
                $quocgia = $_POST['quocgia'];
                suaquocgia($idqg,$quocgia);             
                header('location: index.php?act=danhmuc');
            }
            $listquocgia = loadquocgia();
            include "../admin/theloai/list.php";
            break;
        case 'suaquocgia':
            if(isset($_GET['idqg']) && $_GET['idqg']>0){
                $idqg = $_GET['idqg'];
                $quocgia=loadonequocgia($idqg);
            }
            $listquocgia = loadquocgia();
            include "../admin/quocgia/update.php";
            break;
        
        case 'xoaquocgia':
            if(isset($_GET['idqg'])){
                xoaqg($_GET['idqg']);
                header('location: index.php?act=danhmuc');
                }
            include "../admin/theloai/update.php";
            break;

        
        
            //the loai  
            
        case 'updatetheloai':
            if(isset($_POST['capnhat']) && $_POST['capnhat']){
                $idtl = $_POST['idtl'];
                $tenloai = $_POST['theloai'];
                sualoai($idtl,$tenloai);             
                header('location: index.php?act=danhmuc');
            }
            $listtheloai = loadtheloai();
            include "../admin/theloai/list.php";
            break;
        case 'suatheloai':
            if(isset($_GET['idtl']) && $_GET['idtl']>0){
                $idtl = $_GET['idtl'];
                $theloai=loadonetheloai($idtl);
            }
            $listtheloai = loadtheloai();
            include "../admin/theloai/update.php";
            break;
        
        case 'xoatheloai':
            if(isset($_GET['idtl'])){
                xoatl($_GET['idtl']);
                header('location: index.php?act=danhmuc');
             }
            include "../admin/theloai/update.php";
            break;
 
        case 'themtheloai':
            if(isset($_POST['themmoi']) && $_POST['themmoi']){
                $tenloai = $_POST['tenloai'];
                if(empty($tenloai)){
                    $thongbao = "Không được để trống";
                } else{
                    $addtheloai = themtheloai($tenloai);
                    $thongbao = "Thêm thành công";
                    header('location: index.php?act=danhmuc');

                }
            }
            include "../admin/theloai/add.php";
            break;

            //danh muc
        case 'danhmuc':
            $listtacgia = loadtacgia();
            $listgiochieu = loadgiochieu();
            $listngaychieu = loadngaychieu();
            $listtheloai = loadtheloai();
            $listquocgia = loadquocgia();
            $listnamphathanh = loadnamphathanh();
            include "../admin/theloai/list.php";
            break;
            //san pham
        case "listsp":
            $listsanpham = loadall_sanpham();
            include "../admin/sanpham/list.php";
            break;
        
        case 'themsp':
            if(isset($_POST['themmoi']) && $_POST['themmoi']){
                $tenphim = $_POST['tenphim'];
                $id_ngaychieu = $_POST['idnc'];
                $id_giochieu = $_POST['idgc'];
                $id_namphathanh = $_POST['idnph'];
                $sao = $_POST['sao'];
                $id_tacgia = $_POST['idtg'];
                $mota = $_POST['mota'];
                $id_quocgia = $_POST['idqg'];
                $id_theloai = $_POST['idtl'];
                $thoiluong = $_POST['thoiluong'];


                $hinh = $_FILES['hinh']['name'];
                $duongdan = "../upload/";
                $duongdanfile = $duongdan.basename($_FILES['hinh']['name']);
                move_uploaded_file($_FILES['hinh']['tmp_name'], $duongdanfile);
                themsanpham($tenphim, $id_ngaychieu, $id_giochieu, $id_namphathanh, $sao, $id_tacgia, $mota, $id_quocgia, $hinh, $id_theloai,$thoiluong);
                $thongbao = "Them ok";
                header('location: index.php?act=listsp');
            }
            $listtacgia = loadtacgia();
            $listgiochieu = loadgiochieu();
            $listngaychieu = loadngaychieu();
            $listtheloai = loadtheloai();
            $listquocgia = loadquocgia();
            $listnamphathanh = loadnamphathanh();
            include "../admin/sanpham/add.php";
            break;
        case 'suasp':     
            if (isset($_GET['idphim']) && $_GET['idphim']>0){
                $sanpham = loadone_sanpham($_GET['idphim']);
            }
            $listtacgia = loadtacgia();
            $listgiochieu = loadgiochieu();
            $listngaychieu = loadngaychieu();
            $listtheloai = loadtheloai();
            $listquocgia = loadquocgia();
            $listnamphathanh = loadnamphathanh();
            include "../admin/sanpham/update.php";
            break;
        case 'updatesp':
            if(isset($_POST['capnhat']) && $_POST['capnhat']){
                $idphim = $_POST['idphim'];
                $tenphim = $_POST['tenphim'];
                $id_ngaychieu = $_POST['idnc'];
                $id_giochieu = $_POST['idgc'];
                $id_namphathanh = $_POST['idnph'];
                $sao = $_POST['sao'];
                $id_tacgia = $_POST['idtg'];
                $mota = $_POST['mota'];
                $id_quocgia = $_POST['idqg'];
                $id_theloai = $_POST['idtl'];
                $thoiluong = $_POST['thoiluong'];

                $hinh = $_FILES['hinh']['name'];
                $duongdan = "../upload/";
                $duongdanfile = $duongdan.basename($_FILES['hinh']['name']);
                move_uploaded_file($_FILES['hinh']['tmp_name'], $duongdanfile);
                $thongbao = "Them ok";
                update_sanpham($tenphim, $id_ngaychieu, $id_giochieu, $id_namphathanh, $sao, $id_tacgia, $mota, $id_quocgia, $hinh, $id_theloai,$thoiluong,$idphim);                
                $thongbao = "cap nhat thanh congah";

            }
            $listtacgia = loadtacgia();
            $listgiochieu = loadgiochieu();
            $listngaychieu = loadngaychieu();
            $listtheloai = loadtheloai();
            $listquocgia = loadquocgia();
            $listnamphathanh = loadnamphathanh();
            $listsanpham = loadall_sanpham();
            include "../admin/sanpham/list.php";
            break;
        case 'xoasp':
            if(isset($_GET['idphim'])){
               xoasp($_GET['idphim']);
               header('location: index.php?act=listsp');
            }


            break;
        case 'xoaspall':
            xoaallsp();
            include "../admin/sanpham/list.php";
            break;

        case "binhluan": 
            include "../admin/binhluan.php";
            break;
            
        case "thongke":
            include "../admin/thongke.php";
            break;
    }
} else {
    $listsanpham = loadall_sanpham();
    include "../admin/home.php";
}
include "../admin/footer.php";
ob_end_flush();
?>