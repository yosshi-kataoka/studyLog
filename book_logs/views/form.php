<h2>読書ログの登録</h2>
<!-- エラー内容をforeachにて表示させる -->
<form action="create.php" method="POST">
  <?php if (count($errors) > 0) : ?>
    <?php foreach ($errors as $error) : ?>
      <ul>
        <li class="text-danger">
          <?php echo $error; ?>
        </li>
      </ul>
    <?php endforeach; ?>
  <?php endif; ?>

  <div class="form-group mt-3">
    <label for="title">書籍名</label>
    <input type="text" id="title" name="title" class="form-control mt-2" value="<?php echo $bookLog['title']; ?>">
  </div>
  <div class="form-group mt-3">
    <label for="author">著者名</label>
    <input type="text" id="author" name="author" class="form-control mt-2" value="<?php echo $bookLog['author']; ?>">
  </div>
  <div class="form-group mt-3">
    <label>読書状況</label>
    <div>
      <div class="form-check form-check-inline">
        <input type="radio" name="status" id="unread" value="unread" class="form-check-input" <?php echo ($bookLog['status'] === 'unread') ? 'checked' : "" ?>>
        <label class="form-check-label" for="unread">未読</label>
      </div>
      <div class="form-check form-check-inline">
        <input type="radio" name="status" id="reading" value="reading" class="form-check-input" <?php echo ($bookLog['status'] === 'reading') ? 'checked' : "" ?>>
        <label class="form-check-label" for="reading">読んでいる</label>
      </div>
      <div class="form-check form-check-inline">
        <input type="radio" name="status" id="finish_reading" value="finish_reading" class="form-check-input" <?php echo ($bookLog['status'] === 'finish_reading') ? 'checked' : "" ?>>
        <label class="form-check-label" for="finish_reading">読了</label>
      </div>
    </div>
  </div>
  <div class="form-group mt-3">
    <label for="evaluation">評価（5点）満点の整数</label>
    <input type="number" id="evaluation" name="evaluation" min="1" max="5" step="1" class="form-control mt-2" value="<?php echo $bookLog['evaluation']; ?>">
  </div>
  <div class="form-group mt-3">
    <label for="review">感想</label>
    <textarea id="review" name="review" rows="10" class="form-control mt-2"><?php echo $bookLog['review']; ?></textarea>
  </div>
  <button type="submit" class="btn btn-primary mt-3">登録する</button>
</form>
