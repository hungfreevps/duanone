<?php
    function loadall_binhluan($idphim){
        $sql="SELECT binhluan.id, binhluan.noidung, taikhoan.user, binhluan.ngaybinhluan FROM binhluan
                JOIN taikhoan ON binhluan.iduser = taikhoan.id
                JOIN phim ON binhluan.idpro = phim.idphim
                WHERE phim.idphim = $idphim ";

                $result = pdo_query($sql);
                return $result;
    }

    function loadall_binhluan1(){
        $sql="SELECT binhluan.id, binhluan.noidung, taikhoan.user, phim.tenphim, binhluan.ngaybinhluan FROM binhluan
                JOIN taikhoan ON binhluan.iduser = taikhoan.id
                JOIN phim ON binhluan.idpro = phim.idphim";
                $result = pdo_query($sql);
                return $result;
    }

    function load_binhluan($idpro = 0){
        $sql="select * from binhluan where 1";
        if($idpro > 0){
            $sql .= " and idpro = $idpro";
        }
        $sql .= " order by id desc";
        $result=pdo_query($sql);
        return $result;
    }
    

    function insert_binhluan($idpro, $iduser, $noidung){
        $date = date('Y-m-d');
        $sql = "
            INSERT INTO `binhluan`(`noidung`, `iduser`, `idpro`, ngaybinhluan) 
            VALUES ('$noidung','$iduser','$idpro', '$date');
        ";
        pdo_execute($sql);
    }
?>