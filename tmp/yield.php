<?php
// 1~5までの数字をyieldを使って返す処理
function sampleNumbers()
{
  yield 1;
  yield 2;
  yield 3;
  yield 4;
  // このコメントアウトを外すと1~4のみが返ります。
  // return;
  yield 5;
}

foreach (sampleNumbers() as $number) {
  echo $number . PHP_EOL;
}

// ジェネレーターのループ処理内で1~10までの数字をyieldを使って返す処理
function sampleNumbers2()
{
  for ($i = 1; $i <= 5; $i++) {
    yield $i;
  }
  for ($i = 6; $i <= 10; $i++) {
    yield $i;
  }
}

foreach (sampleNumbers2() as $number) {
  echo $number . PHP_EOL;
}

// 連想配列の各要素をyieldにて返す処理
function greetings()
{
  $greetings = [
    'morning' => 'おはよう',
    'afternoon' => 'こんにちは',
    'evening' => 'こんばんは',
    'night' => 'おやすみ',
  ];
  foreach ($greetings as $time => $greeting) {
    yield $time => $greeting;
  }
}

foreach (greetings() as $time => $greeting) {
  echo $time . 'のあいさつ:' . $greeting . PHP_EOL;
}

// 連想配列の各要素をyieldを使わずに処理
function greetingForeach()
{
  $greetings = [
    'morning' => 'おはよう',
    'afternoon' => 'こんにちは',
    'evening' => 'こんばんは',
    'night' => 'おやすみ',
  ];
  return $greetings;
}
$results = greetingForeach();
foreach ($results as $time => $greeting) {
  echo $time . 'のあいさつ:' . $greeting . PHP_EOL;
}
