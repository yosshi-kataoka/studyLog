<?php
// foreachを使用した配列の各値を2倍にして表示する処理
$numbers = [1, 2, 3, 4, 5,];
foreach ($numbers as $number) {
  echo $number * 2 . PHP_EOL;
}

// foreachを使用した連想配列の中身をそれぞれ表示する処理
$currencies = [
  'japan' => 'yen',
  'us' => 'dollar',
  'england' => 'pound',
];
foreach ($currencies as $country => $currency) {
  echo $country . ':' . $currency . PHP_EOL;
}
