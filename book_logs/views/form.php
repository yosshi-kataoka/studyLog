<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset=utf-8>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>読書ログの登録</title>
  <link rel="stylesheet" href="stylesheets/css/app.css">
</head>

<body>
  <h1>読書ログ</h1>
  <h2>読書ログの登録</h2>
  <!-- エラー内容をforeachにて表示させる -->
  <?php if (count($errors) > 0) : ?>
    <?php foreach ($errors as $error) : ?>
      <ul>
        <li>
          <?php echo $error; ?>
        </li>
      </ul>
    <?php endforeach; ?>
  <?php endif; ?>
  <form action="create.php" method="POST">
    <div>
      <label for="title">書籍名</label>
      <input type="text" id="title" name="title" value="<?php echo $bookLog['title']; ?>">
    </div>
    <div>
      <label for="author">著者名</label>
      <input type="text" id="author" name="author" value="<?php echo $bookLog['author']; ?>">
    </div>
    <div>
      <input type="radio" name="status" id="unread" value="unread" <?php echo ($bookLog['status'] === 'unread') ? 'checked' : "" ?>>
      <label for="unread">未読</label>
    </div>
    <div>
      <input type="radio" name="status" id="reading" value="reading" <?php echo ($bookLog['status'] === 'reading') ? 'checked' : "" ?>>
      <label for="reading">読んでいる</label>
    </div>
    <div>
      <input type="radio" name="status" id="finish_reading" value="finish_reading" <?php echo ($bookLog['status'] === 'finish_reading') ? 'checked' : "" ?>>
      <label for="finish_reading">読了</label>
    </div>
    <div>
      <label for="evaluation">評価（5点）満点の整数</label>
      <input type="number" id="evaluation" name="evaluation" min="1" max="5" step="1" value="<?php echo $bookLog['evaluation']; ?>">
    </div>
    <div>
      <label for="review">感想</label>
      <textarea id="review" name="review" rows="10"><?php echo $bookLog['review']; ?></textarea>
    </div>
    <button type=" submit">登録する</button>
  </form>
</body>

</html>
