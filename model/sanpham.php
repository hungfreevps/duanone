<?php
function loadall_sanpham($kyw="",$idtl=0){
    $sql = "SELECT * FROM phim ";
    if($kyw!=""){
        $sql.=" and name like '%".$kyw."%' ";
    }
    if($idtl > 0){
        $sql.=" and iddm = '".$idtl."'";
    }

    $sql.=" order by id desc";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadtheloai(){
    $sql = "SELECT * FROM `theloai` WHERE 1 ORDER BY name";    
    $listtheloai = pdo_query($sql);
    return $listtheloai;
}

function themloai($tenloai){
    $sql= "INSERT INTO `theloai`(`id`, `name`) VALUES (NULL,'$tenloai')";
    pdo_execute($sql);
}

function sualoai($idtl, $tenloai){
    $sql= "UPDATE `theloai` SET `id`= $idtl,`name`='$tenloai'";
    $suatheloai = pdo_query_one($sql);
    return $suatheloai;
}

function themsanpham($tenphim, $ngaychieu, $giochieu, $namphim, $sao, $tacgia, $mota, $quocgia, $hinh){
    $sql= "INSERT INTO `phim`( `tenphim`, `img`, `ngaychieu`, `giochieu`, `namphathanh`, `sao`, `tacgia`, `mota`, `quocgia`) 
    VALUES ('$tenphim','$hinh','$ngaychieu','$giochieu','$namphim','$sao','$tacgia','$mota','$quocgia')";
    pdo_execute($sql);
}
?>