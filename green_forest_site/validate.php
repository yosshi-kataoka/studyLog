<?php

function validate($form): array
{
  $errors = [];
  // 名前
  if (!mb_strlen($form['name'])) {
    $errors['name'] = 'お名前を入力してください';
  } elseif (mb_strlen($form['name']) > 30) {
    $errors['name'] = 'お名前は30文字以内で入力してください';
  }
  // メールアドレス
  if (!mb_strlen($form['mail'])) {
    $errors['mail'] = 'メールアドレスを入力してください';
  } elseif (mb_strlen($form['name']) > 254) {
    $errors['mail'] = 'メールアドレスは254文字以内で入力してください';
  }
  // きっかけ
  if (!mb_strlen($form['questionnaire'])) {
    $errors['questionnaire'] = '当店を知ったきっかけを選択してください';
  }
  // お問い合わせの種類
  if (!mb_strlen($form['category'])) {
    $errors['questionnaire'] = 'お問い合わせの種類を選択してください';
  }
  // お問い合わせ内容
  if (!mb_strlen($form['message'])) {
    $errors['message'] = 'お問い合わせ内容を入力してください';
  }

  return $errors;
}

// メインルーチン
// create.php
session_start();
$_SESSION['form'] = $_POST;

// contact.phpのPOSTデータを$formに格納させる
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // POSTされた会社情報を変数に格納する
  $form = [
    'name' => $_POST['name'],
    'mail' => $_POST['mail'],
    'questionnaire' => $_POST['questionnaire'],
    'category' => $_POST['category'],
    'message' => $_POST['message'],
  ];
  // バリデーション処理
  $errors = validate($form);
  // エラーがなかったら、confirmation.phpへリダイレクト
  if (!count($errors)) {
    header("Location: confirm.php");
  }
}

// エラーがあったら、contact.phpを表示させ、そこにはエラー内容が表示される。
$title = '「お問い合わせ|ガーデニングショップGREEN FOREST GARDENING(グリーンフォレストガーデニング)」';
$contents = __DIR__ . '/views/contact.php';
include __DIR__ . '/views/layout.php';
