<br><br><br><br><br><br>
<div class="container" style="width: 80%; margin: 0 auto;">
<h3>QUẢN LÝ PHIM</h3>

<div class="container-home">
    <style>
        th,td{
            min-width: 200px;
            min-height: 1%;
        }
    </style>
        <!-- <div class="table-admin"> -->
            <table class="table-left-sp" border="1">
            <tr class="">
                <th colspan="2">THỂ LOẠI</th>
            </tr>
            <?php

                foreach ($listtheloai as $theloai){
                    extract($theloai);
                    $suatl = "index.php?act=suatheloai&idtl=$id";
                    $xoatl = "index.php?act=xoatheloai&idtl=$id";

                    echo "<tr>
                    <td>".$theloai."</td>
                    <td><a href='".$suatl."'><input type='button' value='Sửa'> </a>   
                    <a href='".$xoatl."'><input type='button' value='Xóa' onclick='return confirm(\"Bạn có chắc chắn muốn xóa\")'></a></td>
                    ";
                
                }
            ?>
            <tr>
                <?php
                    $addtl = "index.php?act=themtheloai";
                    echo "<td><a href='".$addtl."'><input type='button' value='Thêm'> </a> "  
                ?>
            </tr>
           </table>
        <!-- </div>   -->
                <div class="table-giua"></div>
        <!-- <div class="table-admin"> -->
           <table class="table-left-sp" border="1">
            <tr class="">
                <th>QUỐC GIA</th>
            </tr>
            <?php

                foreach ($listquocgia as $qg){
                    extract($qg);
                    $suaqg = "index.php?act=suaquocgia&idqg=$id";
                    $xoaqg = "index.php?act=xoaquocgia&idqg=$id";
                    echo "<tr>
                    <td>".$quocgia."</td>
                    <td><a href='".$suaqg."'><input type='button' value='Sửa'> </a>   
                    <a href='".$xoaqg."'><input type='button' value='Xóa' onclick='return confirm(\"Bạn có chắc chắn muốn xóa\")'></a></td>

                    ";
                
                }
            ?>
                        <tr>
                <?php
                    $addqg = "index.php?act=themquocgia";
                    echo "<td><a href='".$addqg."'><input type='button' value='Thêm'> </a> "  
                ?>
            </tr>
           </table>
        <!-- </div>  -->
           <div class="table-giua"></div>
        <!-- <div class="table-admin"> -->
           <table class="table-left-sp" border="1">
            <tr class="">
                <th>NĂM PHÁT HÀNH</th>
            </tr>
            <?php
            $suasp = "index.php?act=sualoai&id=";
                foreach ($listnamphathanh as $npt){
                    extract($npt);
                    $suan = "index.php?act=suanam&idn=$id";
                    $xoan = "index.php?act=xoanam&idn=$id";
                    echo "<tr>
                    <td>".$nam."</td>
                    <td><a href='".$suan."'><input type='button' value='Sửa'> </a>   
                    <a href='".$xoan."'><input type='button' value='Xóa' onclick='return confirm(\"Bạn có chắc chắn muốn xóa\")'></a></td>

                    ";
                
                }
            ?>
                        <tr>
                <?php
                    $addn = "index.php?act=themnam";
                    echo "<td><a href='".$addn."'><input type='button' value='Thêm'> </a> "  
                ?>
            </tr>
           </table>
        <!-- </div> -->
                <!-- <div class="table-admin"> -->
                <table class="table-left-sp" border="1">
            <tr class="">
                <th>GIỜ CHIẾU</th>
            </tr>
            <?php
            $suasp = "index.php?act=sualoai&id=";
                foreach ($listgiochieu as $gio){
                    extract($gio);
                    $suagc = "index.php?act=suagiochieu&idgc=$id";
                    $xoagc = "index.php?act=xoagiochieu&idgc=$id";
                    echo "<tr>
                    <td>".$giochieu."</td>
                    <td><a href='".$suagc."'><input type='button' value='Sửa'> </a>   
                    <a href='".$xoagc."'><input type='button' value='Xóa' onclick='return confirm(\"Bạn có chắc chắn muốn xóa\")'></a></td>
                    ";
                
                }
            ?>
                        <tr>
                <?php
                    $addgc = "index.php?act=themgiochieu";
                    echo "<td><a href='".$addgc."'><input type='button' value='Thêm'> </a> "  
                ?>
            </tr>
           </table>
        <!-- </div> -->
                <!-- <div class="table-admin"> -->
                <table class="table-left-sp" border="1">
            <tr class="">
                <th>NGÀY CHIẾU</th>
            </tr>
            <?php
            $suasp = "index.php?act=sualoai&id=";
                foreach ($listngaychieu as $ngaychieu){
                    extract($ngaychieu);
                    $suanc = "index.php?act=suangaychieu&idnc=$id";
                    $xoanc = "index.php?act=xoangaychieu&idnc=$id";
                    echo "<tr>
                    <td>".$ngaychieu."</td>
                    <td><a href='".$suanc."'><input type='button' value='Sửa'> </a>   
                    <a href='".$xoanc."'><input type='button' value='Xóa' onclick='return confirm(\"Bạn có chắc chắn muốn xóa\")'></a></td>

                    ";
                
                }
            ?>
            
           </table>
           <tr>
                <?php
                    $addnc = "index.php?act=themngaychieu";
                    echo "<td><a href='".$addnc."'><input type='button' value='Thêm'> </a> "  
                ?>
            </tr>
        <!-- </div> -->
                <!-- <div class="table-admin"> -->
                <table class="table-left-sp" border="1">
            <tr class="">
                <th>TÁC GIẢ</th>
            </tr>
            <?php
                foreach ($listtacgia as $tacgia){
                    extract($tacgia);
                    $suatg = "index.php?act=suatacgia&idtg=$id";
                    $xoatg = "index.php?act=xoatacgia&idtg=$id";
                    echo "<tr>
                    <td>".$tacgia."</td>
                    <td><a href='".$suatg."'><input type='button' value='Sửa'> </a>   
                    <a href='".$xoatg."'><input type='button' value='Xóa' onclick='return confirm(\"Bạn có chắc chắn muốn xóa\")'></a></td>
                    ";
                
                }
            ?>
                        <tr>
                <?php
                    $addtg = "index.php?act=themtacggia";
                    echo "<td><a href='".$addtg."'><input type='button' value='Thêm'> </a> "  
                ?>
            </tr>
           </table>
        <!-- </div> -->

</div>
</div>