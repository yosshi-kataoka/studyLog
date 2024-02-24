<?php
// データベースとの接続メソッド
function dbConnect(): PDO
{
  $pdo = new PDO('mysql:host=db; dbname=book_log; charset=utf8mb4', 'book_log', 'pass');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  echo '接続に成功しました。' . PHP_EOL;
  return $pdo;
}

//タイトル検索メソッドで検索対象となる書籍名の入力メソッド
function inputTitle(): string
{
  echo '書籍のタイトルを入力してください' . PHP_EOL;
  $inputTitle = trim(fgets(STDIN));
  if (!isset($inputTitle) || trim($inputTitle) === '') {
    echo '書籍名が入力されてません。' . PHP_EOL;
    return null;
  }
  return $inputTitle;
}

//入力した書籍名のタイトル検索メソッド
function titleSearch($statement, $inputTitle): void
{
  $statement->bindValue(':title', '%' . $inputTitle . '%', PDO::PARAM_STR);
  $statement->execute();
}

// 検索した書籍名の情報を表示するメソッド
function displaySearchResults($statement): void
{
  echo '検索結果を表示します。' . PHP_EOL;
  while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    echo $row['title'] . PHP_EOL;
    echo $row['author'] . PHP_EOL;
    echo $row['status'] . PHP_EOL;
    echo $row['evaluation'] . PHP_EOL;
    echo $row['review'] . PHP_EOL;
    echo '----------------' . PHP_EOL;
  }
}

//メインルーチン
try {
  $pdo = dbConnect();
  $inputTitle = inputTitle();
  $statement = $pdo->prepare('SELECT * FROM book_log where title LIKE :title ORDER BY evaluation DESC');
  titleSearch($statement, $inputTitle);
  displaySearchResults($statement);
} catch (PDOException $e) {
  echo ' 本の検索に失敗しました。' . PHP_EOL;
  echo 'Debugging Error:' . $e->getMessage() . PHP_EOL;
}
