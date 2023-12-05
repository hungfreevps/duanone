<br><br><br><br>
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
?><br><br><br><br><br>
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
