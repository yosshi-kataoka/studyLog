<button onclick="location.href= '/book_logs/new.php'" class="btn  btn-info">読書ログを登録する</button>
<main>
  <?php if (count($bookLogs) > 0) : ?>
    <?php foreach ($bookLogs as $bookLog) : ?>
      <section class="card shadow-sm mt-3 overflow-auto">
        <div class="card-body">
          <h5 class="card-title">書籍名:<?php echo escape($bookLog['title']); ?></h5>
          <div class="card-text">
            著者名:<?php echo escape($bookLog['author']); ?>&nbsp;|&nbsp;
            読書状況:<?php echo escape($bookLog['status']); ?>&nbsp;|&nbsp;
            評価:<?php echo escape($bookLog['evaluation']); ?>点
          </div>
          <p>
            <?php echo nl2br(escape($bookLog['review']), false); ?>
          </p>
        </div>
      </section>
    <?php endforeach; ?>
  <?php else : ?>
    <p>読書ログが登録されておりません。</p>
  <?php endif; ?>
</main>
