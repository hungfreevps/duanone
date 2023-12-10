<br><br><br><br><br><br>
<?php
if(is_array($giochieu)){
    extract($giochieu);
}
?>
<div class="container">
    <h3>CẬP NHẬT GIỜ CHIẾU</h3>
    <div class="container-home">
        <form action="index.php?act=updategiochieu&idgc=<?=$id ?>" method="post">
        <div class="inputdata">
                <label for="tenphim">GIỜ CHIẾU</label>
                <input type="text" name="giochieu" value="<?=$giochieu ?>">
            </div>

            <input type="hidden" name="idgc" value="<?=$id ?>">
            <input type="submit" value="CẬP NHẬT" name="capnhat">

            <?php 
                if(isset($thongbao)&&($thongbao!= "")){
                    echo $thongbao;
                }
            ?>
        </form>
    </div>
</div>
