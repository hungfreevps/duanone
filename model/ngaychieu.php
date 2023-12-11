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
function suangaychieu($idnc, $ngaychieu){
    $sql= "UPDATE `ngaychieu` SET `ngaychieu`='$ngaychieu' WHERE `id` =  $idnc";
    pdo_execute($sql);
}

function loadonengaychieu($idnc){
    $sql = "SELECT * FROM `ngaychieu` WHERE `id` = $idnc";
    $ngaychieulist = pdo_query_one($sql);
    return $ngaychieulist;
}
function xoanc($idnc){
    $sql = "DELETE FROM `ngaychieu` WHERE id = '$idnc'" ;
    pdo_execute($sql);
}
?>