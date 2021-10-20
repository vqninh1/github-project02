<?php
// Kết nối Database
    $conn = mysqli_connect('localhost', 'root', '', 'danhbadhtl');
    if (!$conn) {
        die("Kết nối thất bại  .Kiểm tra lại các tham số    khai báo kết nối");
    }
?>