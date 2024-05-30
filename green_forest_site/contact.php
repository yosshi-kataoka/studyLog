<?php

session_start();
$_SESSION['form'] = $_POST;

$form = [
  'name' => '',
  'mail' => '',
  'questionnaire' => '口コミ',
  'category' => 'ご予約について',
  'message' => '',
];
$errors = [];

$title = '「お問い合わせ|ガーデニングショップGREEN FOREST GARDENING(グリーンフォレストガーデニング)」';
$contents = __DIR__ . '/views/contact.php';
include __DIR__ . '/views/layout.php';
