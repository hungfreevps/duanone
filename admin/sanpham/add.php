<div class="right">
<style>
    .container-home {
    width: 70%;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
}

.inputdata {
    margin-bottom: 4px;
}

label {
    display: block;
    margin-bottom: 3px;
    font-weight: bold;
}

input[type="text"],
select,
input[type="file"] {
    width: 100%;
    padding: 2px;
    box-sizing: border-box;
    margin-top: 4px;
    margin-bottom: 4px;
}

input[type="submit"] {
    background-color: #4caf50;
    color: #fff;
    padding: 10px 15px;
    border: none;
    cursor: pointer;
    font-size: 16px;
    border-radius: 5px;
}

input[type="submit"]:hover {
    background-color: #45a049;
    border-radius: 5px;
}



    </style>

<div class="container">
    <div class="container-home">
        <form action="index.php?act=themsp" method="post" enctype="multipart/form-data">
            <div class="inputdata">
                <label for="tenphim">Tên phim</label>
                <input type="text" name="tenphim" id="">
            </div>
            <div class="inputdata">
                <label for="hinh">Hình ảnh</label>
                <input type="file" name="hinh" id="">
            </div>
            <div class="inputdata">
                <label for="thoiluong">Thời lượng</label>
                <input type="text" name="thoiluong" id="">
            </div>
            <div class="inputdata">
                <label for="sao">Sao</label>
                <input type="text" name="sao" id="">
            </div>
            <div class="inputdata">
                <label for="mota">Mô tả</label>
                <input type="text" name="mota" id="">
            </div>
            <div class="inputdata">
                <label for="">Thể loại</label>
                <select name="idtl" id="">
                <?php
                foreach ($listtheloai as $theloai){
                    extract($theloai);
                    echo "
                    <option value=".$id.">".$theloai."</option>";}
                ?>
                </select>
            </div>
            <div class="inputdata">
                <label for="">Ngày chiếu</label>
                <select name="idnc" id="">
                <?php
                foreach ($listngaychieu as $ngaychieu){
                    extract($ngaychieu);
                    echo "
                    <option value=".$id.">".$ngaychieu."</option>";}
                ?>
                </select>
            </div>
            <div class="inputdata">
                <label for="">Giờ chiếu</label>
                <select name="idgc" id="">
                <?php
                foreach ($listgiochieu as $giochieu){
                    extract($giochieu);
                    echo "
                    <option value=".$id.">".$giochieu."</option>";}
                ?>
                </select>
            </div>

            <div class="inputdata">
                <label for="">Năm phát hành</label>
                <select name="idnph" id="">
                <?php
                foreach ($listnamphathanh as $namphim){
                    extract($namphim);
                    echo "
                    <option value=".$id.">".$nam."</option>";}
                ?>
                </select>
            </div>

            <div class="inputdata">
                <label for="">Tác giả</label>
                <select name="idtg" id="">
                <?php
                foreach ($listtacgia as $tacgia){
                    extract($tacgia);
                    echo "
                    <option value=".$id.">".$tacgia."</option>";}
                ?>
                </select>
            </div>

            <div class="inputdata">
                <label for="">Quốc gia</label>
                <select name="idqg" id="">
                <?php
                foreach ($listquocgia as $quocgia){
                    extract($quocgia);
                    echo "
                    <option value=".$id.">".$quocgia."</option>";}
                ?>
                </select>
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
    </div>
    <script src="https://kit.fontawesome.com/b8d3f92d8d.js" crossorigin="anonymous"></script>
</body>
</html>



