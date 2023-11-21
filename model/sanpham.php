<?php
function loadall_sanpham($kyw=""){
    $sql = "SELECT *
    FROM phim
    INNER JOIN theloai ON theloai.id=phim.id_the ";
    // if($kyw!=""){
    //     $sql.=" and name like '%".$kyw."%' ";
    // }
    // if($idtl > 0){
    //     $sql.=" and iddm = '".$idtl."'";
    // }

    // $sql.=" order by id desc";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}


function themsanpham($tenphim, $ngaychieu, $giochieu, $namphim, $sao, $tacgia, $mota, $quocgia, $hinh, $id_theloai){
    $sql= "INSERT INTO `phim`( `tenphim`, `img`, `ngaychieu`, `giochieu`, `namphathanh`, `sao`, `tacgia`, `mota`, `quocgia`, `id_the`) 
    VALUES ('$tenphim','$hinh','$ngaychieu','$giochieu','$namphim','$sao','$tacgia','$mota','$quocgia', '$id_theloai)";
    pdo_execute($sql);
}




?>