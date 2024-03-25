<?php

require_once __DIR__ . '/lib/pdo.php';

function createCompany($pdo, $company): void
{
  $pdo->beginTransaction();
  try {
    $statement = $pdo->prepare('INSERT INTO companies (name, establishment_date, founder) VALUES (:name, :establishment_date, :founder)');
    $statement->bindValue(':name', $company['name'], PDO::PARAM_STR);
    $statement->bindValue(':establishment_date', $company['establishment_date'], PDO::PARAM_STR);
    $statement->bindValue(':founder', $company['name'], PDO::PARAM_STR);
    $statement->execute();
    $pdo->commit();
  } catch (PDOException $e) {
    error_log('Error: fail to create company');
    error_log('Debugging Error:' . $e->getMessage());
    $pdo->rollback();
  }
}

function validate($company): array
{
  $errors = [];
  // 会社名
  if (!mb_strlen($company['name'])) {
    $errors['name'] = '会社名を入力してください';
  } elseif (mb_strlen($company['name']) > 255) {
    $errors['name'] = '会社名は255文字以内で入力してください';
  }
  // 設立日
  $dates = explode("-", $company['establishment_date']);
  if (!mb_strlen($company['establishment_date'])) {
    $errors['establishment_date'] = '設立日を入力してください';
  } elseif (count($dates) !== 3) {
    $errors['establishment_date'] = '設立日を正しい形式で入力してください';
  } elseif (!checkdate($dates[1], $dates[2], $dates[0])) {
    $errors['establishment_date'] = '設立日を正しい日付で入力してください';
  }
  // 創設者
  if (!mb_strlen($company['founder'])) {
    $errors['founder'] = '創設者を入力してください';
  } elseif (mb_strlen($company['founder']) > 255) {
    $errors['founder'] = '創設者を255文字以内で入力してください';
  }
  return $errors;
}

// メインルーチン
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // POSTされた会社情報を変数に格納する
  $company = [
    'name' => $_POST['name'],
    'establishment_date' => $_POST['establishment_date'],
    'founder' => $_POST['founder'],
  ];
  // バリデーションする
  $errors = validate($company);
  // バリデーションエラーがなければ
  if (!count($errors)) {
    $pdo = dbConnect();
    createCompany($pdo, $company);
    header("Location: index.php");
  }
  // もしエラーがあれば下記ページを表示
}

?>
<!DOCTYPE html>
<html la="ja">

<head>
  <meta charset="utf=8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>会社情報の登録</title>
</head>

<body>
  <h1>会社情報の登録</h1>
  <form action="create.php" method="POST">
    <?php if (count($errors)) : ?>
      <ul>
        <?php foreach ($errors as $error) : ?>
          <li><?php echo $error; ?></li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>
    <div>
      <label for="name">会社名</label>
      <input type="text" id="name" name="name">
    </div>
    <div>
      <label for="establishment
      _date">設立日</label>
      <input type="date" id="establishment_date" name="establishment_date">
    </div>
    <div>
      <label for="founder">代表者名</label>
      <input type="text" id="founder" name="founder">
    </div>
    </div>
    <button type="submit">登録する</button>
  </form>
</body>

</html>
