<?php

declare(strict_types=1);
require_once dirname(__file__) . '/MemoryGame.php';
$memoryGame = new MemoryGame('animalCards');

// 2番目のカードと6番目のカードが同じ値なら「HIT!」を表示。
if ($memoryGame->isHit(2, 6) === true) {
  echo 'HIT !' . PHP_EOL;
} else {
  echo 'NOT HIT !' . PHP_EOL;
}
