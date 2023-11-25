<br><br><br><br>
<?php
    foreach ($taikhoan as $tk) {
        extract($tk);
    }
    echo '
    <div>
    <table border=1>
        <tr>
            <td>ID: </td>
            <td>'.$id.'</td>
            <td><a href="">Sửa</a></td>
        </tr>
        <tr>
            <td>User: </td>
            <td>'.$user.'</td>
            <td><a href="">Sửa</a></td>
        </tr>
        <tr>
            <td>Email: </td>
            <td>'.$email.'</td>
            <td><a href="">Sửa</a></td>
        </tr>
        <tr>
            <td>Số điện thoại</td>
            <td>'.$sdt.'</td>
            <td><a href="">Sửa</a></td>
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
