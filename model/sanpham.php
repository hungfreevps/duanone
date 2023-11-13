<?php
    function loadall_sanpham_home(){
        $sql="select * from phim where 1 order by id desc limit 0,9";
        $listphim=pdo_query($sql);
        return $listphim;
    }

    function loadall_sanpham_top(){
        $sql="select * from phim where 1 order by luotxem desc limit 0,10";
        $listphim=pdo_query($sql);
        return $listphim;
    }

    function loadone_sanpham($id){
        $sql="select * from phim where id=".$id;
        $phimsp=pdo_query_one($sql);
        return $phimsp;
    }
?>