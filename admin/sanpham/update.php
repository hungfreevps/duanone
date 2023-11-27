<br><br><br><br><br><br>
<?php
if(is_array($sanpham)){
    extract($sanpham);
}
$duongdan = "../upload/".$img;
echo $duongdan;
if(is_file($duongdan)){
    $duongdan = "<img src =".$duongdan." width = '100px'>";
} else{
    $duongdan ="Mat hinh";
}

?>
<div class="container">
    <div class="container-home">
        <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
            <div class="inputdata">
                <label for="tenphim">Tên phim</label>
                <input type="text" name="tenphim" value="<?=$tenphim ?>">
            </div>
            <div class="inputdata">
                <label for="hinh">Hình ảnh</label>
                <input type="file" name="hinh" id=""> 
                <?php echo $duongdan; ?> 
            </div>
            <div class="inputdata">
                <label for="thoiluong">Thời lượng</label>
                <input type="text" name="thoiluong" id="" value="<?=$thoiluong ?>">
            </div>
            <div class="inputdata">
                <label for="sao">Sao</label>
                <input type="text" name="sao" id="" value="<?=$sao ?>">
            </div>
            <div class="inputdata">
                <label for="mota">Mô tả</label>
                <input type="text" name="mota" id="" value="<?=$mota ?>">
            </div>
            <div class="inputdata">
                <label for="">Thể loại</label>
                <select name="idtl" id="">
                <?php
                foreach ($listtheloai as $key=>$value){
                    if($id==$value['id']){
                        echo "<option value=".$value['id']." selected>".$value['theloai']."</option>";
                    } else {
                        echo "<option value=".$value['id'].">".$value['theloai']."</option>";
                    }
                }
                ?>
                </select>
            </div>
            <div class="inputdata">
                <label for="">Ngày chiếu</label>
                <select name="idnc" id="">
                <?php
                foreach ($listngaychieu as $key=>$value){
                    if($id==$value['id']){
                        echo "<option value=".$value['id']." selected>".$value['ngaychieu']."</option>";
                    } else {
                        echo "<option value=".$value['id'].">".$value['ngaychieu']."</option>";
                    }}
                ?>
                </select>
            </div>
            <div class="inputdata">
                <label for="">Giờ chiếu</label>
                <select name="idgc" id="">
                <?php
                foreach ($listgiochieu as $$key=>$value){
                    if($id==$value['id']){
                        echo "<option value=".$value['id']." selected>".$value['giochieu']."</option>";
                    } else {
                        echo "<option value=".$value['id'].">".$value['giochieu']."</option>";
                    }}
                ?>
                </select>
            </div>

            <div class="inputdata">
                <label for="">Năm phát hành</label>
                <select name="idnph" id="">
                <?php
                foreach ($listnamphathanh as $key=>$value){
                    if($id==$value['id']){
                        echo "<option value=".$value['id']." selected>".$value['nam']."</option>";
                    } else {
                        echo "<option value=".$value['id'].">".$value['nam']."</option>";
                    }}
                ?>
                </select>
            </div>

            <div class="inputdata">
                <label for="">Tác giả</label>
                <select name="idtg" id="">
                <?php
                foreach ($listtacgia as $key=>$value){
                    if($id==$value['id']){
                        echo "<option value=".$value['id']." selected>".$value['tacgia']."</option>";
                    } else {
                        echo "<option value=".$value['id'].">".$value['tacgia']."</option>";
                    }}
                ?>
                </select>
            </div>

            <div class="inputdata">
                <label for="">Quốc gia</label>
                <select name="idqg" id="">
                <?php
                foreach ($listquocgia as $key=>$value){
                    if($id==$value['id']){
                        echo "<option value=".$value['id']." selected>".$value['quocgia']."</option>";
                    } else {
                        echo "<option value=".$value['id'].">".$value['quocgia']."</option>";
                    }}
                ?>
                </select>
            </div>

        <input type="hidden" name="idphim" value="<?=$idphim ?>">
        <input type="submit" value="CẬP NHẬT" name="capnhat">
        </form>
        <?php 
                if(isset($thongbao)&&($thongbao!= "")){
                    echo $thongbao;
                }
            ?>
    </div>
</div>


