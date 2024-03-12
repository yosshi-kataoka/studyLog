<?php

declare(strict_types=1);

namespace MyApplication;

// 一旦、UserModelInterface,BlogModelInterfaceを使用します。
use MyApplication\Models\UserModelInterface;
use MyApplication\Models\BlogModelInterface;
// use MyApplication\Models\FriendModelInterface;
// use MyApplication\Models\BlogCategoryInterface;

abstract class AbstractDatabaseModelFactory
{
  // 一旦、createUserModel(),createBlogModel()を定義します。
  abstract public function createUserModel(): UserModelInterface;
  abstract public function createBlogModel(): BlogModelInterface;
  // abstract public function createBlogCategoryModel(): BlogCategoryModelInterface;
  // abstract public function createFriendModel(): FriendModelInterface;
}
