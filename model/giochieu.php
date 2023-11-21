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
?>