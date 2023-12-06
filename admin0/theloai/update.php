<br><br><br><br><br><br>
<?php
if(is_array($theloai)){
    extract($theloai);
    print_r($theloai);
}
?>
<div class="container">
    <h3>THÊM THỂ LOẠI</h3>
    <div class="container-home">
        <form action="index.php?act=" method="post">
        <div class="inputdata">
                <label for="">Thể loại</label>
                <select name="idtl" id="">
                <?php
                foreach ($listtheloai as $key=>$value){
                    if($id==$value['idtl']){
                        echo "<option value=".$value['idtl']." selected>".$value['theloai']."</option>";
                    } else {
                        echo "<option value=".$value['idtl'].">".$value['theloai']."</option>";
                    }
                }
                ?>
                </select>
                <input type="submit" value="Them" name="capnhat">
            </div>
            

            <?php 
                if(isset($thongbao)&&($thongbao!= "")){
                    echo $thongbao;
                }
            ?>
        </form>
    </div>
</div>
