<br><br><br><br><br><br>
<div class="container" style="width: 80%; margin: 0 auto;">
<h3>QUẢN LÝ PHIM</h3>
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
                <th></th>
            </tr>
            <?php
                foreach ($listsanpham as $phim){
                    extract($phim);
                    $suasp = "index.php?act=suasp&idphim=".$idphim;
                    $duongdan = "../upload/".$img;
                    if(is_file($duongdan)){
                        $duongdan = "<img src =".$duongdan." width = '100px'>";
                    } else{
                        $duongdan ="Mat hinh";
                    }

                    echo '<tr>

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
                    <a href="#"><input type="button" value="Xóa" onclick="return confirm(\'Bạn có chắc chắn muốn xóa\')" > </a></td>



                </tr>';
                }
            ?>
           </table>
</div>
</div>