<div class="right">
    <style>
       table{
            height: 670px;
       }
    </style>
    <div class="container-content">
        <h3 class="head-action">QUẢN LÍ BÌNH LUẬN</h3>
            <table border = 1>
                <tr>
                    <th>#</th>
                    <th>Tên người dùng</th>
                    <th>Tên phim</th>
                    <th>Nội dung</th> 
                    <th>Ngày gửi</th>  
                </tr>
                    <?php
                    $i = 1;
                    foreach($kq as $value){
                        extract($value);
                        // echo print_r($value)."</br>";
                        echo '
                        <tr>
                            <td>'.$i.'</td>
                            <td>'.$user.'</td>
                            <td>'.$tenphim.'</td>
                            <td>'.$noidung.'</td>
                            <td>'.$ngaybinhluan.'</td>
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