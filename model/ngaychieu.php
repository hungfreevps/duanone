<?php
function themngaychieu($ngaychieu){
    $sql= "INSERT INTO `ngaychieu`(`id`, `ngaychieu`) VALUES (NULL,'$ngaychieu')";
    $addngaychieu = pdo_query($sql);
    return $addngaychieu;
}
function loadngaychieu(){
    $sql ="SELECT * FROM `ngaychieu` WHERE 1";
    $listngaychieu = pdo_query($sql);
    return$listngaychieu;
}
?>