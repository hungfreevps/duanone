<br><br><br><br><br><br>
<?php
if(is_array($nam)){
    extract($nam);
}
?>
<div >
    <h3 style="text-align: center;">CẬP NHẬT NĂM</h3><br><br>
    <div class="container-home">
        <form action="index.php?act=updatenam&idn=<?=$id ?>" method="post">
        <div class="inputdata">
                <label for="tenphim">NĂM PHÁT HÀNH</label>
                <input type="text" name="nam" value="<?=$nam ?>">
                <input type="submit" value="CẬP NHẬT" name="capnhat">
            </div>

            <input type="hidden" name="idn" value="<?=$id ?>">

            <?php 
                if(isset($thongbao)&&($thongbao!= "")){
                    echo $thongbao;
                }
            ?>
        </form>
    </div>
</div>
