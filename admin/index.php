<?php
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
                    $thongbao = "Thêm thành công";
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

            $listtheloai = loadtheloai();
            $listsanpham = loadall_sanpham($kyw="");
            include "../admin/sanpham/list.php";
            break;
        
        case 'addsp':
            if(isset($_POST['themmoi']) && $_POST['themmoi']){
                $tenphim = $_POST['tenphim'];
                $ngaychieu = $_POST['ngaychieu'];
                $giochieu = $_POST['giochieu'];
                $namphim = $_POST['namphim'];
                $sao = $_POST['sao'];
                $tacgia = $_POST['tacgia'];
                $mota = $_POST['mota'];
                $quocgia = $_POST['quocgia'];
                $id_theloai = $_POST['id'];


                $hinh = $_FILES['hinh']['name'];
                $duongdan = "../upload";
                $duongdanfile = $duongdan.basename($_FILES['hinh']['name']);
                move_uploaded_file($_FILES['hinh']['tmp_name'], $duongdanfile);
                themsanpham($tenphim, $ngaychieu, $giochieu, $namphim, $sao, $tacgia, $mota, $quocgia, $hinh, $id_the);
                $thongbao = "Them ok";

            }
            $listtheloai = loadtheloai();


            include "../admin/sanpham/add.php";
            break;
        case 'suasp':
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
?>