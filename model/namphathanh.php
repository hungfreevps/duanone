<?php
function themnam($nam){
    $sql= "INSERT INTO `namphathanh`(`id`, `nam`) VALUES (NULL,'$nam')";
    $addnam = pdo_query($sql);
    return $addnam;
}
function loadnamphathanh(){
    $sql ="SELECT * FROM `namphathanh` WHERE 1";
    $listnamphathanh = pdo_query($sql);
    return$listnamphathanh;
}
?>