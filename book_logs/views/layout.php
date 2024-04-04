<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset=utf-8>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $title; ?></title>
  <link rel="stylesheet" href="stylesheets/css/app.css">
</head>

<body>
  <header class="navbar navbar-expand-lg ">
    <div class="container-fluid border-bottom border-secondary-subtle">
      <a class="navbar-brand" href="index.php">読書ログ</a>
    </div>
  </header>
  <div class="container mt-3">
    <?php include $content; ?>
  </div>
</body>

</html>
