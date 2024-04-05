<?php

require_once __DIR__ . '../../lib/pdo.php';

// 会社情報を取得するメソッド
function listCompanies($pdo): array
{
  $results = [];
  $statement = $pdo->prepare('SELECT name, establishment_date, founder FROM companies');
  $statement->execute();
  // assoc処理を記述していく
  while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    $results[] = $row;
  }
  return $results;
}

// メインルーチン
$pdo = dbConnect();
$companies = listCompanies($pdo);

?>

<body>
  <h1>会社情報の一覧</h1>
  <a href="new.php">会社情報を登録する</a>
  <main>
    <?php if (count($companies) > 0) : ?>
      <?php foreach ($companies as $company) : ?>
        <section>
          <h2><?php echo $company['name']; ?></h2>
          <div>
            創業:<?php echo $company['establishment_date']; ?>年&nbsp;|&nbsp;代表:<?php echo $company['founder']; ?>
          </div>
        </section>
      <?php endforeach; ?>
    <?php else : ?>
      <p>会社情報が登録されておりません。</p>
    <?php endif; ?>
  </main>
</body>
