
<div class="">
    <h3 style="text-align:center;">THÊM QUỐC GIA</h3><br><br>
    <div class="">
        <form action="index.php?act=themquocgia" method="post">
            <label for="quocgia">TÊN QUỐC GIA</label>
            <input type="text" name="quocgia" id="quocgia">

            <input type="submit" value="Them" name="themmoi">


            <?php 
                if(isset($thongbao)&&($thongbao!= "")){
                    echo $thongbao;
                }
            ?>
        </form>
    </div>
</div>

<!-- <script>
var inputValue = document.getElementById("quocgia").value;

// Kiểm tra xem giá trị có phải là chuỗi rỗng hay không
if (inputValue.trim() === "") {
    // Trường nhập để trống, thực hiện xử lý hoặc thông báo lỗi tương ứng
    alert("Trường nhập không được để trống");
}

</script> -->