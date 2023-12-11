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
function suanam($idn, $nam){
    $sql= "UPDATE `namphathanh` SET `nam`='$nam' WHERE `id` =  $idn";
    pdo_execute($sql);
}

function loadonenam($idn){
    $sql = "SELECT * FROM `namphathanh` WHERE `id` = $idn";
    $namphathanh = pdo_query_one($sql);
    return $namphathanh;
}
function xoan($idn){
    $sql = "DELETE FROM `namphathanh` WHERE id = '$idn'" ;
    pdo_execute($sql);
}
?>