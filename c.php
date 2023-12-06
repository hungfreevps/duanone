Để thực hiện chức năng xóa khi người dùng nhấp vào liên kết "Xóa", bạn cần sử dụng JavaScript hoặc gửi yêu cầu xóa đến máy chủ thông qua một trang xử lý PHP (ví dụ: delete.php). Dưới đây là một ví dụ sử dụng JavaScript và AJAX để gửi yêu cầu xóa đến máy chủ:

php
Copy code
<?php
$i = 1;
foreach($kq as $value){
    extract($value);

    echo '
        <tr>
            <td>'.$i.'</td>
            <td>'.$idphim.'</td>
            <td>'.($ghe1 + $ghe2 + $ghe3).'</td>
            <td>'.$ngaychieu.'</td>
            <td>'.$giochieu.'</td>
            <td><a href="#" onclick="deleteRow('.$idphim.','.$iduser.')">Xóa</a></td>
        </tr>';

    $i++;
}
?>
<script>
function deleteRow(idphim, iduser) {
    var confirmation = confirm("Bạn có chắc chắn muốn xóa?");
    if (confirmation) {
        // Sử dụng AJAX để gửi yêu cầu xóa đến máy chủ
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                // Xử lý phản hồi từ máy chủ (nếu cần)
                alert(xhr.responseText);
            }
        };
        xhr.open("GET", "delete.php?idphim=" + idphim + "&iduser=" + iduser, true);
        xhr.send();
    }
}
</script>
Trong đoạn mã trên:

deleteRow là một hàm JavaScript được gọi khi người dùng nhấp vào liên kết "Xóa".
confirm được sử dụng để xác nhận xóa.
AJAX được sử dụng để gửi yêu cầu xóa đến máy chủ thông qua phương thức GET.
delete.php là trang xử lý PHP để xóa dữ liệu từ cơ sở dữ liệu dựa trên tham số idphim và iduser được chuyển đi.
