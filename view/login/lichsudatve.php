<style>
    table{
        text-align: center;
        margin: 0 auto;
        width: 60%;
    }
    table tr td{
        padding: 5px 0;
    }
</style>
        <!-- Main content -->
    <br><br>               
    <span class="login__tracker"></span>
    <form action="index.php?act=suathongtintk&iduser=<?= $iduser; ?>" method="post" enctype="multipart/form-data">
        <div id="login-form" class="login">
        <p class="login__title">Lịch sử đặt vé</p><br>
        <div>
            <table border=1>
                <tr>
                    <td>#</td>
                    <td>Tên phim</td>
                    <td>Số vé</td>
                    <td>Ngày xem</td>
                    <td>Thời gian xem</td>
                    <td>Trạng thái</td>
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
                        echo '
                            <tr>
                                <td>'.$i.'</td>
                                <td>'.$tenphim.'</td>
                                <td>'.($ghe1 + $ghe2 + $ghe3).'</td>
                                <td>'.$ngaychieu.'</td>
                                <td>'.$giochieu.'</td>
                                <td>'.$trangthai1.'</td>
                            </tr>';
                        $i++;
                    }
                    ?>
                    
            </table>
        </div>
    </form><br><br>
