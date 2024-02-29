<?php

function dbConnect(): mysqli
{
  $link = mysqli_connect('db', 'book_log', 'pass', 'book_log');
  if (!$link) {
    echo 'データベースの接続に失敗しました。' . PHP_EOL;
    echo 'Debugging Error:' . mysqli_connect_error() . PHP_EOL;
    exit;
  }
  echo 'データベースとの接続に成功しました。' . PHP_EOL;
  return $link;
}
// 食材の購入記録をデータベースに登録する処理
function createFoodPurchaseLog(mysqli $link): void
{
  $foodPurchaseLog = [];
  echo '食材の購入記録を登録してください' . PHP_EOL;
  echo '食材名:';
  $foodPurchaseLog['foodName'] = trim(fgets(STDIN));
  echo '価格(円):';
  $foodPurchaseLog['price'] = trim(fgets(STDIN));
  echo '数量(個):';
  $foodPurchaseLog['quantity'] = trim(fgets(STDIN));
  echo '購入した店舗名:';
  $foodPurchaseLog['storeName'] = trim(fgets(STDIN));
  //入力した各項目に対してのバリデーション処理
  $validated = validate($foodPurchaseLog);
  if (count($validated) > 0) {
    foreach ($validated as $error) {
      echo $error;
    }
    return;
  }
  $sql = <<<EOT
  INSERT INTO food_purchase_log(
  foodName,
  price,
  quantity,
  storeName
  ) VALUES(
  "{$foodPurchaseLog['foodName']}",
  "{$foodPurchaseLog['price']}",
  "{$foodPurchaseLog['quantity']}",
  "{$foodPurchaseLog['storeName']}"
  )
  EOT;
  $result = mysqli_query($link, $sql);
  if ($result) {
    echo '登録が完了しました。' . PHP_EOL . PHP_EOL;
  } else {
    echo '登録に失敗しました。' . PHP_EOL;
    echo 'Debugging Error:' . mysqli_error($link) . PHP_EOL;
  }
}
// 入力した各項目のバリデーション処理
function validate(array $foodPurchaseLog): array
{
  $errors = [];
  // 食材名のバリデーション
  if (!mb_strlen($foodPurchaseLog['foodName'])) {
    $errors['foodName'] = '食材名が未入力です。食材名を入力してください。' . PHP_EOL;
  } elseif (mb_strlen($foodPurchaseLog['foodName']) > 255) {
    $errors['foodName'] = '食材名は255文字以内に入力してください。' . PHP_EOL;
  }
  // 価格のバリデーション
  if ((int)$foodPurchaseLog['price'] < 1 || !filter_var($foodPurchaseLog['price'], FILTER_VALIDATE_INT)) {
    $errors['price'] = '価格は１以上の数字を入力してください。' . PHP_EOL;
  }
  // 数量のバリデーション
  if ((int)$foodPurchaseLog['quantity'] < 1 || !filter_var($foodPurchaseLog['quantity'], FILTER_VALIDATE_INT)) {
    $errors['quantity'] = '数量は１以上の数字を入力してください。' . PHP_EOL;
  }
  // 購入した店舗名のバリデーション
  if (!mb_strlen($foodPurchaseLog['storeName'])) {
    $errors['storeName'] = '購入した店舗名が未入力です。購入した店舗名を入力してください。' . PHP_EOL;
  } elseif (mb_strlen($foodPurchaseLog['storeName']) > 255) {
    $errors['storeName'] = '購入した店舗名は255文字以内に入力してください。' . PHP_EOL;
  }
  return $errors;
}
// データベースより食材の購入記録を表示する処理
function displayFoodPurchaseLog($link)
{
  echo '食材の購入記録を表示します' . PHP_EOL;
  $sql = 'SELECT foodName, price, quantity, storeName FROM food_purchase_log';
  $results = mysqli_query($link, $sql);
  while ($foodPurchaseLogs =  mysqli_fetch_assoc($results)) {
    echo '食材名:' . $foodPurchaseLogs['foodName'] . PHP_EOL;
    echo '価格:' . $foodPurchaseLogs['price'] . PHP_EOL;
    echo '数量:' . $foodPurchaseLogs['quantity'] . PHP_EOL;
    echo '購入した店舗名:' . $foodPurchaseLogs['storeName'] . PHP_EOL;
    echo '---------------' . PHP_EOL;
  }
  mysqli_free_result($results);
}

// メインルーチン
$link = dbConnect();
while (true) {
  echo '1:食材の購入記録を登録する' . PHP_EOL;
  echo '2:食材の購入記録を表示する' . PHP_EOL;
  echo '9:アプリケーションを終了する' . PHP_EOL;
  echo '選択肢より番号を選択してください' . PHP_EOL;
  // 1,2,9いずれかの数字を入力して$numに格納し、値に応じて処理を条件分岐させる
  $num = trim(fgets(STDIN));
  if ($num === '1') {
    // 食材の購入記録を登録する
    createFoodPurchaseLog($link);
  } elseif ($num === '2') {
    // 食材の購入記録を表示する
    displayFoodPurchaseLog($link);
  } elseif ($num === '9') {
    // プログラムを終了する
    echo 'プログラムを終了します' . PHP_EOL;
    break;
  } else {
    echo '1,2,9いずれかの番号を選択してください。' . PHP_EOL;
    continue;
  }
}
