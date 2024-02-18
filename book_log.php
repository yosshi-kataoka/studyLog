<?php

function createBookLog()
{
  echo '読書ログを登録してください:' . PHP_EOL;
  echo '書籍名:';
  $title =  trim(fgets(STDIN));
  echo '著者名:';
  $author =  trim(fgets(STDIN));
  echo '読書状況(未読,読んでる,読了):';
  $status =  trim(fgets(STDIN));
  echo '評価:';
  $evaluation =  trim(fgets(STDIN));
  echo '感想:';
  $review =  trim(fgets(STDIN));

  echo '登録が完了しました' . PHP_EOL . PHP_EOL;
  return [
    'title' => $title,
    'author' => $author,
    'status' => $status,
    'evaluation' => $evaluation,
    'review' => $review,
  ];
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
$link = mysqli_connect('db', 'book_log', 'pass', 'book_log');
if (!$link) {
  echo 'データベースの接続に失敗しました' . PHP_EOL;
  echo 'Debugging error:' . mysqli_connect_error() . PHP_EOL;
  exit;
}
echo 'データベースの接続に成功しました' . PHP_EOL;

while (true) {
  echo '1.読書ログの登録' . PHP_EOL;
  echo '2.読書ログの表示' . PHP_EOL;
  echo '9.アプリケーションを終了' . PHP_EOL;

  echo '番号を選択してください(1,2,9)' . PHP_EOL;
  $num = trim(fgets(STDIN));
  if ($num === '1') {
    // 読書ログを登録する
    $bookLogs[] = createBookLog();
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
