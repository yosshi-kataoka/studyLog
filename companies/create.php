<?php

require_once __DIR__ . '/lib/pdo.php';

function createCompany($pdo, $company): void
{
  $pdo->beginTransaction();
  try {
    $statement = $pdo->prepare('INSERT INTO companies (name, establishment_date, founder) VALUES (:name, :establishment_date, :founder)');
    $statement->bindValue(':name', $company['name'], PDO::PARAM_STR);
    $statement->bindValue(':establishment_date', $company['establishment_date'], PDO::PARAM_STR);
    $statement->bindValue(':founder', $company['name'], PDO::PARAM_STR);
    $statement->execute();
    $pdo->commit();
  } catch (Exception $e) {
    echo 'Debugging Error:' . $e->getMessage();
    $pdo->rollback();
  }
}

// メインルーチン
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // POSTされた会社情報を変数に格納する
  $company = [
    'name' => $_POST['name'],
    'establishment_date' => $_POST['establishment_date'],
    'founder' => $_POST['founder'],
  ];
  // バリデーションする ＊後で要実装

  // データベースに接続する
  $pdo = dbConnect();
  // データベースにデータを登録する
  createCompany($pdo, $company);
}
