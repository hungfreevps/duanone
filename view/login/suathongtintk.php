
<?php
        if(isset($thongbao)&&($thongbao!=" "))echo $thongbao;

        ?>

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
    <form action="index.php?act=thongtintk&iduser=<?= $iduser; ?>" method="post" enctype="multipart/form-data">
        <div id="login-form" class="login">
        <p class="login__title">Sửa thông tin tài khoản</p><br>
        <?php
            echo '
            <form action="index.php?act=thongtintk&iduser='.$iduser.'" method="POST" enctype="multipart/form-data">
                <div>
                    <table border=1>
                        <tr>
                            <td>User: </td>
                            <td><input type="text" name="user" value="'.$taikhoan["user"].'"></</td>
                        </tr>
                        <tr>
                            <td>Email: </td>
                            <td><input type="text" name="email" value="'.$taikhoan["email"].'"></</td>
                        </tr>
                        <tr>
                            <td>Số điện thoại</td>
                            <td><input type="text" name="sdt" value="'.$taikhoan["sdt"].'"></</td>
                        </tr>
                        <tr>
                            <td>Mật khẩu</td>
                            <td><input type="text" name="pass" value="'.$taikhoan["pass"].'"></</td>
                        </tr>
                    </table></br></br>
                    <div style="text-align: center;">
                        <input name="capnhat" type="submit" value="Cập Nhật">
                        <input type="reset" value="NHẬP LẠI">
                    </div>
                </div>
            </form>';
    ?>
    </form><br><br>

