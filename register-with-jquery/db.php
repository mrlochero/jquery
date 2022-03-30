<?php
$con = mysqli_connect("localhost", "root", "", "ajax_jquery");

//check connection
if (mysqli_connect_errno()) {
    echo "kết nối thất bại";
} else {
    echo "kết nối thành công";
}