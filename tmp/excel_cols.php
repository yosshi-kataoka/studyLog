<?php

// ジェネレーター
function excelColumnNames()
{
  // 列名「A~Z」をyieldで返す処理
  foreach (range('A', 'Z') as $columnName) {
    yield $columnName;
  }
  // 列名「AA~ZZ」をyieldで返す処理
  foreach (range('A', 'Z') as $columnName1) {
    foreach (range('A', 'Z') as $columnName2) {
      yield $columnName1 . $columnName2;
    }
  }
}

// メインルーチン
foreach (excelCOlumnNames() as $excelColumnName) {
  echo $excelColumnName . PHP_EOL;
}
