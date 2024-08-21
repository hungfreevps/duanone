<?php
function themtacgia($tacgia){
    $sql= "INSERT INTO `tacgia`(`id`, `tacgia`) VALUES (NULL,'$tacgia')";
    $addtacgia = pdo_query($sql);
    return $addtacgia;
}
function loadtacgia(){
    $sql ="SELECT * FROM `tacgia` WHERE 1";
    $listtacgia = pdo_query($sql);
    return$listtacgia;
}
function suatacgia($idtg, $tentacgia){
    $sql= "UPDATE `tacgia` SET `tacgia`='$tentacgia' WHERE `id` =  $idtg";
    pdo_execute($sql);
}

function loadonetacgia($idtg){
    $sql = "SELECT * FROM `tacgia` WHERE `id` = $idtg";
    $tacgia = pdo_query_one($sql);
    return $tacgia;
}
function xoatg($idtg){
    $sql = "DELETE FROM `tacgia` WHERE id = '$idtg'" ;
    pdo_execute($sql);
}
?>