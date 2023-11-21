<br><br><br><br><br><br>
<div class="container">
    <h3>GIỜ CHIẾU</h3>
    <div class="container-home">
        <form action="index.php?act=themgio" method="post">
            <label for="gio">CHỌN GIỜ</label>
            <input type="time" name="gio" >

            <input type="submit" value="Them" name="themmoi">


            <?php 
                if(isset($thongbao)&&($thongbao!= "")){
                    echo $thongbao;
                }
            ?>
        </form>
    </div>
</div>
