<?php

function validate($review)
{
  $errors = [];
  // 書籍名のバリデーション
  if (!mb_strlen($review['title'])) {
    $errors['title'] = "書籍名を入力してください" . PHP_EOL;
  } elseif (mb_strlen($review['title']) > 255) {
    $errors['title'] = "書籍名は255文字以下で入力してください" . PHP_EOL;
  }
  // 評価のバリデーション
  if (!mb_strlen($review['evaluation'])) {
    $errors['evaluation'] = "評価が空白です。評価を1以上5以下の整数にて入力してください" . PHP_EOL;
  } elseif (
    (int)$review['evaluation'] < 1 || (int)$review['evaluation'] > 5
  ) {
    $errors['evaluation'] = "評価を1以上5以下の整数にて入力してください" . PHP_EOL;
  } elseif (!filter_var($review['evaluation'], FILTER_VALIDATE_INT)) {
    $errors['evaluation'] = "小数点が入力されてます。評価を1以上5以下の整数にて入力してください" . PHP_EOL;
  }
  return $errors;
}

function dbConnect()
{
  $link = mysqli_connect('db', 'book_log', 'pass', 'book_log');
  if (!$link) {
    echo 'データベースの接続に失敗しました' . PHP_EOL;
    echo 'Debugging error:' . mysqli_connect_error() . PHP_EOL;
    exit;
  }
  echo 'データベースの接続に成功しました' . PHP_EOL;
  return $link;
}

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

function displayBookLog($bookLogs)
{
  echo '読書ログを表示します' . PHP_EOL;
  foreach ($bookLogs as $bookLog) {
    echo '書籍名:' . $bookLog['title'] . PHP_EOL;
    echo '著者名:' . $bookLog['author'] . PHP_EOL;
    echo '読書状況:' . $bookLog['status'] . PHP_EOL;
    echo '評価:' . $bookLog['evaluation'] . PHP_EOL;
    echo '感想:' . $bookLog['review'] . PHP_EOL;
    echo '-------------' . PHP_EOL;
  }
}

$bookLogs = [];
$link = dbConnect();

while (true) {
  echo '1.読書ログの登録' . PHP_EOL;
  echo '2.読書ログの表示' . PHP_EOL;
  echo '9.アプリケーションを終了' . PHP_EOL;

  echo '番号を選択してください(1,2,9)' . PHP_EOL;
  $num = trim(fgets(STDIN));
  if ($num === '1') {
    // 読書ログを登録する
    createBookLog($link);
  } elseif ($num === '2') {
    displayBookLog($bookLogs);
    // 読書ログを表示する

    // echo '書籍名:' . $title . PHP_EOL;
    // echo '著者名:' . $author . PHP_EOL;
    // echo '読書状況:' . $status . PHP_EOL;
    // echo '評価:' . $evaluation . PHP_EOL;
    // echo '感想:' . $review . PHP_EOL;
  } elseif ($num === '9') {
    //  アプリケーションを終了する
    mysqli_close($link);
    echo 'データベースとの接続を解除しました' . PHP_EOL;
    break;
  }
}


// echo '書籍名:銀河鉄道の夜' . PHP_EOL;
// echo '著者名:宮沢賢治' . PHP_EOL;
// echo '読書状況:読了' . PHP_EOL;
// echo '評価:5' . PHP_EOL;
// echo '感想:ほんとうの幸せとは何だろうかと考えさせられる作品だった' . PHP_EOL;
