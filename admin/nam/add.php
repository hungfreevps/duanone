<br><br><br><br><br><br>
<div class="">
    <h3 style="text-align:center;">NĂM PHÁT HÀNH</h3><br><br>
    <div class="container-home">
        <form action="index.php?act=themnam" method="post">
            <label for="nam">CHỌN NĂM</label>
            <input type="text" name="nam" maxlength="4">

            <input type="submit" value="Them" name="themmoi">


            <?php 
                if(isset($thongbao)&&($thongbao!= "")){
                    echo $thongbao;
                }
            ?>
        </form>
    </div>
</div>
