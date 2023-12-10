<br><br><br><br><br><br>
<?php
if(is_array($ngaychieulist)){
    extract($ngaychieulist);
}
?>
<div class="container">
    <h3>CẬP NHẬT NGÀY CHIẾU</h3>
    <div class="container-home">
        <form action="index.php?act=updatengaychieu&idnc=<?=$id ?>" method="post">
        <div class="inputdata">
                <label for="tenphim">NGÀY CHIẾU</label>
                <input type="date" name="ngaychieu" value="<?=$ngaychieu ?>">
            </div>

            <input type="hidden" name="idnc" value="<?=$id ?>">
            <input type="submit" value="CẬP NHẬT" name="capnhat">

            <?php 
                if(isset($thongbao)&&($thongbao!= "")){
                    echo $thongbao;
                }
            ?>
        </form>
    </div>
</div>
