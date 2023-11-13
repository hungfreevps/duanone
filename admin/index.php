<?php
include "../admin/header.php";
include "../model/pdo.php";


if((isset($_GET['act'])) && ($_GET['act']!="")){
    $act = $_GET['act'];
    switch ($act){
        case 'theloai':
            include "../admin/theloai.php";
            break;

        case "phim":
            include "../admin/phim.php";
            break;

        case "binhluan": 
            include "../admin/binhluan.php";
            break;
            
        case "thongke":
            include "../admin/thongke.php";
            break;
    }
} else {
    include "../admin/home.php";
}
include "../admin/footer.php";
?>