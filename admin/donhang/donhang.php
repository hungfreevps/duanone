<div class="right">
    <style>
        a.delete-button {
        text-decoration: none;
        background-color: #2ecc71;
        color: #ffffff;
        padding: 8px 12px;
        border-radius: 4px;
        display: inline-block;
        }

        a.delete-button:hover {
        background-color: #27ae60;
        color: #ffffff;
        }

        table{
            height: 670px;
    }
    </style>
    <div class="container-content">
        <h3 class="head-action">QUẢN LÍ ĐƠN HÀNG</h3>
            <table border = 1>
                <tr>
                    <th>#</th>
                    <th>Tên người dùng</th>
                    <th>Tên phim</th>
                    <th>Ngày xem</th> 
                    <th>Thời gian xem</th> 
                    <th>Trạng thái</th> 
                    <th>Action</th> 
                </tr>
                    <?php
                    $i = 1;
                    foreach($kq as $value){
                        extract($value);
                        if($trangthai == 0){
                            $trangthai1 = "Chờ xử lí";
                        }else{
                            $trangthai1 = "Đã thanh toán";
                        }
                        // echo print_r($value)."</br>";
                        echo '
                        <tr>
                            <td>'.$i.'</td>
                            <td>'.$user.'</td>
                            <td>'.$tenphim.'</td>
                            <td>'.$ngaychieu.'</td>
                            <td>'.$giochieu.'</td>
                            <td>'.$trangthai1.'</td>
                            <td><a class="delete-button style="text-decoration: none;" href="index.php?act=pheduyet&iduser='.$iduser.'&idphim='.$idphim.'">Phê duyệt</a></td>
                        </tr>
                        ';
                        $i++;
                    ?>
                
                <?php } ?>
                
            </table>
    </div>  
</div>
    <script src="https://kit.fontawesome.com/b8d3f92d8d.js" crossorigin="anonymous"></script>
</body>
</html>