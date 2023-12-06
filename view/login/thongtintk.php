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
        <p class="login__title">Thông tin tài khoản</p><br>
        <?php
                echo '
                <div>
                <table border=1>
                    <tr>
                        <td>User: </td>
                        <td>'.$taikhoan["user"].'</td>
                        <td><a href="index.php?act=suathongtintk&iduser='.$iduser.'">Sửa</a></td>
                    </tr>
                    <tr>
                        <td>Email: </td>
                        <td>'.$taikhoan["email"].'</td>
                        <td><a href="index.php?act=suathongtintk&iduser='.$iduser.'">Sửa</a></td>
                    </tr>
                    <tr>
                        <td>Số điện thoại</td>
                        <td>'.$taikhoan["sdt"].'</td>
                        <td><a href="index.php?act=suathongtintk&iduser='.$iduser.'">Sửa</a></td>
                    </tr>
                    <tr>
                        <td>Mật khẩu</td>
                        <td>******</td>
                        <td><a href="index.php?act=suathongtintk&iduser='.$iduser.'">Sửa</a></td>
                    </tr>
                </table>
                </div>';  
                ?>
        
    </form><br><br>
