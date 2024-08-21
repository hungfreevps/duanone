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
    $sql= "UPDATE `theloai` SET `theloai`='$tenloai' WHERE `id` =  $idtl";
    pdo_execute($sql);
}

function loadonetheloai($idtl){
    $sql = "SELECT * FROM `theloai` WHERE `id` = $idtl";
    $theloai = pdo_query_one($sql);
    return $theloai;
}
function xoatl($idtl){
    $sql = "DELETE FROM `theloai` WHERE id = '$idtl'" ;
    pdo_execute($sql);
}
?>