<br><br><br><br><br><br>
<?php
if(is_array($ngaychieulist)){
    extract($ngaychieulist);
}
?>
<div class="">
    <h3 style="text-align:center;">CẬP NHẬT NGÀY CHIẾU</h3><br><br>
    <div class="container-home">
        <form action="index.php?act=updatengaychieu&idnc=<?=$id ?>" method="post">
        <div class="inputdata">
                <label for="tenphim">NGÀY CHIẾU</label>
                <input type="date" name="ngaychieu" value="<?=$ngaychieu ?>">
                <input type="submit" value="CẬP NHẬT" name="capnhat">
            </div>

            <input type="hidden" name="idnc" value="<?=$id ?>">
            

            <?php 
                if(isset($thongbao)&&($thongbao!= "")){
                    echo $thongbao;
                }
            ?>
        </form>
    </div>
</div>
