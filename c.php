<?php
foreach ($listgiochieu as $gc) {
    extract($gc);
    echo ' 
        <li class="time-select__item" data-time="' . $giochieu . '" onclick="showContent(' . $id . ')">' . $giochieu . '</li>';
}
?>

<style>
    .hidden {
        display: none;
    }
</style>

<script>
    function showContent(id) {
        // Ẩn tất cả các nội dung trước khi hiển thị nội dung mới
        var allContents = document.querySelectorAll('.hidden');
        allContents.forEach(function (content) {
            content.style.display = 'none';
        });

        // Hiển thị nội dung tương ứng với thẻ li được click
        var selectedContent = document.getElementById(id);
        selectedContent.style.display = 'block';

        // Lấy giá trị thời gian từ thuộc tính data-time
        var selectedTime = selectedContent.getAttribute('data-time');

        // Cập nhật giá trị của ô input với giờ đã chọn
        document.querySelector('.choosen-time').value = selectedTime;
    }
</script>

<form action="">
    <input type='text' name='choosen-time' class="choosen-time">
    <button name="submit" type="submit" value="Gửi">Xác nhận</button>
</form>
