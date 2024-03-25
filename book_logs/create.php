<?php

require_once __DIR__ . '/lib/pdo.php';

function validate($bookLog)
{
  $errors = [];
  // 書籍名のバリデーション
  if (!mb_strlen($bookLog['title'])) {
    $errors['title'] = '書籍名を入力してください';
  } elseif (mb_strlen($bookLog['title']) > 255) {
    $errors['title'] = '書籍名は255文字以内で入力してください';
  }
  // 著者名のバリデーション
  if (!mb_strlen($bookLog['author'])) {
    $errors['author'] = '著者名を入力してください';
  } elseif (mb_strlen($bookLog['author']) > 255) {
    $errors['author'] = '著者名は255文字以内で入力してください';
  }
  // 読書状況のバリデーション
  if (!mb_strlen($bookLog['status'])) {
    $errors['status'] = '読書状況を選択してください';
  }
  // 評価のバリデーション
  if (!is_int($bookLog['evaluation'])) {
    $errors['evaluation'] = '評価は1~5の整数を選択してください';
  } elseif ($bookLog['evaluation'] > 0 || $bookLog['evaluation'] < 6)
    // 感想のバリデーション
    if (!mb_strlen($bookLog['review'])) {
      $errors['review'] = '感想を入力してください';
    } elseif (mb_strlen($bookLog['review']) > 1000) {
      $errors['review'] = '感想は1000文字以内で入力してください';
    }
  return $errors;
}

function createBookLog($pdo, $bookLog): void
{
  $pdo->beginTransaction();
  try {
    $statement = $pdo->prepare('INSERT INTO book_log (title, author, status, evaluation, review) VALUES (:title, :author, :status, :evaluation, :review)');
    $statement->bindValue(':title', $bookLog['title'], PDO::PARAM_STR);
    $statement->bindValue(':author', $bookLog['author'], PDO::PARAM_STR);
    $statement->bindValue(':status', $bookLog['status'], PDO::PARAM_STR);
    $statement->bindValue(':evaluation', $bookLog['evaluation'], PDO::PARAM_STR);
    $statement->bindValue(':review', $bookLog['review'], PDO::PARAM_STR);
    $statement->execute();
    $pdo->commit();
  } catch (PDOException $e) {
    error_log('Error: fail to create bookLog:');
    error_log('Debugging Error:' . $e->getMessage());
    $pdo->rollback();
  }
}

// メインルーチン
// POSTされた読書ログの情報を変数に格納する
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $bookLog = [
    'title' => $_POST['title'],
    'author' => $_POST['author'],
    'status' => $_POST['status'],
    'evaluation' => $_POST['evaluation'],
    'review' => $_POST['review'],
  ];
  // バリデーション処理
  $errors = validate($bookLog);
  if (!count($errors)) {
    // データベースに接続する。dbConnect()メソッドは/lib/pdo.phpに記述
    $pdo = dbConnect();
    // データベースにデータを登録する
    createBookLog($pdo, $bookLog);
    // index.phpへリダイレクト
    header("Location: index.php");
  }
}
?>
<!-- 入力値にエラーがある場合以下の処理 -->

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
      <input type="text" id="title" name="title">
    </div>
    <div>
      <label for="author">著者名</label>
      <input type="text" id="author" name="author">
    </div>
    <div>
      <input type="radio" name="status" id="unread" value="unread" checked>
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
