<?php

require_once __DIR__ . '/lib/escape.php';
require_once __DIR__ . '/lib/pdo.php';

// 会社情報を取得するメソッド
function listCompanies($pdo): array
{
  $results = [];
  $statement = $pdo->prepare('SELECT name, establishment_date, founder FROM companies');
  $statement->execute();
  // assoc処理を記述していく
  while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    $results[] = $row;
  }
  return $results;
}

// メインルーチン
$pdo = dbConnect();
$companies = listCompanies($pdo);
$title = '会社情報の一覧';
$content = __DIR__ . '/views/index.php';
include __DIR__ . '/views/layout.php';
