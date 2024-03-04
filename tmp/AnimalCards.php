<?php

declare(strict_types=1);
require_once dirname(__FILE__) . '/Cards.php';

class AnimalCards implements cards
{
  // カードの配列
  private $cards;
  // コンストラクタ
  public function __construct()
  {
  }

  // カードをシャッフルする
  public function shuffle(): void
  {
    echo 'シャッフルします...' . PHP_EOL;
  }

  // 指定された位置のカードの動物を返す
  public function getValue(int $position): string
  {
    return 'penguin'; //ここでは固定値を返す
  }
}
