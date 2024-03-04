<?php

declare(strict_types=1);
require_once dirname(__file__) . '/MemoryGame.php';
require_once dirname(__file__) . '/PlayingCards.php';
require_once dirname(__file__) . '/AnimalCards.php';

$cardType = 'animalCards'; //動物カードを使用
// 依存性の注入を使用
if ($cardType === 'playingCards') {
  $playingCards = new PlayingCards();
} elseif ($cardType === 'animalCards') {
  $playingCards = new AnimalCards();
}
$memoryGame = new MemoryGame($playingCards);

// 2番目のカードと6番目のカードが同じ値なら「HIT!」を表示。
if ($memoryGame->isHit(2, 6) === true) {
  echo 'HIT !' . PHP_EOL;
} else {
  echo 'NOT HIT !' . PHP_EOL;
}
