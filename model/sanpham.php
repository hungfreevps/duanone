<?php
function loadall_sanpham($kyw="",$iddm=0){
    $sql = "SELECT * FROM phim ";
    if($kyw!=""){
        $sql.=" and name like '%".$kyw."%' ";
    }
    if($iddm!=""){
        $sql.=" and name like '%".$iddm."%' ";
    }
    $sql.=" order by id desc";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadall_danhmuc($iddm){
        if($iddm>0){
            $sql = "SELECT * FROM danhmuc where id=".$iddm;
            $dm = pdo_query_one($sql);
            extract($dm);
            return $name;
        } else{
            return "";
        }
        
}
?>