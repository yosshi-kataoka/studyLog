<?php

require_once __DIR__ . '/../vendor/autoload.php';

function dbConnect(): PDO
{
  $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
  $dotenv->load();
  try {
    $pdo = new PDO('mysql:host=' . $_ENV['DB_HOST'] . ';dbname=' . $_ENV['DB_DATABASE'] .  '; charset=utf8mb4', $_ENV['DB_USER'],  $_ENV['DB_PASSWORD']);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    echo '接続に成功しました。' . PHP_EOL;
    return $pdo;
  } catch (PDOException $e) {
    echo 'データベースの接続に失敗しました。' . PHP_EOL;
    $e->getMessage();
  }
}

function dropTable($pdo): void
{
  $sql = 'DROP TABLE IF EXISTS companies';
  $pdo->exec($sql);
}

function createTable($pdo): void
{
  try {
    $sql = <<< EOT
    CREATE TABLE companies (
    ID INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    establishment_date date NOT NULL,
    founder VARCHAR(255) NOT NULL
    )
    EOT;
    $pdo->exec($sql);
    echo 'テーブルを作成しました。' . PHP_EOL;
  } catch (Exception $e) {
    echo 'テーブル作成に失敗しました。' . PHP_EOL;
    echo 'Debugging Error:' . $e->getMessage();
  }
}

function insertTable($pdo): void
{
  $pdo->beginTransaction();
  try {
    $companiesInformation = [];
    echo '会社情報を登録していきます。' . PHP_EOL;
    echo '会社名:';
    $companiesInformation['name'] = trim(fgets(STDIN));
    echo '創設日の年月日を-で区切って入力してください。' . PHP_EOL;
    echo '入力例)創設日:2020-12-15.' . PHP_EOL;
    echo '創設日:';
    $companiesInformation['establishment_date'] = trim(fgets(STDIN));
    echo '創設者:';
    $companiesInformation['founder'] = trim(fgets(STDIN));
    $validated = validate($companiesInformation);
    if ($validated) {
      echo 'エラー内容を表示します。' . PHP_EOL;
      echo '--------------------' . PHP_EOL;
      foreach ($validated as $error) {
        echo $error . PHP_EOL;
      }
      $pdo->rollBack();
      return;
    }
    $statement = $pdo->prepare('INSERT INTO companies(name, establishment_date, founder) VALUES(:name, :establishment_date, :founder)');
    $statement->bindValue(':name', $companiesInformation['name'], PDO::PARAM_STR);
    $statement->bindValue(':establishment_date', $companiesInformation['establishment_date'], PDO::PARAM_STR);
    $statement->bindValue(':founder', $companiesInformation['founder'], PDO::PARAM_STR);
    $statement->execute();
    $pdo->commit();
    echo '登録が完了しました。' . PHP_EOL;
  } catch (Exception $e) {
    echo '登録に失敗しました。' . PHP_EOL;
    echo 'Debugging Error:' . $e->getMessage() . PHP_EOL;
    $pdo->rollBack();
  }
}

function validate($companiesInformation): array
{
  $errors = [];
  if (!mb_strlen($companiesInformation['name'])) {
    $errors['name'] = '会社名が未入力です。会社名を入力してください。';
  } elseif (mb_strlen($companiesInformation['name']) > 255) {
    $errors['name'] = '会社名は255文字以内で入力してください。';
  }
  if (!validateDate($companiesInformation['establishment_date'])) {
    $errors['establishment_date'] = '創設日は"2020-12-15"のように暦上正しい創設日を-で区切って入力してください。';
  }
  if (!mb_strlen($companiesInformation['founder'])) {
    $errors['founder'] = '創設者が未入力です。創設者を入力してください。';
  } elseif (mb_strlen($companiesInformation['founder']) > 255) {
    $errors['founder'] = '創設者は255文字以内で入力してください。';
  }
  return $errors;
}

function validateDate($date, $format = 'Y-m-d')
{
  $dateTimeObj = DateTime::createFromFormat($format, $date);
  if ($dateTimeObj !== false && $dateTimeObj->format($format) === $date) {
    return true;
  } else {
    $errors = DateTime::getLastErrors();
    if ($errors['warning_count'] === 0 && $errors['error_count'] === 0) {
      return true;
    } else {
      return false;
    }
  }
}


function displayTable($pdo): void
{
  $sql = $pdo->prepare('SELECT * FROM companies');
  $sql->execute();
  echo '結果の一覧を表示します。' . PHP_EOL;
  while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
    echo $row['name'] . PHP_EOL;
    echo $row['establishment_date'] . PHP_EOL;
    echo $row['founder'] . PHP_EOL;
    echo '------------------' . PHP_EOL;
  }
}

// メインルーチン
$pdo = dbConnect();
// dropTable()メソッドでは、テーブルが存在していればテーブルを削除、createTable()ではテーブルの作成を行うので、下記２つのメソッドのコメントを外すとテーブルが初期化されます。
// dropTable($pdo);
// createTable($pdo);
echo 'プログラムを開始します。' . PHP_EOL;
while (true) {
  echo '1,2,9いずれかの番号を入力してください。' . PHP_EOL;
  echo '1:会社情報の登録' . PHP_EOL;
  echo '2:会社情報の表示' . PHP_EOL;
  echo '9:プログラムを終了する' . PHP_EOL;
  $num = (int)trim(fgets(STDIN));
  switch ($num) {
    case (1):
      insertTable($pdo);
      break;
    case (2):
      displayTable($pdo);
      break;
    case (9);
      echo 'プログラムを終了します。' . PHP_EOL;
      exit;
    default:
      echo '1,2,9以外が入力されているか、未入力です。' . PHP_EOL;
      break;
  }
}
