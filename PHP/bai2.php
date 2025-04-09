<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $hoten = $_POST['ten'];
    $ngaysinh= $_POST['ngay'];
    $lop= $_POST['lop'];
    $diem= $_POST['diem'];

    echo"Họ và tên: $hoten<br>";
    echo"Ngày sinh: $ngaysinh<br>";
    echo"Lớp: $lop<br>";
    echo "Điểm: $diem";
} else {
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>TRANG XỬ LÝ THÔNG TIN ĐĂNG NHẬP</title>
    </head>
    <body>
        <h1>TRANG XỬ LÝ THÔNG TIN ĐĂNG NHẬP</h1>
        <p>Không có dữ liệu được gửi.</p>
        <a href="bai2.html">Quay lại nhập</a>
    </body>
    </html>
    <?php
}
?>