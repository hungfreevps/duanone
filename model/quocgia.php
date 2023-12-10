<?php
function themquocgia($quocgia){
    $sql= "INSERT INTO `quocgia`(`id`, `quocgia`) VALUES (NULL,'$quocgia')";
    $addquocgia = pdo_query($sql);
    return $addquocgia;
}
function loadquocgia(){
    $sql ="SELECT * FROM `quocgia` WHERE 1";
    $listquocgia = pdo_query($sql);
    return $listquocgia;
}
function suaquocgia($idqg, $quocgia){
    $sql= "UPDATE `quocgia` SET `quocgia`='$quocgia' WHERE `id` =  $idqg";
    pdo_execute($sql);
}

function loadonequocgia($idqg){
    $sql = "SELECT * FROM `quocgia` WHERE `id` = $idqg";
    $quocgia = pdo_query_one($sql);
    return $quocgia;
}
function xoaqg($idqg){
    $sql = "DELETE FROM `quocgia` WHERE id = '$idqg'" ;
    pdo_execute($sql);
}
?>