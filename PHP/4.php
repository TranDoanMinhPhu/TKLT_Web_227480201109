<!DOCTYPE html>
<html>
<head>
    <title>Tính Toán Số Học</title>
</head>
<body>
    <form method="post">
        Số thứ 1: <input type="number" name="a" required><br>
        Số thứ 2: <input type="number" name="b" required><br>
        <input type="submit" name="operation" value="Cộng">
        <input type="submit" name="operation" value="Trừ">
        <input type="submit" name="operation" value="Nhân">
        <input type="submit" name="operation" value="Chia">
        <input type="submit" name="operation" value="Mod">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $operation = $_POST['operation'];
        $result = "Không hợp lệ";

        switch ($operation) {
            case "Cộng":
                $result = $a + $b;
                break;
            case "Trừ":
                $result = $a - $b;
                break;
            case "Nhân":
                $result = $a * $b;
                break;
            case "Chia":
                $result = ($b != 0) ? $a / $b : "Lỗi: chia cho 0";
                break;
            case "Mod":
                $result = ($b != 0) ? $a % $b : "Lỗi: chia cho 0";
                break;
        }

        echo "<br>Kết quả: " . $result;
    }
    ?>
</body>
</html>