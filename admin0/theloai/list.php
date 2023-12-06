<br><br><br><br><br><br>
<div class="container" style="width: 80%; margin: 0 auto;">
<h3>QUẢN LÝ PHIM</h3>

<div class="container-home">
    <style>
  

        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            /* Add any other styles you want for the body */
        }

        .container-home {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            background-color: #fff; /* Màu nền cho container */
        }

        .table-left-sp {
            border-collapse: collapse;
            width: calc(33.33% - 20px); /* 33.33% width for each table with some spacing */
            margin-right: 20px;
            margin-bottom: 20px; /* Add some bottom margin to create space between rows */
        }

        h3 {
            color: #333;
            text-align: center;
            /* Add any other styles you want for the heading */
        }


        th, td {
            min-width: 200px;
            min-height: 1%;
            padding: 10px;
            text-align: left;
        }
        input[type="button"] {
    background-color: #3498db; /* Màu xanh dương nhạt cho nút */
    color: #fff; /* Màu chữ trắng */
    padding: 5px 10px;
    border: none;
    cursor: pointer;
}

/* Hover effect cho nút bấm */
input[type="button"]:hover {
    background-color: #2980b9; /* Màu xanh dương đậm khi hover */
}

        /* Add any other styles for your tables, buttons, etc. */

    </style>

        <!-- <div class="table-admin"> -->
            <table class="table-left-sp" border="1">
            <tr class="">
                <th colspan="2">THỂ LOẠI</th>
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
                    <td><a href='".$suasp."'><input type='button' value='Sửa'> </a>   
                    <a href='#'><input type='button'value='Xóa' onclick='return confirm(\'Bạn có chắc chắn muốn xóa\')' > </a></td>

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
                    <td><a href='".$suasp."'><input type='button' value='Sửa'> </a>   
                    <a href='#'><input type='button'value='Xóa' onclick='return confirm(\'Bạn có chắc chắn muốn xóa\')' > </a></td>

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
                    <td><a href='".$suasp."'><input type='button' value='Sửa'> </a>   
                    <a href='#'><input type='button'value='Xóa' onclick='return confirm(\'Bạn có chắc chắn muốn xóa\')' > </a></td>

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
                    <td><a href='".$suasp."'><input type='button' value='Sửa'> </a>   
                    <a href='#'><input type='button'value='Xóa' onclick='return confirm(\'Bạn có chắc chắn muốn xóa\')' > </a></td>

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
                    <td><a href='".$suasp."'><input type='button' value='Sửa'> </a>   
                    <a href='#'><input type='button'value='Xóa' onclick='return confirm(\'Bạn có chắc chắn muốn xóa\')' > </a></td>

                    ";
                
                }
            ?>
           </table>
        <!-- </div> -->

</div>
</div>