<?php
include "../admin/header.php";
include "../model/pdo.php";
include "../model/sanpham.php";


if((isset($_GET['act'])) && ($_GET['act']!="")){
    $act = $_GET['act'];
    switch ($act){
        case 'theloai':
            // $sql = "SELECT * FROM `theloai` ORDER BY name";    
            // $listtheloai = pdo_query($sql);
            $listtheloai = loadtheloai();

            include "../admin/theloai/list.php";
            break;
        
        case 'updatetheloai':

            include "../admin/theloai/list.php";
            break;
        
        case 'sualoai':
            if(isset($_GET['id'])&&($_GET['id'] >0)){
                $id = $_GET['id'];
                $suatheloai = sualoai($idtl);
            }
            include "../admin/theloai/update.php";
            break;
            
        case 'addtheloai':
            if(isset($_POST['themmoi']) && $_POST['themmoi']){
                $tenloai = $_POST['tenloai'];
                $addtheloai = themloai($tenloai);
                $thongbao = "Them thanh cong";
            }
            include "../admin/theloai/add.php";
            break;

        case "listsp":
            if(isset($_GET['']) && $_GET['']){

            }
            $listtheloai = loadtheloai();
            $listsanpham = loadall_sanpham($kyw="",$id=0);
            include "../admin/sanpham/list.php";
            break;
        
        case 'addsp':
            if(isset($_POST['themmoi']) && $_POST['themmoi']){
                $tenphim = $_POST["tenphim"];
                $ngaychieu = $_POST["tenphim"];
                $giochieu = $_POST["tenphim"];
                $namphim = $_POST["tenphim"];
                $sao = $_POST["tenphim"];
                $tacgia = $_POST["tenphim"];
                $mota = $_POST["tenphim"];
                $quocgia = $_POST["tenphim"];
                $id_the = $_POST["tenphim"];
            }
            include "../admin/sanpham/add.php";
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
?>