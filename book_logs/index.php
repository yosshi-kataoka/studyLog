<?php
require_once __DIR__ . '/lib/escape.php';
require_once __DIR__ . '/lib/pdo.php';

// データベースに登録されている読書ログの一覧を取得するメソッド
function listBookLogs($pdo): array
{
  $results = [];
  $statement = $pdo->prepare('SELECT title, author, status, evaluation, review FROM book_log');
  $statement->execute();
  while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    $results[] = $row;
  }
  return $results;
}

// メインルーチン
$pdo = dbConnect();
$bookLogs = listBookLogs($pdo);
$title = '読書ログ一覧';
$content = __DIR__ . "/views/index.php";
include __DIR__ . '/views/layout.php';
