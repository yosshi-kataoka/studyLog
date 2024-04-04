<?php

require_once __DIR__ . '/lib/pdo.php';

function validate($bookLog)
{
  $errors = [];
  // 書籍名のバリデーション
  if (!mb_strlen($bookLog['title'])) {
    $errors['title'] = '書籍名を入力してください';
  } elseif (mb_strlen($bookLog['title']) > 255) {
    $errors['title'] = '書籍名は255文字以内で入力してください';
  }
  // 著者名のバリデーション
  if (!mb_strlen($bookLog['author'])) {
    $errors['author'] = '著者名を入力してください';
  } elseif (mb_strlen($bookLog['author']) > 255) {
    $errors['author'] = '著者名は255文字以内で入力してください';
  }
  // 読書状況のバリデーション
  if (!mb_strlen($bookLog['status'])) {
    $errors['status'] = '読書状況を選択してください';
  }
  // 評価のバリデーション
  if ($bookLog['evaluation'] < 1 || $bookLog['evaluation'] > 5)
    $errors['evaluation'] = '評価は1~5の整数を選択してください';
  // 感想のバリデーション
  if (!mb_strlen($bookLog['review'])) {
    $errors['review'] = '感想を入力してください';
  } elseif (mb_strlen($bookLog['review']) > 1000) {
    $errors['review'] = '感想は1000文字以内で入力してください';
  }
  return $errors;
}

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
  // バリデーション処理
  $errors = validate($bookLog);
  if (!count($errors)) {
    // データベースに接続する。dbConnect()メソッドは/lib/pdo.phpに記述
    $pdo = dbConnect();
    // データベースにデータを登録する
    createBookLog($pdo, $bookLog);
    // index.phpへリダイレクト
    header("Location: index.php");
  }
}
// 入力値にエラーがある場合以下の処理
$title = "読書ログ登録";
$content = __DIR__ . "/views/form.php";
include 'views/layout.php';
