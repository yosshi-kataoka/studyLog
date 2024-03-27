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
      <input type="text" id="name" name="name" value="<?php echo $company['name'] ?>">
    </div>
    <div>
      <label for="establishment
      _date">設立日</label>
      <input type="date" id="establishment_date" name="establishment_date" value="<?php echo $company['establishment_date'] ?>">
    </div>
    <div>
      <label for="founder">代表者名</label>
      <input type="text" id="founder" name="founder" value="<?php echo $company['founder'] ?>">
    </div>
    </div>
    <button type="submit">登録する</button>
  </form>
</body>

</html>
