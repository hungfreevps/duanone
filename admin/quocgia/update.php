<br><br><br><br><br><br>
<?php
if(is_array($quocgia)){
    extract($quocgia);
}
?>
<div class="container">
    <h3>CẬP NHẬT QUỐC GIA</h3>
    <div class="container-home">
        <form action="index.php?act=updatequocgia&idqg=<?=$id ?>" method="post">
        <div class="inputdata">
                <label for="tenphim">QUỐC GIA</label>
                <input type="text" name="quocgia" value="<?=$quocgia ?>">
            </div>

            <input type="hidden" name="idqg" value="<?=$id ?>">
            <input type="submit" value="CẬP NHẬT" name="capnhat">

            <?php 
                if(isset($thongbao)&&($thongbao!= "")){
                    echo $thongbao;
                }
            ?>
        </form>
    </div>
</div>
