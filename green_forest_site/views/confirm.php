<!-- 入力内容の確認画面 -->
<div class="py-4">
  <div class="container text-center">
    <h5 class="mb-3">下記の内容で送信します</h5>
    <!-- 入力内容の表示 -->
    <table class="table table-striped">
      <tbody>
        <tr>
          <th>お名前</th>
          <td><?php echo htmlspecialchars($form['name'], ENT_QUOTES, 'UTF-8'); ?></td>
        </tr>
        <tr>
          <th>メールアドレス</th>
          <td><?php echo htmlspecialchars($form['mail'], ENT_QUOTES, 'UTF-8'); ?></td>
        </tr>
        <tr>
          <th>当店を知ったきっかけ</th>
          <td><?php echo htmlspecialchars($form['questionnaire'], ENT_QUOTES, 'UTF-8'); ?></td>
        </tr>
        <tr>
          <th>お問い合わせ種類</th>
          <td><?php echo htmlspecialchars($form['category'], ENT_QUOTES, 'UTF-8'); ?></td>
        </tr>
        <tr>
          <th>お問い合わせ内容</th>
          <td><?php echo htmlspecialchars($form['message'], ENT_QUOTES, 'UTF-8'); ?></td>
        </tr>
      </tbody>
    </table>
    <div class="py-4">
      <button class=" btn btn-primary mx-3" onclick=" location.href='complete.php'">送信する</button>
      <button class="btn btn-primary px-4 mx-3" onclick=history.back()>戻る</button>
    </div>
  </div>
</div>
