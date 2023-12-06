<br><br><br><br><br><br>
<div class="container">
    <h3>THÊM TÁC GIẢ</h3>
    <div class="container-home">
        <form action="index.php?act=themtacgia" method="post">
            <label for="tacgia">TÊN TÁC GIẢ</label>
            <input type="text" name="tacgia" >

            <input type="submit" value="Them" name="themmoi">


            <?php 
                if(isset($thongbao)&&($thongbao!= "")){
                    echo $thongbao;
                }
            ?>
        </form>
    </div>
</div>
