<?php
// prepareメソッド、bindValueメソッド,execute()メソッドを使用して、book_logテーブルに値を追加する。

try {
  $pdo = new PDO('mysql:host=db; dbname=book_log; charset=utf8mb4', 'book_log', 'pass');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  echo '接続に成功しました。' . PHP_EOL;
  // 以下prepareメソッドを記述
  $statement = $pdo->prepare('INSERT INTO book_log(title, author, status, evaluation, review) VALUES(:title, :author, :status, :evaluation, :review)');
  //  以下bindValueメソッドを記述
  $statement->bindValue(':title', '続ける技術', PDO::PARAM_STR);
  $statement->bindValue(':author', '石田 淳', PDO::PARAM_STR);
  $statement->bindValue(':status', '読了', PDO::PARAM_STR);
  $statement->bindValue(':evaluation', '5', PDO::PARAM_INT);
  $statement->bindValue(':review', '習慣化のための技術が集約されており、とてもタメになった。よい本です。', PDO::PARAM_STR);

  // executeメソッドを記述
  $statement->execute();
  echo '登録が完了しました。' . PHP_EOL;
} catch (PDOException $e) {
  echo '接続に失敗しました。' . PHP_EOL;
  echo $e->getMessage() . PHP_EOL;
}
