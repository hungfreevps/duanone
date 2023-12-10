<br><br><br><br><br><br>
<?php
if(is_array($nam)){
    extract($nam);
}
?>
<div class="container">
    <h3>CẬP NHẬT NĂM</h3>
    <div class="container-home">
        <form action="index.php?act=updatenam&idn=<?=$id ?>" method="post">
        <div class="inputdata">
                <label for="tenphim">QUỐC GIA</label>
                <input type="text" name="nam" value="<?=$nam ?>">
            </div>

            <input type="hidden" name="idn" value="<?=$id ?>">
            <input type="submit" value="CẬP NHẬT" name="capnhat">

            <?php 
                if(isset($thongbao)&&($thongbao!= "")){
                    echo $thongbao;
                }
            ?>
        </form>
    </div>
</div>
