<?php
    function load_binhluan($idphim){
        $sql="SELECT binhluan.noidung,binhluan.ngaybinhluan, taikhoan.user FROM binhluan
                JOIN taikhoan ON binhluan.iduser = taikhoan.id
                JOIN phim ON binhluan.idpro = phim.idphim
                WHERE phim.idphim = $idphim; ";

                $result = pdo_query($sql);
                return $result;
    }

    function loadall_binhluan($idpro = 0){
        $sql="select * from binhluan where 1";
        if($idpro > 0){
            $sql .= " and idpro = $idpro";
        }
        $sql .= " order by id desc";
        $result=pdo_query($sql);
        return $result;
    }
    // function insert_binhluan($idpro, $noidung){
    //     $date = date('Y-m-d');
    //     $sql="insert into binhluan (noidung, iduser, idpro, ngaybinhluan) values('$noidung', '2', '$idpro', '$date')";
    //     pdo_execute($sql);
    // }

    function insert_binhluan($idpro,$iduser, $noidung){
        $sql = "
            INSERT INTO `binhluan`(`noidung`, `iduser`, `idpro`) 
            VALUES ('$noidung','$iduser','$idpro');
        ";
        pdo_execute($sql);
    }
?>