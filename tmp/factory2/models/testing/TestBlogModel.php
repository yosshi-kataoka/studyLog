<?php

declare(strict_types=1);

namespace MyApplication\Models\Testing;

use MyApplication\Models\BlogModelInterface;

require_once dirname(__FILE__) . '/../UserModelInterface.php';
class TestBlogModel implements BlogModelInterface
{
  // データベースからブログ記事を取得する
  public function find(int $blogId)
  {
    echo 'ID:' . $blogId . 'を持つブログ記事(テスト用の固定値)を取得しました。' . PHP_EOL;
  }
}
