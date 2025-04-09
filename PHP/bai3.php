<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['default'])) {
        $x=3; $y=5;
        echo "Bạn đã chọn tính toán với số cho trước.<br>";
        echo "Tổng 2 số x và y là ". $x+$y."<br>";
        echo "Hiệu 2 số x và y là ". $x-$y."<br>";
        echo "Tích 2 số x và y là ". $x*$y."<br>";
        echo "Thương 2 số x và y là ". $x/$y."<br>";
        echo "Mod 2 số x và y là ". $x%$y."<br>";
    } elseif (isset($_POST['rand'])) {
        // Xử lý khi người dùng nhấn nút "Tinh toan voi 2 so ngau nhien"
        $x = rand(1, 100);
        $y = rand(1, 100);
        echo "Hai số ngẫu nhiên: $x và $y.<br>";
        echo "Tổng 2 số x và y là ". $x+$y."<br>";
        echo "Hiệu 2 số x và y là ". $x-$y."<br>";
        echo "Tích 2 số x và y là ". $x*$y."<br>";
        echo "Thương 2 số x và y là ". $x/$y."<br>";
        echo "Mod 2 số x và y là ". $x%$y."<br>";
    } elseif (isset($_POST['randlonhon'])) {
        // Xử lý khi người dùng nhấn nút "Tinh toan voi x lon hon y"
        $x = rand(1, 100);
        $y = rand(1, 100);
        while($x<=$y){
            $x = rand(1, 100);
            $y = rand(1, 100);
        }
        echo "Hai số ngẫu nhiên: $x và $y.<br>";
        echo "Tổng 2 số x và y là ". $x+$y."<br>";
        echo "Hiệu 2 số x và y là ". $x-$y."<br>";
        echo "Tích 2 số x và y là ". $x*$y."<br>";
        echo "Thương 2 số x và y là ". $x/$y."<br>";
        echo "Mod 2 số x và y là ". $x%$y."<br>";
    }
} else {
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>TRANG XỬ LÝ THÔNG</title>
    </head>
    <body>
        <h1>TRANG XỬ LÝ THÔNG TIN</h1>
        <p>Không có dữ liệu được gửi.</p>
        <a href="bai3.html">Quay lại nhập</a>
    </body>
    </html>
    <?php
}
?>