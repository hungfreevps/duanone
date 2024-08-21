<?php
function themgio($giochieu){
    $sql= "INSERT INTO `giochieu`(`id`, `giochieu`) VALUES (NULL,'$giochieu')";
    $addgio= pdo_query($sql);
    return $addgio;
}
function loadgiochieu(){
    $sql ="SELECT * FROM `giochieu` WHERE 1";
    $listgiochieu = pdo_query($sql);
    return$listgiochieu;
}
function suagiochieu($idgc, $giochieu){
    $sql= "UPDATE `giochieu` SET `giochieu`='$giochieu' WHERE `id` =  $idgc";
    pdo_execute($sql);
}

function loadonegiochieu($idgc){
    $sql = "SELECT * FROM `giochieu` WHERE `id` = $idgc";
    $giochieu = pdo_query_one($sql);
    return $giochieu;
}
function xoagc($idgc){
    $sql = "DELETE FROM `giochieu` WHERE id = '$idgc'" ;
    pdo_execute($sql);
}
?>