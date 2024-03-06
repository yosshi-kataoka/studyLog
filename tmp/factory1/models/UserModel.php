<?php

declare(strict_types=1);

namespace MyApplication\Models;

class UserModel
{
  // データベースからユーザー情報を取得する
  public function find(int $userId)
  {
    echo 'ID:' . $userId . 'を持つユーザー情報を取得しました。' . PHP_EOL;
  }
}
