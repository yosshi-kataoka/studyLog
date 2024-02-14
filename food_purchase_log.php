<?php

function createFoodPurchaseLog()
{
  echo '食材の購入記録を登録してください' . PHP_EOL;
  echo '食材名:';
  $foodName = trim(fgets(STDIN));
  echo '価格:';
  $price = trim(fgets(STDIN));
  echo '数量:';
  $quantity = trim(fgets(STDIN));
  echo '購入した店舗名:';
  $storeName = trim(fgets(STDIN));
  echo '登録が完了しました' . PHP_EOL . PHP_EOL;
  return [
    'foodName' => $foodName,
    'price' => $price,
    'quantity' => $quantity,
    'storeName' => $storeName,
  ];
}

function displayFoodPurchaseLog($reviews)
{
  echo '食材の購入記録を表示します' . PHP_EOL;
  foreach ($reviews as $review) {
    echo '食材名:' . $review['foodName'] . PHP_EOL;
    echo '価格:' . $review['price'] . PHP_EOL;
    echo '数量:' . $review['quantity'] . PHP_EOL;
    echo '購入した店舗名:' . $review['storeName'] . PHP_EOL;
    echo '---------------' . PHP_EOL;
  }
}

$reviews = [];
while (true) {
  echo '1:食材の購入記録を登録する' . PHP_EOL;
  echo '2:食材の購入記録を表示する' . PHP_EOL;
  echo '9:アプリケーションを終了する' . PHP_EOL;
  echo '選択肢より番号を選択してください' . PHP_EOL;
  // 1,2,9いずれかの数字を入力して$numに格納し、値に応じて処理を条件分岐させる
  $num = trim(fgets(STDIN));

  if ($num === '1') {
    // 食材の購入記録を登録する
    $reviews[] = createFoodPurchaseLog();
  } elseif ($num === '2') {
    // 食材の購入記録を表示する
    displayFoodPurchaseLog($reviews);
  } elseif ($num === '9') {
    // プログラムを終了する
    echo 'プログラムを終了します' . PHP_EOL;
    break;
  }
}
