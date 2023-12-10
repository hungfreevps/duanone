<br><br><br><br><br><br>
<?php
if(is_array($theloai)){
    extract($theloai);
    print_r($theloai);
}
?>
<div class="container">
    <h3>THÊM THỂ LOẠI</h3>
    <div class="container-home">
        <form action="index.php?act=updatetacgia&idtg=<?=$id ?>" method="post">
        <div class="inputdata">
                <label for="tenphim">Thể Loại</label>
                <input type="text" name="theloai" value="<?=$theloai ?>">
            </div>

            <input type="hidden" name="idtl" value="<?=$id ?>">
            <input type="submit" value="Them" name="capnhat">

            <?php 
                if(isset($thongbao)&&($thongbao!= "")){
                    echo $thongbao;
                }
            ?>
        </form>
    </div>
</div>
