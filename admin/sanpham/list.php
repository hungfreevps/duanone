<div class="right">
    <div class="container" style="width: 80%; margin: 0 auto;">
        <div class="container-content">
            <h3 class="head-action">QUẢN LÍ PHIM</h3>
            <style>
            .table-left-sp td {
                height: 100px;
            }

            .head-action {
                font-size: 26px;
            }
            </style>
            <!-- <div class="inputdata">
                <label for="theloai">theloai</label>
                <select name="idtl" id="">
                    <?php
                    foreach ($listtheloai as $theloai){
                    extract($theloai);
                    echo "
                    <option value='".$id."'>".$theloai."</option>
                    ";
                
                }
                    ?>
                </select>
            </div> -->
            <div class="container-home">


                <table class="table-left-sp" border="1">
                    <tr class="">
                        <th>#</th>
                        <th>TÊN</th>
                        <th>NGÀY CHIẾU</th>
                        <th>GIỜ</th>
                        <th>NĂM PHÁT HÀNH</th>
                        <th>THỂ LOẠI</th>

                        <th>TÁC GIẢ</th>
                        <th>MÔ TẢ</th>
                        <th>QUỐC GIA</th>
                        <th>THỜI LƯỢNG</th>
                        <th>HÌNH</th>
                        <th><a href="?act=themsp"> <input type="button" value="Thêm"></a></th>
                        <th><a href="?act=xoaspall"><input type="button" value="Xóa tất cả"
                                    onclick="return confirm(\'Bạn có chắc chắn muốn xóa tất cả không? (Xóa hết toàn bộ dữ liệu và không thể khôi phục))\'">
                            </a></th>
                    </tr>
                    <?php
                $i = 1;
                foreach ($listsanpham as $phim){
                    extract($phim);
                    $suasp = "index.php?act=suasp&idphim=".$idphim;
                    $xoasp = "index.php?act=xoasp&idphim=".$idphim;
                    $duongdan = "../upload/".$img;
                    if(is_file($duongdan)){
                        $duongdan = "<img src =".$duongdan." width = '100px'>";
                    } else{
                        $duongdan ="Mat hinh";
                    }

                    echo '<tr>

                    <td>'.$i.'</td>
                    <td>'.$tenphim.'</td>
                    <td>'.$ngaychieu.'</td>
                    <td>'.$giochieu.'</td>
                    <td>'.$nam.'</td>
                    <td>'.$theloai.'</td>

                    <td>'.$tacgia.'</td>
                    <td>'.$mota.'</td>
                    <td>'.$quocgia.'</td>
                    <td>'.$thoiluong.'</td>
                    <td>'.$duongdan.'</td>
                    <td><a href="'.$suasp.'"><input type="button" value="Sửa"></a>   
                    <td><a href="'.$xoasp.'"><input type="button" value="Xóa" onclick="return confirm(\'Bạn có chắc chắn muốn xóa\')" > </a></td>
                </tr>';
                $i++;
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