<div class="right">
    <style>
        a.delete-button {
        text-decoration: none;
        background-color: #e74c3c; 
        color: #ffffff;
        padding: 8px 12px;
        border-radius: 4px;
        display: inline-block;
        }

        a.delete-button:hover {
        background-color: #c0392b;
        color: #ffffff;
        }
        
        table{
            height: 670px;
    }
    </style>
    <div class="container-content">
        <h3 class="head-action">QUẢN LÍ TÀI KHOẢN</h3>
            <table border = 1>
                <tr>
                    <th>#</th>
                    <th>Tên tài khoản</th>
                    <th>Email</th>
                    <th>Số điện thoại</th> 
                    <th>Action</th> 
                </tr>
                    <?php
                    $i = 1;
                    foreach($kq as $value){
                        extract($value);
                        if($role == 1){
                            $taikhoan1 = "Không thể xóa";
                        }else{
                            $taikhoan1 = '<a class="delete-button" href="index.php?act=xoatk&iduser='.$id.'" style="text-decoration: none;">Xóa</a>';
                        }
                        echo '
                        <tr>
                            <td>'.$i.'</td>
                            <td>'.$user.'</td>
                            <td>'.$email.'</td>
                            <td>'.$sdt.'</td>
                            <td>'.$taikhoan1.'</td>
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