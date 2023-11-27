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
?>