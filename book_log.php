<?php

function validate($review)
{
  $errors = [];
  $statusArray = ["未読", "読んでる", "読了"];
  // 書籍名のバリデーション
  if (!mb_strlen($review['title'])) {
    $errors['title'] = "書籍名を入力してください";
  } elseif (mb_strlen($review['title']) > 255) {
    $errors['title'] = "書籍名は255文字以下で入力してください";
  }
  // 著者名のバリデーション
  if (!mb_strlen($review['author'])) {
    $errors['author'] = "著者名を入力してください";
  } elseif (mb_strlen($review['author'] > 255)) {
    $errors['author'] = "著者名は255文字以下で入力してください";
  }
  // 読書状況のバリデーション
  if (!in_array($review['status'], $statusArray, true)) {
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
// データベースとの接続
function dbConnect()
{
  $link = mysqli_connect('db', 'book_log', 'pass', 'book_log');
  if (!$link) {
    echo 'データベースの接続に失敗しました' . PHP_EOL;
    echo 'Debugging error:' . mysqli_connect_error() . PHP_EOL;
    exit;
  }
  return $link;
}

// 読書ログの登録
function createBookLog($link)
{
  $review = [];
  echo '読書ログを登録してください:' . PHP_EOL;
  echo '書籍名:';
  $review['title'] = trim(fgets(STDIN));
  echo '著者名:';
  $review['author'] = trim(fgets(STDIN));
  echo '読書状況(未読,読んでる,読了):';
  $review['status'] = trim(fgets(STDIN));
  echo '評価:';
  $review['evaluation'] = trim(fgets(STDIN));
  echo '感想:';
  $review['review'] = trim(fgets(STDIN));

  //入力した内容のバリデーション処理
  $validated = validate($review);
  if (count($validated) > 0) {
    echo "エラー内容を表示します"  . PHP_EOL;
    echo "----------------" . PHP_EOL;
    foreach ($validated as $error) {
      echo $error . PHP_EOL;
    }
    return;
  }
  $sql = <<<EOT
  INSERT INTO book_log(
  title,
  author,
  status,
  evaluation,
  review
  ) VALUES(
  "{$review['title']}",
  "{$review['author']}",
  "{$review['status']}",
  "{$review['evaluation']}",
  "{$review['review']}"
  )
  EOT;
  $result = mysqli_query($link, $sql);
  if ($result) {
    echo '登録が完了しました' . PHP_EOL . PHP_EOL;
  } else {
    echo '登録に失敗しました' . PHP_EOL;
    echo 'Debugging Error:' . mysqli_error($link) . PHP_EOL;
  }
}

// 読書ログの一覧を表示
function displayBookLog($link)
{
  echo '読書ログを表示します' . PHP_EOL;
  $sql = 'SELECT title, author, status, evaluation, review FROM  book_log';
  $results = mysqli_query($link, $sql);
  while ($bookLog = mysqli_fetch_assoc($results)) {
    echo '書籍名:' . $bookLog['title'] . PHP_EOL;
    echo '著者名:' . $bookLog['author'] . PHP_EOL;
    echo '読書状況:' . $bookLog['status'] . PHP_EOL;
    echo '評価:' . $bookLog['evaluation'] . PHP_EOL;
    echo '感想:' . $bookLog['review'] . PHP_EOL;
    echo '-------------' . PHP_EOL;
  }
  mysqli_free_result($results);
}

// メインルーチン
$link = dbConnect();

while (true) {
  echo '1.読書ログの登録' . PHP_EOL;
  echo '2.読書ログの表示' . PHP_EOL;
  echo '9.アプリケーションを終了' . PHP_EOL;
  echo '番号を選択してください(1,2,9)' . PHP_EOL;
  $num = trim(fgets(STDIN));
  if ($num === '1') {
    // 読書ログの登録処理
    createBookLog($link);
  } elseif ($num === '2') {
    // 読書ログの表示処理
    displayBookLog($link);
  } elseif ($num === '9') {
    //  アプリケーションを終了する
    echo '終了します.' . PHP_EOL;
    mysqli_close($link);
    break;
  } else {
    echo '1,2,9いずれかの番号を選択してください。' . PHP_EOL;
    continue;
  }
}
