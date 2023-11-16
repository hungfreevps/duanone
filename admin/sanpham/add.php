<br><br><br><br><br><br>
<div class="container">
    <div class="container-home">
        <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
            <div class="inputdata">
                <label for="tenphim">Ten Phim</label>
                <input type="text" name="tenphim" id="">
            </div>
            <div class="inputdata">
                <label for="hinh">hinh</label>
                <input type="file" name="hinh" id="">
            </div>
            <div class="inputdata">
                <label for="ngaychieu">ngaychieu</label>
                <input type="date" name="ngaychieu" id="">
            </div>
            <div class="inputdata">
                <label for="giochieu">giochieu</label>
                <input type="text" name="giochieu" id="">
            </div>
            <!-- <div class="inputdata">
                <label for="theloai">theloai</label>
                <select name="idtl" id="">
                    <?php
                    foreach ($listtheloai as $theloai){
                    extract($theloai);
                    echo "
                    <option value='".$idtl."'>".$name."</option>
                    ";
                
                }
                    ?>
                </select>
            </div> -->
            <div class="inputdata">
                <label for="namphim">namphathanh</label>
                <input type="text" name="namphim" id="">
            </div>
            <div class="inputdata">
                <label for="sao">sao</label>
                <input type="text" name="sao" id="">
            </div>
            <div class="inputdata">
                <label for="tacgia">tacgia</label>
                <input type="text" name="tacgia" id="">
            </div>
            <div class="inputdata">
                <label for="mota">mota</label>
                <input type="text" name="mota" id="">
            </div>
            <div class="inputdata">
                <label for="quocgia">quocgia</label>
                <input type="text" name="quocgia" id="">
            </div>

            <input type="submit" value="submit" name="themmoi">
        </form>
        <?php 
                if(isset($thongbao)&&($thongbao!= "")){
                    echo $thongbao;
                }
            ?>
    </div>
</div>


