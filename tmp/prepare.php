<?php
// データベースとの接続メソッド
function dbConnect(): PDO
{
  $pdo = new PDO('mysql:host=db; dbname=book_log; charset=utf8mb4', 'book_log', 'pass');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  echo 'データベースの接続に成功しました。' . PHP_EOL;
  return $pdo;
}

//　書籍の各項目を入力するメソッド
function createReview($statement): void
{
  $review = [];
  echo '書籍の情報を入力してください。' . PHP_EOL;
  echo '書籍名:';
  $review['title'] = trim(fgets(STDIN));
  echo '著者名:';
  $review['author'] = trim(fgets(STDIN));
  echo '読書状況「未読」,「読んでる」,「読了」より選択:' . PHP_EOL;
  $review['status'] = trim(fgets(STDIN));
  echo '1以上5以下の整数を入力:';
  $review['evaluation'] = trim(fgets(STDIN));
  echo '書籍の感想を入力:';
  $review['review'] = trim(fgets(STDIN));
  // 入力した各項目をvalidateする
  $validated = validate($review);
  if (count($validated) > 0) {
    echo 'エラー内容を表示します。' . PHP_EOL;
    echo '-----------------' . PHP_EOL;
    foreach ($validated as $error) {
      echo $error . PHP_EOL;
    }
    return;
  }
  $statement->bindValue(':title', $review['title'], PDO::PARAM_STR);
  $statement->bindValue(':author', $review['author'], PDO::PARAM_STR);
  $statement->bindValue(':status', $review['status'], PDO::PARAM_STR);
  $statement->bindValue(':evaluation', $review['evaluation'], PDO::PARAM_INT);
  $statement->bindValue(':review', $review['review'], PDO::PARAM_STR);
  $statement->execute();
  echo '登録が完了しました。' . PHP_EOL;
}

// バリデーション処理
function validate($review): array
{
  $errors = [];
  // 書籍名のvalidation
  if (!mb_strlen($review['title'])) {
    $errors['title'] = '書籍名を入力してください。' . PHP_EOL;
  } elseif (mb_strlen($review['title']) > 255) {
    $errors['title'] = '書籍名は255文字以内に入力してください。' . PHP_EOL;
  }
  // 著者名のバリデーション
  if (!mb_strlen($review['author'])) {
    $errors['author'] = "著者名を入力してください";
  } elseif (mb_strlen($review['author'] > 255)) {
    $errors['author'] = "著者名は255文字以下で入力してください";
  }
  // 読書状況のバリデーション
  if (!in_array($review['status'], ["未読", "読んでる", "読了"], true)) {
    $errors['status'] = "読書状況は、「未読」、「読んでる」,「読了」,のいずれかを入力してください";
  }
  // 評価のバリデーション
  if ((int)$review['evaluation'] < 1 || (int)$review['evaluation'] > 5) {
    $errors['evaluation'] = "評価を1以上5以下の整数にて入力してください";
  } elseif (!filter_var($review['evaluation'], FILTER_VALIDATE_INT)) {
    $errors['evaluation'] = "小数点が入力されてます。評価を1以上5以下の整数にて入力してください";
  }
  // 感想のバリデーション
  if (!mb_strlen($review['review'])) {
    $errors['review'] = "感想を入力してください";
  } elseif (mb_strlen($review['review']) > 2000) {
    $errors['review'] = "感想は2000文字以内で入力してください";
  }
  return $errors;
}

// メインルーチン
try {
  $pdo = dbConnect();
  // 以下prepareメソッドを記述
  $statement = $pdo->prepare('INSERT INTO book_log(title, author, status, evaluation, review) VALUES(:title, :author, :status, :evaluation, :review)');
  //　各項目を登録
  createReview($statement);
} catch (PDOException $e) {
  echo '登録に失敗しました。' . PHP_EOL;
  echo 'Debugging Error:' . $e->getMessage() . PHP_EOL;
}
