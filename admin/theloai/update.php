<br><br><br><br><br><br>
<?php
if(is_array($theloai)){
    extract($theloai);
}
?>
<div>
    <h3 style="text-align: center;" >THÊM THỂ LOẠI</h3><br><br>
    <div class="container-home">
        <form action="index.php?act=updatetheloai&idtl=<?=$id ?>" method="post">
        <div class="inputdata">
                <label for="tenphim">THỂ LOẠI</label>
                <input type="text" name="theloai" value="<?=$theloai ?>">
                <input type="submit" value="Them" name="capnhat">
            </div>

            <input type="hidden" name="idtl" value="<?=$id ?>">
            

            <?php 
                if(isset($thongbao)&&($thongbao!= "")){
                    echo $thongbao;
                }
            ?>
        </form>
    </div>
</div>
