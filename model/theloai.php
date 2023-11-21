<?php
function loadtheloai(){
    $sql = "SELECT * FROM `theloai` WHERE 1";    
    $listtheloai = pdo_query($sql);
    return $listtheloai;
}

function themtheloai($tenloai){
    $sql= "INSERT INTO `theloai`(`id`, `theloai`) VALUES (NULL,'$tenloai')";
    $addtheloai = pdo_query($sql);
    return $addtheloai;
}

function sualoai($idtl, $tenloai){
    $sql= "UPDATE `theloai` SET `id`= $idtl,`name`='$tenloai'";
    $suatheloai = pdo_query_one($sql);
    return $suatheloai;
}

?>