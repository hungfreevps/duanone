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
                    <td>Ngày đặt</td>
                    <td>Thời gian xem</td>
                    <td>Trạng thái</td>
                    <td>Xóa</td>
                </tr>
                <?php
                    $i = 1;
                    foreach($kq as $value){
                        extract($value);

                        echo '
                            <tr>
                                <td>'.$i.'</td>
                                <td>'.$tenphim.'</td>
                                <td>'.($ghe1 + $ghe2 + $ghe3).'</td>
                                <td>'.$ngaychieu.'</td>
                                <td>'.$giochieu.'</td>
                                <td>xịt</td>
                                <td><a href="">xóa</a></td>
                            </tr>';
                        $i++;
                    }
                    ?>
                    
            </table>
        </div>
    </form><br><br>
