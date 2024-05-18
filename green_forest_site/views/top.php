<body>
  <!--ヘッダ-->
  <header class="py-4">
    <div class="container text-center">
      <h1><a href="index.php"><img class="mw-100" src="img/logo.png" alt='ロゴ画像'></a></h1>
    </div>
  </header>
  <!-- ナビゲーションバー -->
  <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
    <!-- サブココンポーネント -->
    <div class="container">
      <!-- ブランド -->
      <a class="navbar-brand" href="index.php">GREEN FOREST GARDENING</a>
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
            <a class="nav-link " aria-current="page" href="#">ホーム</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">お店について</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">商品</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">クーポン</a>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              インフォメーション
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">お店</a></li>
              <li><a class="dropdown-item" href="#">アクセス</a></li>
            </ul>
          </li>
        </ul>
        <!-- 右側メニュー お問い合わせページへのリンク -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link btn btn-info" href="contact.html">お問い合わせ</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- メイン -->
  <main>
    <!--メインビジュアル-->
    <div class="py-4">
      <div class="container">
        <!-- カルーセル外枠 -->
        <div id="main_visual" class="carousel slide" data-bs-ride="carousel">
          <!-- インジケーター -->
          <ol class="carousel-indicators">>
            <li data-bs-target="#main_visual" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#main_visual" data-bs-slide-to="1"></li>
            <li data-bs-target="#main_visual" data-bs-slide-to="2"></li>
          </ol>
          <!-- カルーセル内側 -->
          <div class="carousel-inner">
            <!-- スライド -->
            <div class="carousel-item active">
              <img class="img-fluid" src="/green_forest_site/img/slide_01.jpg" alt="観葉植物写真">
              <div class="carousel-caption d-none d-md-block">
                <h2>GREEN FOREST GARDENINGのこだわり</h2>
                <p>すべては潤いある空間のために。森に包まれるような樹木がメインのガーデニングショップです。</p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="img-fluid" src="/green_forest_site/img/slide_02.jpg" alt="花々写真">
              <div class="carousel-caption d-none d-md-block">
                <h2>GREEN FOREST GARDENINGの品揃え</h2>
                <p>>選りすぐりの観葉植物、四季を彩る花木、実りの果樹をはじめ、ガーデニンググッズも充実しています。</p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="img-fluid" src="/green_forest_site/img/slide_03.jpg" alt="スペース写真">
              <div class="carousel-caption d-none d-md-block">
                <h2>GREEN FOREST GARDENINGの庭造り</h2>
                <p>庭園をぶらつく、カフェでくつろぐ、スタッフと話し込む。庭づくりのイメージを膨らませてください。</p>
              </div>
            </div>
          </div>
          <!-- コントローラー -->
          <a class="carousel-control-prev" href="#main_visual" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">前に戻る</span>
          </a>
          <a class="carousel-control-next" href="#main_visual" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">次に進む</span>
          </a>
        </div>
      </div>
    </div>
    <!-- コンテンツ01 -->
    <div class="py-4">

    </div>
    <!-- コンテンツ02 -->
    <div class="py-4">

    </div>
    <!-- コンテンツ03 -->
    <div class="py-4">

    </div>
    <!-- コンテンツ04 -->
    <div class="py-4">

    </div>
    <!-- コンテンツ05 -->
    <div class="py-4">

    </div>

  </main>
  <!-- フッター -->
  <footer>

  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>>
</body>
