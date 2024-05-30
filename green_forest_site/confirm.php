<?php

require_once __DIR__ . '/lib/escape_function.php';

session_start();
$form = $_SESSION['form'];

$contactList = [
  'name' => 'お名前',
  'mail' => 'メールアドレス',
  'questionnaire' => '当店を知ったきっかけ',
  'category' => 'お問い合わせの種類',
  'message' => 'お問い合わせ内容',
];

$title = '「お問い合わせ内容の確認|ガーデニングショップGREEN FOREST GARDENING(グリーンフォレストガーデニング)」';
$contents = __DIR__ . '/views/confirm.php';
include __DIR__ . '/views/layout.php';
