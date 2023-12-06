
    <style>
        body {
            background-image: url('../path-to-your-background-image.jpg');
            background-size: cover; /* Adjust as needed */
            background-position: center center; /* Adjust as needed */
            background-repeat: no-repeat;
            background-color: #f0f0f0; /* Màu nền cho body */
        }

        h2, h3 {
            color: blue; /* Màu chữ cho tiêu đề h2 và h3 */
        }

        table {
            background-color: lightgray; /* Màu nền cho bảng */
            width: 100%;
            border-collapse: collapse;
        }

        td {
            text-align: center;
            color: black; /* Màu chữ cho các ô trong bảng */
            padding: 10px;
            border: 1px solid #ddd;
        }
</style>
<main>
    <div class="container">
<h2>Trang Chu</h2>
    <div class="container-home">
        
        <div class="table-left">
            <h3 class="text-center">Danh Sach Phim</h3>
            <div class="table">
            <table border=1>
            <tr>
            
                <th>TÊN</th>
                <th>NGÀY CHIẾU</th>
                <th>GIỜ</th>
                <th>NĂM PHÁT HÀNH</th>
                <th>THỂ LOẠI</th>
            </tr>
            <?php
                foreach ($listsanpham as $phim){
                    extract($phim);
                    echo '<tr>
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
        <h3 class="text-center">Binh luan</h3>
            <div class="table">
            </div>
        </div>
    </div>
    </div>
</main>