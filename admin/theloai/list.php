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
                <th>THỂ LOẠI</th>
            </tr>
            <?php

                foreach ($listtheloai as $theloai){
                    extract($theloai);
                    $suasp = "index.php?act=suatheloai&idtl=$id";
                    echo "<tr>
                    <td>".$theloai."</td>
                    <td><a href='".$suasp."'><input type='button' value='Sửa'> </a>   
                    <a href='#'><input type='button'value='Xóa' onclick='return confirm(\'Bạn có chắc chắn muốn xóa\')' > </a></td>

                    ";
                
                }
            ?>
                    <!-- // <input type='hidden' name='id' value='".$id."'> -->
           </table>
        <!-- </div>   -->
                <div class="table-giua"></div>
        <!-- <div class="table-admin"> -->
           <table class="table-left-sp" border="1">
            <tr class="">
                <th>QUỐC GIA</th>
            </tr>
            <?php
            $suasp = "index.php?act=sualoai&id=";
                foreach ($listquocgia as $qg){
                    extract($qg);
                    echo "<tr>
                    <td>".$quocgia."</td>

                    ";
                
                }
            ?>
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
                    echo "<tr>
                    <td>".$nam."</td>

                    ";
                
                }
            ?>
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
                    echo "<tr>
                    <td>".$giochieu."</td>

                    ";
                
                }
            ?>
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
                    echo "<tr>
                    <td>".$ngaychieu."</td>

                    ";
                
                }
            ?>
            
           </table>
        <!-- </div> -->
                <!-- <div class="table-admin"> -->
                <table class="table-left-sp" border="1">
            <tr class="">
                <th>TÁC GIẢ</th>
            </tr>
            <?php
            $suasp = "index.php?act=sualoai&id=";
                foreach ($listtacgia as $tacgia){
                    extract($tacgia);
                    echo "<tr>
                    <td>".$tacgia."</td>

                    ";
                
                }
            ?>
           </table>
        <!-- </div> -->

</div>
</div>