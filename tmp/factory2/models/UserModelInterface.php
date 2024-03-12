<?php

declare(strict_types=1);

namespace MyApplication\Models;

interface UserModelInterface
{
  // ユーザー情報を取得する
  public function find(int $UserId);
}
