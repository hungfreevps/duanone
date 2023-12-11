<div class="right">
    <div class="container" style="width: 80%; margin: 0 auto;">
        <div class="container-content">
            <h3 class="head-action">QUẢN LÍ DANH MỤC</h3>
            <style>
                a{
                    text-decoration: none;
                }
                th,td{
                    min-width: 200px;
                    min-height: 1%;
                }
                .container-home {
                    display: flex;
                    flex-wrap: wrap;
                    justify-content: space-between;
                }
                .table-left-sp {
                    width: 48%;
                    margin-bottom: 20px;
                }
                .table-left-sp th, .table-left-sp td {
                    padding: 10px;
                    text-align: left;
                }
                .table-left-sp th, .table-left-sp td {
                padding: 10px;
                text-align: center;
                }
            </style>
                <div class="container-home">
                    <table class="table-left-sp" border="1">
                        <tr>
                            <th>THỂ LOẠI</th>
                            <th>
                                <?php
                                $addtl = "index.php?act=themtheloai";
                                echo "<a href='".$addtl."'><input type='button' value='Thêm'></a>";
                                ?>
                            </th>
                        </tr>
                        <?php
                        foreach ($listtheloai as $theloai) {
                            extract($theloai);
                            $suatl = "index.php?act=suatheloai&idtl=$id";
                            $xoatl = "index.php?act=xoatheloai&idtl=$id";

                            echo "<tr>
                                <td>".$theloai."</td>
                                <td>
                                    <a href='".$suatl."'><input type='button' value='Sửa'></a>
                                    <a href='".$xoatl."'><input type='button' value='Xóa' onclick='return confirm(\"Bạn có chắc chắn muốn xóa\")'></a>
                                </td>
                            </tr>";
                        }
                        ?>
                    </table>
                    <table class="table-left-sp" border="1">
                        <tr class="">
                            <th>QUỐC GIA</th>
                            <th>
                                <?php
                                    $addqg = "index.php?act=themquocgia";
                                    echo "<a href='".$addqg."'><input type='button' value='Thêm'></a>";
                                ?>
                            </th>
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
                    </table>                                          
                    <table class="table-left-sp" border="1">
                        <tr class="">
                            <th>NĂM PHÁT HÀNH</th>
                            <th>
                                <?php
                                    $addn = "index.php?act=themnam";
                                    echo "<a href='".$addn."'><input type='button' value='Thêm'></a>";  
                                ?>
                            </th>
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
                    </table>                    
                    <table class="table-left-sp" border="1">
                        <tr class="">
                            <th>GIỜ CHIẾU</th>
                            <th>
                                <?php
                                    $addgc = "index.php?act=themgiochieu";
                                    echo "<a href='".$addgc."'><input type='button' value='Thêm'></a>"; 
                                ?>
                            </th>
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
                    </table>
                    <table class="table-left-sp" border="1">
                        <tr class="">
                            <th>NGÀY CHIẾU</th>
                            <th>
                                <?php
                                    $addnc = "index.php?act=themngaychieu";
                                    echo "<a href='".$addnc."'><input type='button' value='Thêm'></a>";
                                ?>
                            </th>
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
                    <table class="table-left-sp" border="1">
                        <tr class="">
                            <th>TÁC GIẢ</th>
                            <th>
                                <?php
                                    $addtg = "index.php?act=themtacgia";
                                    echo "<a href='".$addtg."'><input type='button' value='Thêm'></a>";
                                ?>
                            </th>
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
                    </table>
                </div>   
        </div>
    </div>
</div>
    <script src="https://kit.fontawesome.com/b8d3f92d8d.js" crossorigin="anonymous"></script>
</body>
</html>

