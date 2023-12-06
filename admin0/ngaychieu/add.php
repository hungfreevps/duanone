<br><br><br><br><br><br>
<div class="container">
    <h3>THÊM NGÀY CHIẾU</h3>
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
