<!doctype html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="stylesheets/css/app.css">
  <title><?php echo $title ?></title>
</head>

<body>
  <!--ヘッダ-->
  <header class="py-4">
    <div class="container text-center" id="home">
      <h1><a href="top.php"><img class="mw-100" src="img/logo.png" alt='ロゴ画像'></a></h1>
    </div>
  </header>
  <!-- ナビゲーションバー -->
  <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
    <!-- サブココンポーネント -->
    <div class="container">
      <!-- ブランド -->
      <a class="navbar-brand" href="top.php">GREEN FOREST GARDENING</a>
      <!-- 切り替えボタン -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- ナビゲーション -->
      <div class="collapse navbar-collapse" id="navbar-content">
        <!-- ナビゲーションメニュー -->
        <!-- 左側メニュー トップページの各コンテンツへのリンク -->
        <ul class="navbar-nav me-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#" aria-current="page" href="top.php#home">ホーム</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="top.php#about">お店について</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="top.php#menu">商品</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="top.php#coupon">クーポン</a>
          </li>
          <!-- ドロップダウン -->
          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              インフォメーション
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="top.php#shop">お店</a></li>
              <li><a class="dropdown-item" href="top.php#access">アクセス</a></li>
            </ul>
          </li>
        </ul>
        <!-- 右側メニュー お問い合わせページへのリンク -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="contact.php" class="nav-link btn btn-info text-light">お問い合わせ</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- コンテンツ -->
  <?php include $contents; ?>
  <!-- フッター -->
  <footer class="py-4 bg-dark text-light">
    <div class="container text-center">
      <!-- ナビゲーション -->
      <ul class="nav justify-content-center mb-3">
        <li class="nav-item">
          <a class="nav-link" href="top.php#home">ホーム</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="top.php#news">ニュース</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="top.php#about">お店について</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="top.php#menu">商品</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="top.php#coupon">クーポン</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="top.php#shop">インフォメーション</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">お問い合わせ</a>
        </li>
      </ul>
      <p>
        <small>Copyright &copy;2021 GREEN FOREST GARDENING, All Rights Reserved.</small>
      </p>
    </div>
  </footer>
  <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>
