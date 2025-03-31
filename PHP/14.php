<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Xử lý Ma Trận</title>
</head>
<body>
    <h2>Xử lý Ma Trận</h2>
    <?php
        // Khởi tạo ma trận ví dụ
        $matrix = [
            [1.1, 2.3, 3.1, 4.0, 5.0],
            [6.2, 7.7, 8.8, 9.5, 1.2],
            [4.6, 1.9, 3.6, 8.9, 1.5],
            [1.6, 1.7, 1.8, 1.9, 2.0]
        ];

        function findMax($matrix) {
            $max = PHP_FLOAT_MIN;
            foreach ($matrix as $row) {
                foreach ($row as $value) {
                    if ($value > $max) {
                        $max = $value;
                    }
                }
            }
            return $max;
        }

        function findMin($matrix) {
            $min = PHP_FLOAT_MAX;
            foreach ($matrix as $row) {
                foreach ($row as $value) {
                    if ($value < $min) {
                        $min = $value;
                    }
                }
            }
            return $min;
        }

        function sumMatrix($matrix) {
            $sum = 0;
            foreach ($matrix as $row) {
                foreach ($row as $value) {
                    $sum += $value;
                }
            }
            return $sum;
        }

        function displayMatrix($matrix) {
            echo "<table border='1' cellpadding='5' cellspacing='0'>";
            foreach ($matrix as $row) {
                echo "<tr>";
                foreach ($row as $value) {
                    echo "<td>" . number_format($value, 1) . "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }

        // Hiển thị ma trận
        echo "<h3>Ma Trận</h3>";
        displayMatrix($matrix);

        // Thực hiện các yêu cầu
        echo "<p><strong>Số lớn nhất:</strong> " . findMax($matrix) . "</p>";
        echo "<p><strong>Số nhỏ nhất:</strong> " . findMin($matrix) . "</p>";
        echo "<p><strong>Tổng các số:</strong> " . sumMatrix($matrix) . "</p>";
    ?>
</body>
</html>