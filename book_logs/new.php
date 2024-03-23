<?php
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset=utf-8>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>読書ログの登録</title>
</head>

<body>
  <h1>読書ログ</h1>
  <h2>読書ログの登録</h2>
  <form action="create.php" method="POST">
    <div>
      <label for="title">書籍名</label>
      <input type="text" id="title" name="title">
    </div>
    <div>
      <label for="author">著者名</label>
      <input type="text" id="author" name="author">
    </div>
    <div>
      <input type="radio" name="status" id="unread" value="unread">
      <label for="unread">未読</label>
    </div>
    <div>
      <input type="radio" name="status" id="reading" value="reading">
      <label for="reading">読んでいる</label>
    </div>
    <div>
      <input type="radio" name="status" id="finish_reading" value="finish_reading">
      <label for="finish_reading">読了</label>
    </div>
    <div>
      <label for="evaluation">評価（5点）満点の整数</label>
      <input type="number" id="evaluation" name="evaluation" min="1" max="5" step="1">
    </div>
    <div>
      <label for="review">感想</label>
      <textarea id="review" name="review" rows="10"></textarea>
    </div>
    <button type="submit">登録する</button>
  </form>
</body>

</html>
