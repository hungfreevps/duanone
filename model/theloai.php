<?php
function loadtheloai(){
    $sql = "SELECT * FROM `theloai` ";    
    $listtheloai = pdo_query($sql);
    return $listtheloai;
}

function themtheloai($tenloai){
    $sql= "INSERT INTO `theloai`(`id`, `theloai`) VALUES (NULL,'$tenloai')";
    $addtheloai = pdo_query($sql);
    return $addtheloai;
}

function sualoai($idtl, $tenloai){
    $sql= "UPDATE `theloai` SET `name`='$tenloai' WHERE `id` = $idtl";
    $suatheloai = pdo_query_one($sql);
    return $suatheloai;
}

function loadonetheloai(){
    $sql = "SELECT * FROM `theloai`";
    $theloai = pdo_query_one($sql);
    return $theloai;
}
?>