<body>
  <h1 class="h2 text-dark mt-4 mb-4">会社情報の一覧</h1>
  <a href="new.php" class="btn btn-primary mb-4">会社情報を登録する</a>
  <main>
    <?php if (count($companies) > 0) : ?>
      <?php foreach ($companies as $company) : ?>
        <section class="overflow-auto card shadow-sm mb-4">
          <div class="card-body">
            <h2 class="card-title h4 mb-3">
              <?php echo escape($company['name']); ?>
            </h2>
            <div>
              創業:<?php echo escape($company['establishment_date']); ?>年&nbsp;|&nbsp;代表:<?php echo escape($company['founder']); ?>
            </div>
          </div>
        </section>
      <?php endforeach; ?>
    <?php else : ?>
      <p>会社情報が登録されておりません。</p>
    <?php endif; ?>
  </main>
</body>
