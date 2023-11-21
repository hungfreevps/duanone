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
?>