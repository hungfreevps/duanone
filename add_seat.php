<?php
// add_seat.php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Lấy tên ghế từ dữ liệu POST
    $tenGhe = $_POST['tenGhe'];

    // Kiểm tra nếu tên ghế không rỗng
    if (!empty($tenGhe)) {
        // Tạo một input field với tên là tên ghế
        echo '<input type="text" name="' . $tenGhe . '" value="' . $tenGhe . '" class="hidden-input" readonly>';
    } else {
        // Trả về thông báo lỗi nếu tên ghế không hợp lệ
        echo 'Error: Invalid seat name';
    }
} else {
    // Trả về thông báo lỗi nếu không phải là yêu cầu POST
    echo 'Error: Invalid request method';
}
?>




