<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chọn Ghế</title>
</head>
<body>

<div class="sits__row additional-margin" id="seatRow">
    <!-- Các ghế của bạn ở đây -->
                                <span class="sits__place sits-price--middle" data-place='I3' data-price='20'>I3</span>
                                <span class="sits__place sits-price--middle" data-place='I4' data-price='20'>I4</span>
                                <span class="sits__place sits-price--middle" data-place='I5' data-price='20'>I5</span>
                                <span class="sits__place sits-price--middle" data-place='I6' data-price='20'>I6</span>
                                <span class="sits__place sits-price--middle" data-place='I7' data-price='20'>I7</span>
                                <span class="sits__place sits-price--middle" data-place='I8' data-price='20'>I8</span>
                                <span class="sits__place sits-price--middle" data-place='I9' data-price='20'>I9</span>
                                <span class="sits__place sits-price--middle" data-place='I10' data-price='20'>I10</span>
                                <span class="sits__place sits-price--middle" data-place='I11' data-price='20'>I11</span>
                                <span class="sits__place sits-price--middle" data-place='I12' data-price='20'>I12</span>
                                <span class="sits__place sits-price--middle" data-place='I13' data-price='20'>I13</span>
                                <span class="sits__place sits-price--middle" data-place='I14' data-price='20'>I14</span>
                                <span class="sits__place sits-price--middle" data-place='I15' data-price='20'>I15</span>
                                <span class="sits__place sits-price--middle" data-place='I16' data-price='20'>I16</span>
</div>

<div id="inputContainer">
    <!-- Các ô input sẽ được thêm vào đây -->
    <input type="text" name="I3">
    <input type="text" name="I4">
    <input type="text" name="I5">
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function() {
        // Đặt sự kiện click cho mỗi span chứa tên ghế
        $('.sits__place').click(function() {
            var tenGhe = $(this).data('place');

            // Kiểm tra xem ghế đã được chọn chưa
            if ($(this).hasClass('selected')) {
                alert('Ghế đã chọn');
                return;
            }

            // Sử dụng Ajax để gửi yêu cầu đến máy chủ PHP
            $.ajax({
                type: 'POST',
                url: 'add_seat.php', // Đường dẫn đến tập tin PHP xử lý yêu cầu
                data: { tenGhe: tenGhe },
                success: function(data) {
                    // Thêm ô input mới vào div có id là "inputContainer"
                    $('#inputContainer').append(data);

                    // Đánh dấu ghế đã được chọn
                    $('#seatRow span[data-place="' + tenGhe + '"]').addClass('selected');
                }
            });
        });
    });
</script>

</body>
</html>
