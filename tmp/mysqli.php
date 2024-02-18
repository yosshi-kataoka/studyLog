<?php

$link = mysqli_connect('db', 'book_log', 'pass', 'book_log');

if (!$link) {
  echo 'ERROR:データベースに接続できません' . PHP_EOL;
  echo 'Debugging error:' . mysqli_connect_error() . PHP_EOL;
  exit;
}
echo 'データベースに接続できました' . PHP_EOL;

$sql = <<<EOT
INSERT INTO companies (
  name,
  establishment_date,
  founder
) VALUES(
  'SmartHR Inc',
  '2013-01-23',
  'Shoji Miyata'
)
EOT;
$result = mysqli_query($link, $sql);
if ($result) {
  echo 'データを追加しました' . PHP_EOL;
} else {
  echo 'データを追加できませんでした' . PHP_EOL;
  echo 'Debugging Error:' . mysqli_error($link) . PHP_EOL;
}

mysqli_close($link);
echo 'データベースとの接続を解除しました' . PHP_EOL;
