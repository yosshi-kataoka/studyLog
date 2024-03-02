<?php
class Item
{
  // 商品名
  public $name;
  // 金額
  public $price;

  public function __construct(string $name, int $price)
  {
    $this->name = $name;
    $this->price = $price;
  }
}
