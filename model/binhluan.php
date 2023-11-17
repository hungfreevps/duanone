<?php
    function load_binhluan($idsp){
        $sql="SELECT binhluan.noidung,binhluan.ngaybinhluan, taikhoan.user FROM binhluan
                JOIN taikhoan ON binhluan.iduser = taikhoan.id
                JOIN phim ON binhluan.idpro = phim.id
                WHERE phim.id = $idsp; ";

                $result = pdo_query($sql);
                return $result;
    }

    function insert_binhluan($idpro, $noidung){
        $date = date('Y-m-d');
        $sql="insert into binhluan (noidung, iduser, idpro, ngaybinhluan) values('$noidung', '2', '$idpro', '$date')";
        pdo_execute($sql);
    }
?>