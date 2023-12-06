<?php
    function loadall_sanpham_home(){
        $sql="SELECT *,  quocgia.quocgia,giochieu.giochieu,tacgia.tacgia FROM phim 
        JOIN quocgia ON quocgia.id=phim.id_quocgia 
        JOIN giochieu ON giochieu.id=phim.id_giochieu 
        JOIN theloai ON theloai.id=phim.id_theloai 
        JOIN tacgia ON tacgia.id=phim.id_tacgia
        order by phim.idphim ASC;";
        // $sql="select * from phim where 1 order by id desc limit 0,9";
        $listphim = pdo_query($sql);
        return $listphim;
    }

    function loadall_sanpham_home_timkiem($kyw){
        $sql="SELECT *,  quocgia.quocgia,giochieu.giochieu,tacgia.tacgia FROM phim 
        JOIN quocgia ON quocgia.id=phim.id_quocgia 
        JOIN giochieu ON giochieu.id=phim.id_giochieu 
        JOIN theloai ON theloai.id=phim.id_theloai 
        JOIN tacgia ON tacgia.id=phim.id_tacgia
        WHERE theloai.theloai = '$kyw'ORDER BY phim.idphim ASC;";
        $listphim = pdo_query($sql);
        return $listphim;
    }

    function loadall_sanpham_top(){
        $sql="select * from phim
        where sao LIKE '5'
        order by sao desc limit 0,6;";
        $listphim = pdo_query($sql);
        return $listphim;
    }
    function loadone_sanpham($idphim){
        $sql="SELECT *, theloai.theloai, namphathanh.nam, quocgia.quocgia,giochieu.giochieu,ngaychieu.ngaychieu,tacgia.tacgia FROM phim 
        INNER JOIN theloai ON theloai.id=phim.id_theloai 
        INNER JOIN namphathanh ON namphathanh.id=phim.id_namphathanh 
        INNER JOIN quocgia ON quocgia.id=phim.id_quocgia 
        INNER JOIN giochieu ON giochieu.id=phim.id_giochieu 
        INNER JOIN ngaychieu ON ngaychieu.id=phim.id_ngaychieu 
        INNER JOIN tacgia ON tacgia.id=phim.id_tacgia
        WHERE idphim = $idphim ";
        // $sql="select * from phim where id=".$id;
        $phimsp=pdo_query_one($sql);
        return $phimsp;
    }






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
    function loadone_sanpham_admin(){
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




    // sql phần thêm ghế
    

    function loadghe($idphim){
        $sql = "select * from ghe where id_phim = $idphim";
        // $sql = "select * from ghe";
        $result = pdo_query_one($sql);
        return $result;
    }

    // update bảng ghế
    function update_ghe($idphim, $A2, $A3, $A4, $A5, $A6, $A7, $A8, $A9, $A10, $A11, $A12, $A13, $A14, $A15, $A16, $A17, $B1, $B2, $B3, $B4, $B5, $B6, $B7, $B8, $B9, $B10, $B11, $B12, $B13, $B14, $B15, $B16, $B17, $B18, $C1, $C2, $C3, $C4, $C5, $C6, $C7, $C8, $C9, $C10, $C11, $C12, $C13, $C14, $C15, $C16, $C17, $C18, $D1, $D2, $D3, $D4, $D5, $D6, $D7, $D8, $D9, $D10, $D11, $D12, $D13, $D14, $D15, $D16, $D17, $D18, $E1, $E2, $E3, $E4, $E5, $E6, $E7, $E8, $E9, $E10, $E11, $E12, $E13, $E14, $E15, $E16, $E17, $E18, $F1, $F2, $F3, $F4, $F5, $F6, $F7, $F8, $F9, $F10, $F11, $F12, $F13, $F14, $F15, $F16, $F17, $F18, $G1, $G2, $G3, $G4, $G5, $G6, $G7, $G8, $G9, $G10, $G11, $G12, $G13, $G14, $G15, $G16, $G17, $G18, $I3, $I4, $I5, $I6, $I7, $I8, $I9, $I10, $I11, $I12, $I13, $I14, $I15, $I16, $J5, $J6, $J7, $J8, $J9, $J10, $J11, $J12, $J13, $J14, $K5, $K6, $K7, $K8, $K9, $K10, $K11, $K12, $K13, $K14, $L6, $L7, $L8, $L9, $L10, $L11, $L12, $L13) {
        $sql = "UPDATE `ghe` SET `A2` = '{$A2}', `A3` = '{$A3}', `A4` = '{$A4}', `A5` = '{$A5}', `A6` = '{$A6}', `A7` = '{$A7}', `A8` = '{$A8}', `A9` = '{$A9}', `A10` = '{$A10}', `A11` = '{$A11}', `A12` = '{$A12}', `A13` = '{$A13}', `A14` = '{$A14}', `A15` = '{$A15}', `A16` = '{$A16}', `A17` = '{$A17}', `B1` = '{$B1}', `B2` = '{$B2}', `B3` = '{$B3}', `B4` = '{$B4}', `B5` = '{$B5}', `B6` = '{$B6}', `B7` = '{$B7}', `B8` = '{$B8}', `B9` = '{$B9}', `B10` = '{$B10}', `B11` = '{$B11}', `B12` = '{$B12}', `B13` = '{$B13}', `B14` = '{$B14}', `B15` = '{$B15}', `B16` = '{$B16}', `B17` = '{$B17}', `B18` = '{$B18}', `C1` = '{$C1}', `C2` = '{$C2}', `C3` = '{$C3}', `C4` = '{$C4}', `C5` = '{$C5}', `C6` = '{$C6}', `C7` = '{$C7}', `C8` = '{$C8}', `C9` = '{$C9}', `C10` = '{$C10}', `C11` = '{$C11}', `C12` = '{$C12}', `C13` = '{$C13}', `C14` = '{$C14}', `C15` = '{$C15}', `C16` = '{$C16}', `C17` = '{$C17}', `C18` = '{$C18}', `D1` = '{$D1}', `D2` = '{$D2}', `D3` = '{$D3}', `D4` = '{$D4}', `D5` = '{$D5}', `D6` = '{$D6}', `D7` = '{$D7}', `D8` = '{$D8}', `D9` = '{$D9}', `D10` = '{$D10}', `D11` = '{$D11}', `D12` = '{$D12}', `D13` = '{$D13}', `D14` = '{$D14}', `D15` = '{$D15}', `D16` = '{$D16}', `D17` = '{$D17}', `D18` = '{$D18}', `E1` = '{$E1}', `E2` = '{$E2}', `E3` = '{$E3}', `E4` = '{$E4}', `E5` = '{$E5}', `E6` = '{$E6}', `E7` = '{$E7}', `E8` = '{$E8}', `E9` = '{$E9}', `E10` = '{$E10}', `E11` = '{$E11}', `E12` = '{$E12}', `E13` = '{$E13}', `E14` = '{$E14}', `E15` = '{$E15}', `E16` = '{$E16}', `E17` = '{$E17}', `E18` = '{$E18}', `F1` = '{$F1}', `F2` = '{$F2}', `F3` = '{$F3}', `F4` = '{$F4}', `F5` = '{$F5}', `F6` = '{$F6}', `F7` = '{$F7}', `F8` = '{$F8}', `F9` = '{$F9}', `F10` = '{$F10}', `F11` = '{$F11}', `F12` = '{$F12}', `F13` = '{$F13}', `F14` = '{$F14}', `F15` = '{$F15}', `F16` = '{$F16}', `F17` = '{$F17}', `F18` = '{$F18}', `G1` = '{$G1}', `G2` = '{$G2}', `G3` = '{$G3}', `G4` = '{$G4}', `G5` = '{$G5}', `G6` = '{$G6}', `G7` = '{$G7}', `G8` = '{$G8}', `G9` = '{$G9}', `G10` = '{$G10}', `G11` = '{$G11}', `G12` = '{$G12}', `G13` = '{$G13}', `G14` = '{$G14}', `G15` = '{$G15}', `G16` = '{$G16}', `G17` = '{$G17}', `G18` = '{$G18}', `I3` = '{$I3}', `I4` = '{$I4}', `I5` = '{$I5}', `I6` = '{$I6}', `I7` = '{$I7}', `I8` = '{$I8}', `I9` = '{$I9}', `I10` = '{$I10}', `I11` = '{$I11}', `I12` = '{$I12}', `I13` = '{$I13}', `I14` = '{$I14}', `I15` = '{$I15}', `I16` = '{$I16}', `J5` = '{$J5}', `J6` = '{$J6}', `J7` = '{$J7}', `J8` = '{$J8}', `J9` = '{$J9}', `J10` = '{$J10}', `J11` = '{$J11}', `J12` = '{$J12}', `J13` = '{$J13}', `J14` = '{$J14}', `K5` = '{$K5}', `K6` = '{$K6}', `K7` = '{$K7}', `K8` = '{$K8}', `K9` = '{$K9}', `K10` = '{$K10}', `K11` = '{$K11}', `K12` = '{$K12}', `K13` = '{$K13}', `K14` = '{$K14}', `L6` = '{$L6}', `L7` = '{$L7}', `L8` = '{$L8}', `L9` = '{$L9}', `L10` = '{$L10}', `L11` = '{$L11}', `L12` = '{$L12}', `L13` = '{$L13}' WHERE `ghe`.`id_phim`=$idphim";
    
        $kq = pdo_query($sql);
        return $kq;
    }


    // function insert_bangghe($idphim) {
    //     $sql = "INSERT INTO `ghe` (`id`, `id_phim`, `A2`, `A3`, `A4`, `A5`, `A6`, `A7`, `A8`, `A9`, `A10`, `A11`, `A12`, `A13`, `A14`, `A15`, `A16`, `A17`, `B1`, `B2`, `B3`, `B4`, `B5`, `B6`, `B7`, `B8`, `B9`, `B10`, `B11`, `B12`, `B13`, `B14`, `B15`, `B16`, `B17`, `B18`, `C1`, `C2`, `C3`, `C4`, `C5`, `C6`, `C7`, `C8`, `C9`, `C10`, `C11`, `C12`, `C13`, `C14`, `C15`, `C16`, `C17`, `C18`, `D1`, `D2`, `D3`, `D4`, `D5`, `D6`, `D7`, `D8`, `D9`, `D10`, `D11`, `D12`, `D13`, `D14`, `D15`, `D16`, `D17`, `D18`, `E1`, `E2`, `E3`, `E4`, `E5`, `E6`, `E7`, `E8`, `E9`, `E10`, `E11`, `E12`, `E13`, `E14`, `E15`, `E16`, `E17`, `E18`, `F1`, `F2`, `F3`, `F4`, `F5`, `F6`, `F7`, `F8`, `F9`, `F10`, `F11`, `F12`, `F13`, `F14`, `F15`, `F16`, `F17`, `F18`, `G1`, `G2`, `G3`, `G4`, `G5`, `G6`, `G7`, `G8`, `G9`, `G10`, `G11`, `G12`, `G13`, `G14`, `G15`, `G16`, `G17`, `G18`, `I3`, `I4`, `I5`, `I6`, `I7`, `I8`, `I9`, `I10`, `I11`, `I12`, `I13`, `I14`, `I15`, `I16`, `J5`, `J6`, `J7`, `J8`, `J9`, `J10`, `J11`, `J12`, `J13`, `J14`, `K5`, `K6`, `K7`, `K8`, `K9`, `K10`, `K11`, `K12`, `K13`, `K14`, `L6`, `L7`, `L8`, `L9`, `L10`, `L11`, `L12`, `L13`, `role`) VALUES (NULL, '$idphim', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0')";

    //     $kq = pdo_query($sql);
    //     return $kq;
    // }


   // lấy cột tenghe bảng lsghe
    function laytenghe($idphim){
        $sql = "SELECT tenghe FROM lsghe WHERE idphim = $idphim";
        $kq = pdo_query($sql);
        return $kq;
    }

    function insert_ghe1($idphim, $iduser, $giochieu, $ngaychieu){
        $sql= "INSERT INTO lsghe(idphim, iduser, giochieu, ngaychieu) values ('$idphim', '$iduser', '$giochieu', '$ngaychieu')";
        // $sql = "UPDATE lsghe SET giochieu = '$giochieu', ngaychieu = '$ngaychieu' WHERE idphim = '$idphim' AND iduser = '$iduser'";
        $kq =  pdo_execute($sql);
        return $kq;
    }

    function insert_ghe2($idphim, $iduser, $ghe1, $ghe2, $ghe3, $tong, $tenghe){
        $sql = "UPDATE lsghe SET ghe1 = '$ghe1', ghe2 = '$ghe2', ghe3 = '$ghe3', tong = '$tong', tenghe = '$tenghe' WHERE idphim = '$idphim' AND iduser = '$iduser'";
        // $sql="insert into lsghe(idphim, iduser, ghe1, ghe2, ghe3, tong, tenghe) values ('$idphim', '$iduser', '$ghe1', '$ghe2', '$ghe3', '$tong', '$tenghe')";
        $kq =  pdo_query_one($sql);
        return $kq;
        
    }

    function loadlsghe($idphim, $iduser){
        $sql = "select * from lsghe WHERE idphim = '$idphim' AND iduser = '$iduser'";
        $kq = pdo_query_one($sql);
        return $kq;
    }

    function loadlsghe1($iduser){
        $sql = "select *, phim.tenphim from lsghe 
        INNER JOIN phim ON phim.idphim = lsghe.idphim
        WHERE iduser = '$iduser'";
        $kq = pdo_query($sql);
        return $kq;
    }

    function load_momo($idphim, $iduser){
        $sql = "select * from momo WHERE idphim = '$idphim' AND iduser = '$iduser'";
        $kq = pdo_query_one($sql);
        return $kq;
    }

    function loadall_lsghe($idphim, $iduser){
        $sql = "SELECT *, phim.tenphim 
        FROM `lsghe` 
        INNER JOIN phim ON phim.idphim = lsghe.idphim WHERE idphim = '$idphim' AND iduser = '$iduser'";
        $kq = pdo_query_one($sql);
        return $kq;
    }


    
    



