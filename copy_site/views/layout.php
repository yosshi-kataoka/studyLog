<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $title ?></title>
  <link rel="stylesheet" href="stylesheets/css/app.css">
  <link rel="stylesheet" href=" https://use.fontawesome.com/releases/v6.5.2/css/all.css">
</head>

<body>
  <!-- <header>
    <div class="container-fluid" style="height:100px;background-color:#212222; border-bottom: 0.01px solid #cfcfcf;">
    </div>
  </header> -->
  <nav class="navbar navbar-expand d-flex align-items-center sticky-top mb-4 p-2" style="background-color:#212121;">
    <div class="container-fluid ">
      <a class="navbar-brand p-2" href="#"><img src="/copy_site/img/progate1.svg" class="img-fluid" alt="ロゴ画像" width="100" height="50"></a>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <a class="p-2 m-2 header-link ms-auto d-none d-md-block" href="#">法人プラン</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="btn dropdown-main dropdown-toggle p-2 m-2" id="navbarDropdownMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                言語
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenu">
                <li><a class="dropdown-item" href="#">日本語</a></li>
                <li><a class="dropdown-item" href="#">English</a></li>
              </ul>
            </li>
          </ul>
        </ul>
      </div>
      <div class="p-2 m-2 header-link">ログイン</div>
      <a class="p-2 m-2 btn-custom rounded-1 fs-6" href="#">無料会員登録</a>
    </div>
  </nav>
  <?php include $content; ?>
  <footer>
    <div class="container-fluid pt-5" style="height:500px; background-color:#0d0d0d">
      <div class="container px-5">
        <div class="row">
          <div class="col-4 d-flex flex-column footer-sub-heading">
            <img src="/copy_site/img/progate1.svg" style="width:100px; height:50px;" alt="ロゴ画像">
            <p href="#" style="margin-top:80px;">アプリ版のダウンロードはこちら</p>
            <a href="#"><img src="/copy_site/img/progate14.svg"></a>
            <a class="mt-2" href="#"><img src="/copy_site/img/progate15.svg"></a>
            <p class="footer-inc" style="margin-top:80px;">© 2014 Progate, Inc.</p>
          </div>
          <div class="col-2 d-flex flex-column">
            <p class="h5 footer-main-heading">サービス</p>
            <a class="text-decoration-none footer-link" href="#">コース一覧</a>
            <a class="text-decoration-none footer-link mt-2" href="#">有料会員プラン</a>
            <a class="text-decoration-none footer-link mt-2" href="#">Progate Professional</a>
            <a class="text-decoration-none footer-link mt-2" href="#">中学・高校向けプラン</a>
            <a class="text-decoration-none footer-link mt-2" href="#">Progate Journey</a>
            <a class="text-decoration-none footer-link mt-2" href="#">サクセスストーリー</a>
            <a class="text-decoration-none footer-link mt-2" href="#">Progate Path</a>
            <a class="text-decoration-none footer-link mt-2" href="#">ヘルプ</a>
          </div>
          <div class="col-2 d-flex flex-column">
            <p class="h5 footer-main-heading">サポート</p>
            <a class="text-decoration-none footer-link" href="#">運営会社</a>
            <a class="text-decoration-none footer-link mt-2" href="#">採用情報</a>
            <a class="text-decoration-none footer-link mt-2" href="#">利用規約</a>
            <a class="text-decoration-none footer-link mt-2" href="#">法人プラン利用規約</a>
            <a class="text-decoration-none footer-link mt-2" href="#">特定商取引法に基づく表示</a>
            <a class="text-decoration-none footer-link mt-2 mb-2" href="#">プライバシーポリシー</a>
            <p class="h5 mt-4" href="#">SNS</p>
            <a class="text-decoration-none footer-link mt-2" href="#">Facebook</a>
            <a class="text-decoration-none footer-link mt-2" href="#">X(Twitter)</a>
          </div>
          <div class="col-4 d-flex flex-column">
            <p class="h5 footer-main-heading">法人向けサービス</p>
            <a href="#" class="card footer-logo-link">
              <img src=" /copy_site/img/progate18.svg" class="m-3" style=" width:200px; height:25px;" alt="ロゴ画像">
            </a>
            <div class="card p-3 rounded-0 mt-4" style="max-width:248px;font-size:small; background-color:#212121; color:#6783a0;">企業のプログラミング研修を支援する、法人のお客様向けの利用プランです。</div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>
