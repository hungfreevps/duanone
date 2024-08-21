<br><br><br><br><br><br>
<div class="">
    <h3 style="text-align:center;">THÊM NGÀY CHIẾU</h3><br><br>
    <div class="container-home">
        <form action="index.php?act=themngaychieu" method="post">
            <label for="ngaychieu">CHỌN NGÀY</label>
            <input type="date" name="ngaychieu" >

            <input type="submit" value="Them" name="themmoi">


            <?php 
                if(isset($thongbao)&&($thongbao!= "")){
                    echo $thongbao;
                }
            ?>
        </form>
    </div>
</div>
