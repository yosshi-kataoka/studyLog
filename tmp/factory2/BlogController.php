<?php

declare(strict_types=1);

namespace MyApplication;

require_once dirname(__FILE__) . '/DatabaseModelFactory.php';
require_once dirname(__FILE__) . '/TestDatabaseModelFactory.php';


// ブログページを表示するクラス

class BlogController
{
  // DatabaseModelFactoryインスタンス
  private $modelFactory;

  // コンストラクタ
  public function __construct(bool $isTesting = false)
  {
    if ($isTesting) {
      $this->modelFactory = new TestDatabaseModelFactory();
    } else {
      $this->modelFactory = new DatabaseModelFactory();
    }
  }

  // ブログ記事ページを表示する
  public function show(int $userId, int $blogId): void
  {
    // ユーザー情報を取得する
    $user = $this->modelFactory->createUserModel()->find($userId);

    // ブログ記事を取得する。一旦非実装
    $blog = $this->modelFactory->createBlogModel()->find($blogId);

    // ブログ記事を表示する処理を今後実装
    echo $user . PHP_EOL;
    echo $blog . PHP_EOL;
  }
}

// メインルーチン
$controller = new BlogController(true);
$controller->show(1001, 2001);
