
<div class="">
    <h3 style="text-align:center;">GIỜ CHIẾU</h3><br><br>
    <div class="container-home">
        <form action="index.php?act=themgiochieu" method="post">
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
