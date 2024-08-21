<br><br><br><br><br><br>
<?php
if(is_array($tacgia)){
    extract($tacgia);
}
?>
<div class="">
    <h3 style="text-align:center;">CẬP NHẬT TÁC GIẢ</h3><br><br>
    <div class="container-home">
        <form action="index.php?act=updatetacgia&idtg=<?=$id ?>" method="post">
        <div class="inputdata">
                <label for="tenphim">TÁC GIẢ</label>
                <input type="text" name="tacgia" value="<?=$tacgia ?>">
                <input type="submit" value="CẬP NHẬT" name="capnhat">
            </div>

            <input type="hidden" name="idtg" value="<?=$id ?>">
            

            <?php 
                if(isset($thongbao)&&($thongbao!= "")){
                    echo $thongbao;
                }
            ?>
        </form>
    </div>
</div>
