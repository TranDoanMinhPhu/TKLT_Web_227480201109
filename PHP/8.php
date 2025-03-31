<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Listbox Năm</title>
</head>
<body>
    <form method="post">
        <label for="year">Chọn năm:</label>
        <select name="year" id="year">
            <?php
                $currentYear = date("Y"); // Lấy năm hiện tại
                for ($year = 1900; $year <= $currentYear; $year++) {
                    echo "<option value='$year'>$year</option>";
                }
            ?>
        </select>
        <input type="submit" value="Chọn">
    </form>
</body>
</html>