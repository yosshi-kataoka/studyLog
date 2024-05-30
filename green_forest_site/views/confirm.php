<!-- お問い合わせ完了画面 -->
<div class="py-4">
  <div class="container text-center">
    <form action="complete.php" method="POST">
      <h3>下記の内容で送信します。</h3>
      <!-- confirm.php -->
      <dl>
        <dt>名前</dt>
        <dd><?php echo htmlspecialchars($form['name'], ENT_QUOTES, 'UTF-8'); ?></dd>
        <dt>メールアドレス</dt>
        <dd><?php echo htmlspecialchars($form['mail'], ENT_QUOTES, 'UTF-8'); ?></dd>
        <dt>当店を知ったきっかけ</dt>
        <dd><?php echo htmlspecialchars($form['questionnaire'], ENT_QUOTES, 'UTF-8'); ?></dd>
        <dt>お問い合わせ種類</dt>
        <dd><?php echo htmlspecialchars($form['category'], ENT_QUOTES, 'UTF-8'); ?></dd>
        <dt>お問い合わせ内容</dt>
        <dd><?php echo htmlspecialchars($form['message'], ENT_QUOTES, 'UTF-8'); ?></dd>
      </dl>

    </form>
  </div>
</div>
