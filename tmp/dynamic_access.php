<?php
// 動的アクセスを使用せずに各変数の内容を表示
$user1 = 'Suzuki';
$user2 = 'Tanaka';
$user3 = 'Miyamoto';

echo $user1 . PHP_EOL;
echo $user2 . PHP_EOL;
echo $user3 . PHP_EOL;

// 動的アクセスを使用して各変数の内容を表示
for ($i = 1; $i <= 3; $i++) {
  echo ${'user' . $i} . PHP_EOL;
}
