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

// メインルーチン
try {
  $pdo = dbConnect();
} catch (PDOException $e) {
  echo '接続に失敗しました。' . PHP_EOL;
  return null;
}
// トランザクションを開始
$pdo->beginTransaction();

try {
  // テスト1。テーブルへの追加。このSQLは成功します。
  echo 'テスト1の登録をします。' . PHP_EOL;
  $pdo->exec("INSERT INTO book_log(title, author, status, evaluation, review) VALUES('sampleTitle', 'sampleAuthor', '読んでる', 3, '良い本です')");
  echo 'テスト1の登録に成功しました。' . PHP_EOL;
  // テスト2。テーブルへの追加。このSQLは失敗します。
  // echo 'テスト2の登録をします。' . PHP_EOL;
  // $pdo->exec("*** INVALID SQL ! ***");
  // echo 'テスト2の登録に成功しました。' . PHP_EOL;
  // テスト3。テーブルへの追加。このSQLは成功しますが、テスト2が失敗するためこの処理までたどり着かず、実行されません。
  echo 'テスト3の登録をします。' . PHP_EOL;
  $pdo->exec("INSERT INTO book_log(title, author, status, evaluation, review) VALUES('sampleTitle2', 'sampleAuthor2', '読んでる', 3, '良い本です')");
  echo 'テスト3の登録に成功しました。' . PHP_EOL;
  $pdo->commit();
  echo '全てのデータベースへの登録処理が正しく完了しました。' . PHP_EOL;
} catch (Exception $e) {
  // 例外が発生した場合、ロールバックされ、INSERT処理がなかったことになります。
  $pdo->rollback();
  echo '例外が発生したため、データベース処理をロールバックしました。' . PHP_EOL;
}
