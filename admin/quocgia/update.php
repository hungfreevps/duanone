<div class="container">
    <h3>Them The Loai Phim</h3>
    <div class="container-home">
        <form action="index.php?act=addtheloai" method="post">
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
