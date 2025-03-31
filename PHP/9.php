<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Bảng Cửu Chương</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        td {
            padding: 5px;
            text-align: left;
            vertical-align: top;
        }
    </style>
</head>
<body>
    <h2>Bảng Cửu Chương</h2>
    <table border="1">
        <tr>
            <?php
                for ($i = 1; $i <= 10; $i++) {
                    echo "<td>";
                    for ($j = 1; $j <= 10; $j++) {
                        echo "$i x $j = " . ($i * $j) . "<br>";
                    }
                    echo "</td>";
                }
            ?>
        </tr>
    </table>
</body>
</html>