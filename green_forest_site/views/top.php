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
    <div class="py-4 bg-light">
      <section id="about">
        <div class="container">
          <!-- 上段 -->
          <div class="row mb-4">
            <div class="col-md-8 mb-3">
              <h3 class="mb-3">GREEN FOREST GARDENINGについて</h3>
              <p>GREEN FOREST GARDENING(グリーンフォレストガーデニング)は、広大な森の真ん中にあるガーデニングショップです。コンセプトは、「ありのままに」。広大な敷地では、自然をそのまま持ってきたような樹木がおのおのの姿を誇ります。1本1本の芽生えから愛情込めて育て上げた樹木がお客様との出会いを楽しみにしております。ぜひGREEN FOREST GARDENINGにお越しください。</p>
              <a href="#" class="btn btn-info">商品を見る</a>
              <a href="#" class="btn btn-info">店舗情報を見る</a>
            </div>
            <div class="col-md-4">
              <img src="/green_forest_site/img/about01.jpg" alt="一本一本を育むように" class="img-fluid">
            </div>
          </div>
          <!-- 下段 -->
          <div class="row">
            <div class="col-md-4">
              <div class="card mb-3">
                <img src="/green_forest_site/img/about02-thumb.jpg" alt="" class="img-fluid">
                <div class="card-body d-flex justify-content-between">
                  <h4 class="card-title">広大な敷地</h4>
                  <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modal01">詳しく見る</button>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-3">
                <img src="/green_forest_site/img/about03-thumb.jpg" alt="" class="img-fluid">
                <div class="card-body d-flex justify-content-between">
                  <h4 class="card-title">カフェコーナー</h4>
                  <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modal02">詳しく見る</button>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-3">
                <img src="/green_forest_site/img/about04-thumb.jpg" alt="" class="img-fluid">
                <div class="card-body d-flex justify-content-between">
                  <h4 class="card-title">スタッフ</h4>
                  <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modal03">詳しく見る</button>
                </div>
              </div>
            </div>
          </div>
          <!-- Modal -->
          <!-- モーダル１ -->
          <div class="modal fade" id="modal01" tabindex="-1" role="dialog" aria-labelledby="modal01-label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="modal01-label">広大な敷地</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <p class="text-center">
                    <img src="/green_forest_site/img/about02.jpg" alt="敷地の写真" class="img-fluid">
                  </p>
                  <p>立地を活かした広大な店舗が自慢です。随所に植えられた木々たちをご覧になりながら、ご自分のお庭のイメージを膨らませてください。</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">閉じる</button>
                </div>
              </div>
            </div>
          </div>
          <!-- モーダル２ -->
          <div class="modal fade" id="modal02" tabindex="-1" role="dialog" aria-labelledby="modal02-label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="modal02-label">カフェコーナー</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <p class="text-center">
                    <img src="/green_forest_site/img/about03-thumb.jpg" alt="" class="img-fluid">
                  </p>
                  <p>自然を大に感じられる空間で味わうコーヒーは日々の喧騒を忘れさせてくれます。</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">閉じる</button>
                </div>
              </div>
            </div>
          </div>
          <!-- モーダル3 -->
          <div class="modal fade" id="modal03" tabindex="-1" role="dialog" aria-labelledby="modal03-label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="modal03-label">スタッフ</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <p class="text-center">
                    <img src="/green_forest_site/img/about04-thumb.jpg" alt="" class="img-fluid">
                  </p>
                  <p>経験豊富なスタッフが、お客様の庭造りを一からサポートを致します。</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">閉じる</button>
                </div>
              </div>
            </div>
          </div>

        </div>
      </section>
    </div>
    <!-- コンテンツ03 -->
    <div class="py-4">
      <section id="menu">
        <div class="container">
          <h3 class="mb-3">商品</h3>
          <p>ガーデニングショップGREEN FOREST GARDENINGの定番商品です。掲載していない季節限定商品はGREEN FOREST GARDENINGの
            <a href="#">ブログ</a>にて紹介しています。
          </p>
          <!-- タブ型ナビゲーション -->
          <div class="nav nav-tabs" id="tab-menus" role="tablist">
            <!-- タブ01 -->
            <a class="nav-item nav-link active" id="tab-menu01" data-bs-toggle="tab" href="#panel-menu01" role="tab" aria-controls="panel-menu01" aria-selected="true">観葉植物</a>
            <!-- タブ02 -->
            <a class="nav-item nav-link" id="tab-menu02" data-bs-toggle="tab" href="#panel-menu02" role="tab" aria-controls="panel-menu02" aria-selected="false">花木</a>
            <!-- タブ03 -->
            <a class="nav-item nav-link" id="tab-menu03" data-bs-toggle="tab" href="#panel-menu03" role="tab" aria-controls="panel-menu03" aria-selected="false">果樹</a>
            <!-- タブ04 -->
            <a class="nav-item nav-link" id="tab-menu04" data-bs-toggle="tab" href="#panel-menu04" role="tab" aria-controls="panel-menu04" aria-selected="false">園芸用品</a>
          </div>
          <!-- <タブパネル> -->
          <div class="tab-content" id="panel-menus">
            <!-- パネル01 -->
            <div class="tab-pane fade show active border border-top-0" id="panel-menu01" role="tabpanel" aria-labelledby="tab-menu01">
              <div class="row p-3">
                <div class="col-md-7 order-md-2">
                  <h4>観葉植物</h4>
                  <table class="table table-striped">
                    <tbody>
                      <tr>
                        <th>オーガスタ</th>
                        <td>5,000円(税別)~</td>
                      </tr>
                      <tr>
                        <th>パキラ</th>
                        <td>10,000円(税別)~</td>
                      </tr>
                      <tr>
                        <th>幸福の木</th>
                        <td>12,000円(税別)~</td>
                      </tr>
                      <tr>
                        <th>モンステラ</th>
                        <td>11,000円(税別)~</td>
                      </tr>
                      <tr>
                        <th>エバーフレッシュ</th>
                        <td>20,000円(税別)~</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="col-md-5">
                  <img src="/green_forest_site/img/house_plants.jpg" alt="観葉植物" class="img-fluid">
                </div>
              </div>
            </div>
            <!-- パネル02 -->
            <div class="tab-pane fade border border-top-0" id="panel-menu02" role="tabpanel" aria-labelledby="tab-menu02">
              <div class="row p-3">
                <div class="col-md-7 order-md-2">
                  <h4>花木</h4>
                  <table class="table table-striped">
                    <tbody>
                      <tr>
                        <th>みかん</th>
                        <td>1,500円(税別)~</td>
                      </tr>
                      <tr>
                        <th>オリーブ</th>
                        <td>1,5000円(税別)~</td>
                      </tr>
                      <tr>
                        <th>びわ</th>
                        <td>3,000円(税別)~</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="col-md-5">
                  <img src="img/flowering_trees.jpg" alt="花木" class="img-fluid">
                </div>
              </div>
            </div>
            <!-- パネル03 -->
            <div class="tab-pane fade border border-top-0" id="panel-menu03" role="tabpanel" aria-labelledby="tab-menu03">
              <div class="row p-3">
                <div class="col-md-7 order-md-2">
                  <h4>果樹</h4>
                  <table>
                    <tbody>
                      <tr>
                        <th>もも</th>
                        <td>4,500円(税別)~</td>
                      </tr>
                      <tr>
                        <th>ぶどう</th>
                        <td>14,500円(税別)~</td>
                      </tr>
                      <tr>
                        <th>りんご</th>
                        <td>23,000円(税別)~</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="col-md-5">
                  <img src="/green_forest_site/img/fruit_trees.jpg" alt="果樹" class="img-fluid">
                </div>
              </div>
            </div>
            <!-- パネル04 -->
            <div class="tab-pane fade border border-top-0" id="panel-menu04" role="tabpanel" aria-labelledby="tab-menu04">
              <div class="row p-3">
                <div class="col-md-7 order-md-2">
                  <h4>園芸用品</h4>
                  <table>
                    <tbody>
                      <tr>
                        <th>軍手</th>
                        <td>200円(税別)~</td>
                      </tr>
                      <tr>
                        <th>散水機</th>
                        <td>10,000円(税別)~</td>
                      </tr>
                      <tr>
                        <th>ジョウロ</th>
                        <td>1,200円(税別)~</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="col-md-5">
                  <img src="/green_forest_site/img/gardening_tools.jpg" alt="園芸用品" class="img-fluid">
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

    <!-- コンテンツ04 -->
    <div class="py-4 bg-light">
      <section id="coupon">
        <div class="container">
          <h3 class="text-center mb-3">クーポン</h3>
          <div class="card text-center text-dark w-75 mx-auto">
            <div class="card-header bg-success text-white">サービスクーポン</div>
            <div class="card-body">
              <h5 class="card-title">ドリンクをペアでご提供</h5>
              <p class="card-text">期間中、5,000円(税別)以上のお買い物をされたお客様に、ドリンクをペアでサービスいたします。お会計の際に、このクーポン画面をスタッフにお見せください。</p>
            </div>
            <div class="card-footer bg-success text-white">
              クーポンコード:HAPPY GARDEN
            </div>
          </div>
        </div>
      </section>
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
