<?php

function dbConnect(): mysqli
{
  $link = mysqli_connect('db', 'book_log', 'pass', 'book_log');
  if ($link) {
    echo 'データベースに接続しました。' . PHP_EOL;
  } else {
    echo 'データベースの接続に失敗しました。' . PHP_EOL;
    echo 'Debugging Error:' . mysqli_connect_error() . PHP_EOL;
    exit;
  }
  return $link;
}

function dropTable($link): void
{
  $sql = 'DROP TABLE IF EXISTS reviews';
  $results = mysqli_query($link, $sql);
  if ($results) {
    echo 'データベースの削除に成功しました。' . PHP_EOL;
  } else {
    echo 'データベースの削除に失敗しました。' . PHP_EOL;
    echo 'Debugging Error:' . mysqli_error($link);
  }
}

function createTable($link): void
{
  $sql = <<< EOT
  CREATE TABLE reviews (
  id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
  title VARCHAR(255) NOT NULL,
  author VARCHAR(255) NOT NULL,
  status VARCHAR(10) NOT NULL,
  score INTEGER NOT NULL,
  summary VARCHAR(1000) NOT NULL,
  created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
  )
  EOT;
  $results =  mysqli_query($link, $sql);
  if ($results) {
    echo 'テーブルの作成に成功しました。' . PHP_EOL;
  } else {
    echo 'テーブルの作成に失敗しました。' . PHP_EOL;
    echo 'Debugging Error:' . mysqli_error($link) . PHP_EOL;
  }
}

$link = dbConnect();
dropTable($link);
createTable($link);
mysqli_close($link);
