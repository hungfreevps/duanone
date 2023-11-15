<br><br><br><br><br><br>
<div class="container" style="width: 80%; margin: 0 auto;">
<h3>QUẢN LÝ PHIM</h3>
<div class="container-home">
<form action="index.php?act=listsp" method="post">
                <input type="text" name="kyw" id="">
                <select name="iddm" id="">
                     <option value="0" selected>Tất cả</option>
<!--                      <option value="">Danh mục 2</option>-->
                      <?php
                      foreach ($listdanhmuc as $danhmuc){
                          extract($danhmuc);
                          echo '<option value="'.$id.'">'.$name.'</option>';
                      }
                      ?>
                  </select>
                  <input type="submit" name="listok" id="" value="Go">
            </form>
<table class="table-left-sp" border="1">
            <tr class="">
                <th></th>
                <th>TÊN</th>
                <th>NGÀY CHIẾU</th>
                <th>GIỜ</th>
                <th>NĂM PHÁT HÀNH</th>
                <th>THỂ LOẠI</th>

                <th>TÁC GIẢ</th>
                <th>MÔ TẢ</th>
                <th>QUỐC GIA</th>
                <th>LƯỢT XEM</th>
                <th>Hinh</th>
                <th></th>
            </tr>
            <?php
                foreach ($listsanpham as $phim){
                    extract($phim);
                    echo '<tr>
                    <td><input type="checkbox" name="" id=""></td>

                    <td>'.$tenphim.'</td>
                    <td>'.$ngaychieu.'</td>
                    <td>'.$giochieu.'</td>
                    <td>'.$namphathanh.'</td>
                    <td>'.$theloai.'</td>

                    <td>'.$tacgia.'</td>
                    <td>'.$mota.'</td>
                    <td>'.$quocgia.'</td>
                    <td>'.$luotxem.'</td>
                    <td>hionh</td>
                    <td><a href=""><input type="button" value="Sửa"> </a>   
                    <a href="#"><input type="button" value="Xóa" onclick="return confirm(\'Bạn có chắc chắn muốn xóa\')" > </a></td>



                </tr>';
                }
            ?>
           </table>
</div>
</div>