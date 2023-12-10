<br><br><br><br><br><br>
<?php
if(is_array($tacgia)){
    extract($tacgia);
    print_r($tacgia);
}
?>
<div class="container">
    <h3>CẬP NHẬT TÁC GIẢ</h3>
    <div class="container-home">
        <form action="index.php?act=updatetacgia&idtg=<?=$id ?>" method="post">
        <div class="inputdata">
                <label for="tenphim">TÁC GIẢ</label>
                <input type="text" name="tacgia" value="<?=$tacgia ?>">
            </div>

            <input type="hidden" name="idtg" value="<?=$id ?>">
            <input type="submit" value="CẬP NHẬT" name="capnhat">

            <?php 
                if(isset($thongbao)&&($thongbao!= "")){
                    echo $thongbao;
                }
            ?>
        </form>
    </div>
</div>
