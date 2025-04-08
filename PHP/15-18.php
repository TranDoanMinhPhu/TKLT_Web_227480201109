<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Bài 15-18: Xử lý chuỗi có nhập liệu</title>
</head>
<body>
  <h2>Bài 15: Đếm số lần xuất hiện của một ký tự</h2>
  <form method="post" action="">
    <label for="str15">Nhập chuỗi:</label>
    <input type="text" name="str15" id="str15" required>
    <br>
    <label for="char">Nhập ký tự cần đếm:</label>
    <input type="text" name="char" id="char" maxlength="1" required>
    <br>
    <input type="submit" name="submit15" value="Đếm ký tự">
  </form>
  <?php
  if (isset($_POST['submit15'])) {
      $str15 = $_POST['str15'];
      $char = $_POST['char'];
      $count = substr_count($str15, $char);
      echo "<p>Kết quả: Số lần xuất hiện của '$char' là $count.</p>";
  }
  ?>

  <hr>

  <h2>Bài 16: Đảo ngược chuỗi</h2>
  <form method="post" action="">
    <label for="str16">Nhập chuỗi:</label>
    <input type="text" name="str16" id="str16" required>
    <br>
    <input type="submit" name="submit16" value="Đảo chuỗi">
  </form>
  <?php
  if (isset($_POST['submit16'])) {
      $str16 = $_POST['str16'];
      $reversed = strrev($str16);
      echo "<p>Kết quả: Chuỗi đảo ngược là: $reversed</p>";
  }
  ?>

  <hr>

  <h2>Bài 17: Tách chuỗi thành các từ</h2>
  <form method="post" action="">
    <label for="str17">Nhập chuỗi:</label>
    <input type="text" name="str17" id="str17" required>
    <br>
    <input type="submit" name="submit17" value="Tách chuỗi">
  </form>
  <?php
  if (isset($_POST['submit17'])) {
      $str17 = $_POST['str17'];
      $words = explode(" ", $str17);
      echo "<p>Kết quả:</p>";
      foreach ($words as $i => $word) {
          echo "[$i] = \"$word\"<br>";
      }
  }
  ?>

  <hr>

  <h2>Bài 18: Tìm từ dài nhất trong chuỗi</h2>
  <form method="post" action="">
    <label for="str18">Nhập chuỗi:</label>
    <input type="text" name="str18" id="str18" required>
    <br>
    <input type="submit" name="submit18" value="Tìm từ dài nhất">
  </form>
  <?php
  if (isset($_POST['submit18'])) {
      $str18 = $_POST['str18'];
      $words = explode(" ", $str18);
      $longest = "";
      foreach ($words as $word) {
          if (strlen($word) > strlen($longest)) {
              $longest = $word;
          }
      }
      echo "<p>Kết quả: Từ dài nhất là: $longest</p>";
  }
  ?>
</body>
</html>