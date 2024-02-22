<?php

try {
  $pdo = new PDO('mysql:host=db; dbname=book_log; charset=utf8mb4', 'book_log', 'pass');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  echo '接続に成功しました。' . PHP_EOL;
} catch (PDOException $e) {
  echo 'データベース接続失敗: ' . $e->getMessage();
}
