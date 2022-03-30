<?php

// chèn dữ liệu
$con = mysqli_connect("localhost", "root", "", "ajax_jquery");
if (isset($_POST['hoten'])) {
    $hoten = $_POST['hoten'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $ghichu = $_POST['ghichu'];
    $result = mysqli_query($con, "INSERT INTO thongtin(hoten,phone,email,ghichu) VALUES('$hoten','$phone','$email','$ghichu')");
}

// lấy data
$output = '';
$sql_select = mysqli_query($con, 'SELECT * FROM thongtin ORDER BY id DESC');

if (mysqli_num_rows($sql_select) > 0) {

    while ($row = mysqli_fetch_array($sql_select)) {

        echo 'id: ' . $row['id'] . ' họ tên: ' . $row['hoten'] . 'phone: ' . $row['phone'] . 'ghi chú: ' . $row['ghichu'];
        echo '<br>';
    }

}

