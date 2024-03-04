<?php

declare(strict_types=1);

// 神経衰弱ゲームクラス
class MemoryGame
{
  // カードを表す
  private $cards;

  // コンストラクタ
  public function __construct(Cards $cards)
  {
    // カードの正体が何なのかは、神経衰弱ゲームクラスは知らなくてよい
    $this->cards = $cards;
    // トランプをシャッフルしてランダムに並び替える
    $this->cards->shuffle();
  }

  // ２枚のカードが同じであれば真。
  // 引数$position1~2はめくられたカードの位置を表す
  public function isHit(int $position1, int $position2): bool
  {
    $position1Value = $this->cards->getValue($position1);
    echo $position1 . '枚目のカードは:' . $position1Value . PHP_EOL;
    $position2Value = $this->cards->getValue($position2);
    echo $position2 . '枚目のカードは:' . $position2Value . PHP_EOL;

    return $position1Value === $position2Value;
  }
}
