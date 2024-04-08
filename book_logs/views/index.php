<button onclick="location.href= '/book_logs/new.php'" class="btn  btn-info">読書ログを登録する</button>
<main>
  <?php if (count($bookLogs) > 0) : ?>
    <?php foreach ($bookLogs as $bookLog) : ?>
      <section class="border mt-3 border-black overflow-auto">
        <div class="ms-2">
          <h5 class="mt-2 mb-2 ms-2">書籍名:<?php echo escape($bookLog['title']); ?></h5>
          <p class="mt-2 mb-2">著者名:<?php echo escape($bookLog['author']); ?>&nbsp;|読書状況:<?php echo escape($bookLog['status']); ?>&nbsp;|評価:<?php echo escape($bookLog['evaluation']); ?>点</p>
          <p class="mt-2">感想<br><?php echo nl2br(escape($bookLog['review']), false); ?>
          </p>
        </div>
      </section>
    <?php endforeach; ?>
  <?php else : ?>
    <p>読書ログが登録されておりません。</p>
  <?php endif; ?>
</main>
