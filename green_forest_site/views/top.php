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
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#main_visual" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#main_visual" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#main_visual" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
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
      <section id="news">
        <div class="container">
          <div class="row">
            <!-- 左側カラム(画面幅md以上) -->
            <div class="col-md-2">
              <h3>ニュース</h3>
            </div>
            <!-- 右側カラム(画面幅md以上) -->
            <div class="col-md-10">
              <dl class="row">
                <dt class="col-md-3">2021年0月0日</dt>
                <dd class="col-md-9">ドリンクサービスクーポン配布中です</dd>
                <dt class="col-md-3">2021年0月0日</dt>
                <dd class="col-md-9">この季節だけの花木を追加しました</dd>
                <dt class="col-md-3">2021年0月0日</dt>
                <dd class="col-md-9">新しいプランター入荷しました</dd>
              </dl>
            </div>
          </div>
        </div>
      </section>
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
