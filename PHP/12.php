<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Bàn Cờ Vua</title>
    <style>
        table {
            border-collapse: collapse;
        }
        td {
            width: 50px;
            height: 50px;
        }
        .black {
            background-color: black;
        }
        .white {
            background-color: white;
        }
    </style>
</head>
<body>
    <h2>Bàn Cờ Vua</h2>
    <table border="1">
        <?php
            for ($row = 0; $row < 8; $row++) {
                echo "<tr>";
                for ($col = 0; $col < 8; $col++) {
                    $color = ($row + $col) % 2 == 0 ? "white" : "black";
                    echo "<td class='$color'></td>";
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>