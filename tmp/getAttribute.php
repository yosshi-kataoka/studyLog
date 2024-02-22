<?php

try {
  $pdo = new PDO('mysql:host=db; dbname=book_log; charset=utf8mb4', 'book_log', 'pass');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  echo '接続に成功しました。' . PHP_EOL;
  $errorMode = [];
  switch ($pdo->getAttribute(PDO::ATTR_ERRMODE)) {
    case PDO::ERRMODE_SILENT:
      $errorMode = 'PDO::ERRMODE_SILENT';
      break;
    case PDO::ERRMODE_WARNING:
      $errorMode = 'PDO::ERRMODE_WARNING';
      break;
    case PDO::ERRMODE_EXCEPTION:
      $errorMode = 'PDO::ERRMODE_EXCEPTION';
      break;
    default:
      $errorMode = 'undefined';
  }
  echo '■現在のエラーモードは「' . $errorMode . '」です。' . PHP_EOL;
} catch (PDOException $e) {
  echo '接続に失敗しました。' . PHP_EOL;
  $e->getMessage() . PHP_EOL;
}
