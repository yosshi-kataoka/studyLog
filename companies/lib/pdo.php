<?php

require_once __DIR__ . '/../../vendor/autoload.php';

function dbConnect(): PDO
{
  $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../..');
  $dotenv->load();
  try {
    $pdo = new PDO('mysql:host=' . $_ENV['DB_HOST'] . ';dbname=' . $_ENV['DB_DATABASE'] .  '; charset=utf8mb4', $_ENV['DB_USER'],  $_ENV['DB_PASSWORD']);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    return $pdo;
  } catch (PDOException $e) {
    echo 'データベースの接続に失敗しました。' . PHP_EOL;
    $e->getMessage();
  }
}
