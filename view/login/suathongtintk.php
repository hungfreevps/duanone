<br><br><br><br>
<?php
    foreach ($taikhoan as $tk) {
        extract($tk);
    }
    echo '
    <form action="index.php?act=updatethongtintk" method="POST" enctype="multipart/form-data">
        <div>
            <table border=1>
                <tr>
                    <td>ID: </td>
                    <td><input type="text" name="id" value="'.$id.'"></td>
                </tr>
                <tr>
                    <td>User: </td>
                    <td><input type="text" name="user" value="'.$user.'"></</td>
                </tr>
                <tr>
                    <td>Email: </td>
                    <td><input type="text" name="email" value="'.$email.'"></</td>
                </tr>
                <tr>
                    <td>Số điện thoại</td>
                    <td><input type="text" name="sdt" value="'.$sdt.'"></</td>
                </tr>
            </table></br></br>
            <div style="text-align: center;">
                <input name="capnhat" type="submit" value="Cập Nhật">
                <input type="reset" value="NHẬP LẠI">
            </div>
        </div>
    </form>';
    



    
    
?><br><br><br><br><br>
<?php
        if(isset($thongbao)&&($thongbao!=""))echo $thongbao;

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