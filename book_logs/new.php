<?php
$bookLog = [
  'title' => "",
  'author' => "",
  'status' => "unread",
  'evaluation' => "",
  'review' => ""
];
$errors = [];
$title = '読書ログ登録';
$content = __DIR__ . "/views/form.php";
include __DIR__ . '/views/layout.php';
