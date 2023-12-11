<br><br><br><br><br><br>
<?php
if(is_array($giochieu)){
    extract($giochieu);
}
?>
<div class="">
    <h3 style="text-align:center;">CẬP NHẬT GIỜ CHIẾU</h3><br><br>
    <div class="container-home">
        <form action="index.php?act=updategiochieu&idgc=<?=$id ?>" method="post">
        <div class="inputdata">
                <label for="tenphim">GIỜ CHIẾU</label>
                <input type="text" name="giochieu" value="<?=$giochieu ?>">
                <input type="submit" value="CẬP NHẬT" name="capnhat">
            </div>

            <input type="hidden" name="idgc" value="<?=$id ?>">
            

            <?php 
                if(isset($thongbao)&&($thongbao!= "")){
                    echo $thongbao;
                }
            ?>
        </form>
    </div>
</div>
