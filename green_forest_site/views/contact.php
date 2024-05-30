<!-- パンくずリスト -->
<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/
  2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5  2.5 8l4-4-4-4z' fi11='currentcolor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
  <ol class="breadcrumb p-3 bg-light rounded-2 container">
    <li class="breadcrumb-item">
      <a href="top.php">ホーム</a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">
      お問い合わせ
    </li>

  </ol>

</nav>
<!-- メイン -->
<main>
  <div class="container">
    <h2>お問い合わせ</h2>
    <p>ガーデニングショップ GREEN FOREST GARDENING(グリーンフォレストガーデニング)へのお問い合わせは、こちらのフォームをご利用ください。</p>
  </div>
  <!-- お問い合わせフォーム -->
  <div class="py-3">
    <div class="container">
      <h3 class="mb-3">お問い合わせフォーム</h3>
      <!-- 入力した項目にエラーがある場合はエラー内容を表示させる -->
      <?php if (count($errors)) : ?>
        <ul class="text-danger">
          <?php foreach ($errors as $error) : ?>
            <li><?php echo $error; ?></li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>
      <!-- フォーム -->
      <form action="validate.php" method="POST">
        <!-- 名前 -->
        <div class="row py-3">
          <label for="name" class="col-md-3 col-form-label">
            お名前<span class="badge bg-warning text-dark">必須</span>
          </label>
          <div class="col-md-9">
            <div class="form-floating">
              <input type="text" class="form-control" id="name" name="name" placeholder="みどり はなこ" value="<?php echo $form['name']; ?>" required>
              <label for="name">お名前を入力してください。</label>
            </div>
          </div>
        </div>
        <!-- メールアドレス -->
        <div class="row py-3">
          <label for="e-mail" class="col-md-3 col-form-label">
            メールアドレス<span class="badge bg-warning text-dark">必須</span>
          </label>
          <div class="col-md-9">
            <div class="form-floating">
              <input type="text" class="form-control" id="e-mail" name="mail" placeholder="mail@example.com" value="<?php echo $form['mail']; ?>" required>
              <label for="e-mail">有効な電子メールアドレスを入力してください。</label>
            </div>
          </div>
        </div>
        <!-- きっかけ -->
        <fieldset class="py-3">
          <div class="row">
            <legend class="col-md-3 col-form-label">
              当店を知ったきっかけ
            </legend>
            <div class="col-md-9">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="questionnaire" id="radio1" value="口コミ" <?php echo ($form['questionnaire'] === '口コミ') ? 'checked' : '' ?>>
                <label class="form-check-label" for="radio1">口コミ</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="questionnaire" id="radio2" value="検索エンジン" <?php echo ($form['questionnaire'] === '検索エンジン') ? 'checked' : '' ?>>
                <label class="form-check-label" for="radio2">検索エンジン</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="questionnaire" id="radio3" value="広告" <?php echo ($form['questionnaire'] === '広告') ? 'checked' : '' ?>>
                <label class="form-check-label" for="radio3">広告</label>
              </div>
            </div>
        </fieldset>
        <!-- 種類 -->
        <div class="row py-3">
          <label for="category" class="col-md-3 col-form-label">
            お問い合わせ種類<span class="badge bg-warning text-dark">必須</span>
          </label>
          <div class="col-md-9">
            <div class="form-floating">
              <select class="form-select" id="category" name="category">
                <option value="ご予約について" <?php echo ($form['category'] === 'ご予約について') ? 'selected' : '' ?>>ご予約について</option>
                <option value="委託販売について" <?php echo ($form['category'] === '委託販売について') ? 'selected' : '' ?>>委託販売について</option>
                <option value="その他のお問い合わせ" <?php echo ($form['category'] === 'その他のお問い合わせ') ? 'selected' : '' ?>>その他のお問い合わせ</option>
              </select>
              <label for="category">お選びください。</label>
            </div>
          </div>
        </div>
        <!-- 内容 -->
        <div class="row py-3">
          <label for="message" class="col-md-3 col-form-label">
            お問い合わせ内容<span class="badge bg-warning text-dark">必須</span>
          </label>
          <div class="col-md-9">
            <div class="form-floating">
              <textarea class="form-control" id="message" rows="8" name="message" placeholder="お問い合わせ内容" required><?php echo $form['message']; ?></textarea>
              <label for="message">ご自由にお書きください。</label>
            </div>
          </div>
        </div>
        <!-- 確認ボタン -->
        <div class="row justify-content-end py-3">
          <div class="col-md-9">
            <button type="submit" class="btn btn-primary">確認する</button>
          </div>
        </div>
      </form>


    </div>

  </div>

</main>
