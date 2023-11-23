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

        //tac ngay chieu
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

        
        
            //the loai   
        case 'updatetheloai':

            include "../admin/theloai/list.php";
            break;
        
        case 'suatheloai':
            if(isset($_GET['id'])&&($_GET['id'] >0)){
                $id = $_GET['id'];
                $suatheloai = sualoai($id);
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