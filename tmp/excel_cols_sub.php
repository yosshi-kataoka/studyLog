<?php

// ジェネレーター
function excelColumnNames()
{
  // １文字の列名の生成をサブジェネレーター1に任せる
  yield from excelColumnNamesOf1Character();
  // 2文字の列名の生成をサブジェネレーター2に任せる
  yield from excelColumnNamesOf2Character();
}

// サブジェネレーター1
function excelColumnNamesOf1Character()
{
  // 列名「A~Z」をyieldで返す
  foreach (range('A', 'Z') as $columnName) {
    yield $columnName;
  }
}

// サブジェネレーター2
function excelColumnNamesOf2Character()
{
  // 列名「AA~ZZ」をyieldで返す
  foreach (range('A', 'Z') as $columnName1) {
    foreach (range('A', 'Z') as $columnName2) {
      yield $columnName1 . $columnName2;
    }
  }
}

// メインルーチン
foreach (excelColumnNames() as $excelColumnName) {
  echo $excelColumnName . PHP_EOL;
}
