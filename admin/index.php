<?php
include "../admin/header.php";
include "../model/pdo.php";
include "../model/sanpham.php";


if((isset($_GET['act'])) && ($_GET['act']!="")){
    $act = $_GET['act'];
    switch ($act){
        case 'theloai':
            include "../admin/theloai.php";
            break;

        case "listsp":
            if(isset($_GET['']) && $_GET['']){

            }
            $listsanpham = loadall_sanpham();
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
?>