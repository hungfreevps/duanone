<?php
include "view/header.php";
include "model/pdo.php";


if((isset($_GET['act'])) && ($_GET['act']!="")){
    $act = $_GET['act'];
    switch ($act){
        case 'login':
            include "view/login.php";
            break;

        case 'thanhtoan':
            include "view/thanhtoan.php";
            break;
        case 'hoanthanh':
            include "view/hoanthanh.php";
            break;
        case'momoatm':
            include "view/momo.php";
            break;
    }   
} else {
    include "view/home.php";
}
include "view/footer.php";
?>