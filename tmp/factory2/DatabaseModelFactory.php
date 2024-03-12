<?php

declare(strict_types=1);

namespace MyApplication;

// 一旦、UserModel,BlogModelを使用します。
use MyApplication\Models\UserModelInterface;
use MyApplication\Models\BlogModelInterface;
// use MyApplication\Models\FriendModelInterface;
// use MyApplication\Models\BlogCategoryModelInterface;
use MyApplication\Models\Production\UserModel;
use MyApplication\Models\Production\BlogModel;
// use MyApplication\Models\Production\FriendModel;
// use MyApplication\Models\Production\BlogCategoryModel;
require_once dirname(__FILE__) . '/AbstractDatabaseModelFactory.php';
// 一旦、UserModel.php,BlogModel.phpを使用します。
require_once dirname(__FILE__) . '/models/production/UserModel.php';
require_once dirname(__FILE__) . '/models/production/BlogModel.php';
// require_once dirname(__FILE__) . '/models/production/FriendModel.php';
// require_once dirname(__FILE__) . '/models/production/BlogCategoryModel.php';

// データベースに接続するモデルクラスのインスタンスを返すFactoryクラス
class DatabaseModelFactory extends AbstractDatabaseModelFactory
{
  // UserModelインスタンスを返す。一旦このUserModelインスタンスのみ使用。
  public function createUserModel(): UserModelInterface
  {
    return new UserModel();
  }

  // BlogModelインスタンスを返す
  public function createBlogModel(): BlogModelInterface
  {
    return new BlogModel();
  }

  // FriendModelインスタンスを返す。
  // public function createFriendModel(): FriendModelInterface
  // {
  //   return new FriendModel();
  // }
  // BlogCategoryModelインスタンスを返す
  // public function createBlogCategoryModel(): BlogCategoryModelInterface
  // {
  //   return new BlogCategoryModel();
  // }


}
