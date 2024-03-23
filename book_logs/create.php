<?php

require_once __DIR__ . '/lib/pdo.php';

function createBookLog($pdo, $bookLog): void
{
  $pdo->beginTransaction();
  try {
    $statement = $pdo->prepare('INSERT INTO book_log (title, author, status, evaluation, review) VALUES (:title, :author, :status, :evaluation, :review)');
    $statement->bindValue(':title', $bookLog['title'], PDO::PARAM_STR);
    $statement->bindValue(':author', $bookLog['author'], PDO::PARAM_STR);
    $statement->bindValue(':status', $bookLog['status'], PDO::PARAM_STR);
    $statement->bindValue(':evaluation', $bookLog['evaluation'], PDO::PARAM_STR);
    $statement->bindValue(':review', $bookLog['review'], PDO::PARAM_STR);
    $statement->execute();
    $pdo->commit();
  } catch (PDOException $e) {
    error_log('Error: fail to create bookLog:');
    error_log('Debugging Error:' . $e->getMessage());
    $pdo->rollback();
  }
}

// メインルーチン
// POSTされた読書ログの情報を変数に格納する
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $bookLog = [
    'title' => $_POST['title'],
    'author' => $_POST['author'],
    'status' => $_POST['status'],
    'evaluation' => $_POST['evaluation'],
    'review' => $_POST['review'],
  ];
  // バリデーションする ＊後で要実装

  // データベースに接続する。dbConnect()メソッドは/lib/pdo.phpに記述
  $pdo = dbConnect();
  // データベースにデータを登録する
  createBookLog($pdo, $bookLog);
}
// index.phpへリダイレクト
header("Location: index.php");
