<?php
function loadall_sanpham(){
    $sql = "SELECT *, theloai.theloai, namphathanh.nam, quocgia.quocgia,giochieu.giochieu,ngaychieu.ngaychieu,tacgia.tacgia
    FROM phim
    INNER JOIN theloai ON theloai.id=phim.id_theloai
    INNER JOIN namphathanh ON namphathanh.id=phim.id_namphathanh
    INNER JOIN quocgia ON quocgia.id=phim.id_quocgia
    INNER JOIN giochieu ON giochieu.id=phim.id_giochieu
    INNER JOIN ngaychieu ON ngaychieu.id=phim.id_ngaychieu
    INNER JOIN tacgia ON tacgia.id=phim.id_tacgia";

    $listsanpham = pdo_query($sql);
    return $listsanpham;
}


function themsanpham($tenphim, $id_ngaychieu, $id_giochieu, $id_namphathanh, $sao, $id_tacgia, $mota, $id_quocgia, $hinh, $id_theloai,$thoiluong){
    $sql= "INSERT INTO `phim`( `tenphim`, `img`, `mota`, `sao`, `id_theloai`, `id_namphathanh`, `id_quocgia`, `id_giochieu`, `id_ngaychieu`, `id_tacgia`, `thoiluong`) 
    VALUES ('$tenphim','$hinh','$mota','$sao','$id_theloai','$id_namphathanh','$id_quocgia','$id_giochieu','$id_ngaychieu','$id_tacgia','$thoiluong')";
    pdo_execute($sql);
}
function loadone_sanpham(){
    $sql = "SELECT *, theloai.theloai, namphathanh.nam, quocgia.quocgia,giochieu.giochieu,ngaychieu.ngaychieu,tacgia.tacgia
    FROM phim
    INNER JOIN theloai ON theloai.id=phim.id_theloai
    INNER JOIN namphathanh ON namphathanh.id=phim.id_namphathanh
    INNER JOIN quocgia ON quocgia.id=phim.id_quocgia
    INNER JOIN giochieu ON giochieu.id=phim.id_giochieu
    INNER JOIN ngaychieu ON ngaychieu.id=phim.id_ngaychieu
    INNER JOIN tacgia ON tacgia.id=phim.id_tacgia";
    $sanpham = pdo_query_one($sql);
    return $sanpham;
}

function update_sanpham($tenphim, $id_ngaychieu, $id_giochieu, $id_namphathanh, $sao, $id_tacgia, $mota, $id_quocgia, $hinh, $id_theloai,$thoiluong,$idphim){
    if($hinh!=""){
        $sql = "UPDATE `phim` SET `tenphim`='$tenphim',`img`='$hinh',`mota`='$mota',`sao`='$sao',`id_theloai`='$id_theloai',`id_namphathanh`='$id_namphathanh',`id_quocgia`='$id_quocgia',`id_giochieu`='$id_giochieu',`id_ngaychieu`='$id_ngaychieu',`id_tacgia`='$id_tacgia',`thoiluong`='$thoiluong' WHERE `phim`.`idphim` = '$idphim'" ;
    } else {
        $sql = "UPDATE `phim` SET `tenphim`='$tenphim',`img`='$hinh',`mota`='$mota',`sao`='$sao',`id_theloai`='$id_theloai',`id_namphathanh`='$id_namphathanh',`id_quocgia`='$id_quocgia',`id_giochieu`='$id_giochieu',`id_ngaychieu`='$id_ngaychieu',`id_tacgia`='$id_tacgia',`thoiluong`='$thoiluong' WHERE `phim`.`idphim` = '$idphim'" ;
    }
    pdo_execute($sql);
}
function xoasp($idphim){
    $sql = "DELETE FROM `phim` WHERE idphim = '$idphim'" ;
    pdo_execute($sql);
}
function xoaallsp(){
    $sql = "TRUNCATE TABLE `duan1`.`phim`";
    pdo_execute($sql);
}

?>