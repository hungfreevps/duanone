<br><br><br><br><br><br>
<div class="container">
    <h3>THÊM THỂ LOẠI</h3>
    <div class="container-home">
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
