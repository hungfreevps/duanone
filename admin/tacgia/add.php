<br><br><br><br><br><br>
<div class="">
    <h3 style="text-align:center;">THÊM TÁC GIẢ</h3><br><br>
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
