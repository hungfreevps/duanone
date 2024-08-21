<br><br><br><br><br><br>
<div class="">
    <h3 style="text-align:center;">THÊM THỂ LOẠI</h3><br><br>
    <div class="">
        <form action="index.php?act=themtheloai" method="post">
            <label for="tenloai">TÊN THỂ LOẠI</label>
            <input type="text" name="tenloai">

            <input type="submit" value="Them" name="themmoi">


            <?php 
                if(isset($thongbao)&&($thongbao!= "")){
                    echo $thongbao;
                }
            ?>
        </form>
    </div>
</div>
