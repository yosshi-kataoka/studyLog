<?php

// ジェネレーター
function excelColumnNames()
{
  // yieldした列の個数を表す変数
  $numOfYields = 0;
  // １文字の列名の生成をサブジェネレーター1に任せる
  $excelColumnNamesOf1Character = excelColumnNamesOf1Character();
  yield from $excelColumnNamesOf1Character;
  // 2文字の列名の生成をサブジェネレーター2に任せる
  $excelColumnNamesOf2Character = excelColumnNamesOf2Character();
  yield from $excelColumnNamesOf2Character;

  // サブジェネレーター1~2の戻り値の合計を返す処理
  return $excelColumnNamesOf1Character->getReturn() + $excelColumnNamesOf2Character->getReturn();
}

// サブジェネレーター1
function excelColumnNamesOf1Character()
{
  $numOfYields = 0;
  // 列名「A~Z」をyieldで返す
  foreach (range('A', 'Z') as $columnName) {
    yield $columnName;
    $numOfYields++;
  }
  return $numOfYields;
}

// サブジェネレーター2
function excelColumnNamesOf2Character()
{
  $numOfYields = 0;
  // 列名「AA~ZZ」をyieldで返す
  foreach (range('A', 'Z') as $columnName1) {
    foreach (range('A', 'Z') as $columnName2) {
      yield $columnName1 . $columnName2;
      $numOfYields++;
    }
  }
  return $numOfYields;
}

// メインルーチン
$excelColumnNames = excelColumnNames();
foreach ($excelColumnNames as $excelColumnName) {
  echo $excelColumnName . PHP_EOL;
}
echo '生成した列の数' . $excelColumnNames->getReturn() . PHP_EOL;
