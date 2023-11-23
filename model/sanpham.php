<?php
    function loadall_sanpham_home(){
        $sql="SELECT *,  quocgia.quocgia,giochieu.giochieu,tacgia.tacgia FROM phim 
        INNER JOIN quocgia ON quocgia.id=phim.id_quocgia 
        INNER JOIN giochieu ON giochieu.id=phim.id_giochieu 
        INNER JOIN tacgia ON tacgia.id=phim.id_tacgia
        where 1";
        // $sql="select * from phim where 1 order by id desc limit 0,9";
        $listphim=pdo_query($sql);
        return $listphim;
    }

    function loadall_sanpham_top(){
        $sql="select * from phim
        where sao LIKE '5'
        order by sao desc limit 0,6;";
        $listphim=pdo_query($sql);
        return $listphim;
    }

    function loadone_sanpham($id){
        $sql="SELECT *, theloai.theloai, namphathanh.nam, quocgia.quocgia,giochieu.giochieu,ngaychieu.ngaychieu,tacgia.tacgia FROM phim 
        INNER JOIN theloai ON theloai.id=phim.id_theloai 
        INNER JOIN namphathanh ON namphathanh.id=phim.id_namphathanh 
        INNER JOIN quocgia ON quocgia.id=phim.id_quocgia 
        INNER JOIN giochieu ON giochieu.id=phim.id_giochieu 
        INNER JOIN ngaychieu ON ngaychieu.id=phim.id_ngaychieu 
        INNER JOIN tacgia ON tacgia.id=phim.id_tacgia
        Where phim.id=".$id;
        // $sql="select * from phim where id=".$id;
        $phimsp=pdo_query_one($sql);
        return $phimsp;
    }
    // function loadall_sanpham($kyw,$id_theloai){
    //     $sql = "select * from phim where 1";

    // if($kyw != ""){
    //     $sql .= " and name like '%$kyw%'";
    // }

    // if($id_theloai > 0){
    //     $sql .= " and id_theloai = $id_theloai";
    // }

    // $sql .= " order by id_theloai desc";
    // $result = pdo_query($sql);
    // return $result;
    // }

?>