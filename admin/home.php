<div class="right">
            
    <style>

    </style>
        <main>
            <div class="container">
            <h2>Trang Chu</h2>
            <div class="container-home">
            
            <div class="table-left">
                <h3 class="text-center">Danh Sach Phim</h3>
                <div class="table">
                <table>
                <tr>
                    <th></th>
                    <th>TÊN</th>
                    <th>NGÀY CHIẾU</th>
                    <th>GIỜ</th>
                    <th>NĂM PHÁT HÀNH</th>
                    <th>THỂ LOẠI</th>
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
                        <td>'.$nam.'</td>
                        <td>'.$theloai.'</td>
                    </tr>';
                    }
                ?>
            </table>
                </div>
            </div>
            <div class="table-giua"></div>
            <div class="table-right" style="">
                <div class="table">
                </div>
            </div>
        </div>
        </div>
        </main>
    </div>
    <script src="https://kit.fontawesome.com/b8d3f92d8d.js" crossorigin="anonymous"></script>
</body>
</html>
