<?php

declare(strict_types=1);
require_once dirname(__file__) . '/MemoryGame.php';
$memoryGame = new MemoryGame();

// 10番目のカードと25番目のカードが同じ値なら「HIT!」を表示。
if ($memoryGame->isHit(10, 25) === true) {
  echo 'HIT !' . PHP_EOL;
} else {
  echo 'NOT HIT !' . PHP_EOL;
}
