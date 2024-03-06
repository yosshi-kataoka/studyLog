<?php

declare(strict_types=1);

namespace MyApplication;

// 一旦、UserModel,BlogModelを使用します。
use MyApplication\Models\UserModel;
use MyApplication\Models\BlogModel;
// use MyApplication\Models\FriendModel;
// use MyApplication\Models\BlogCategoryModel;

// 一旦、UserModel.php,BlogModel.phpを使用します。
require_once dirname(__FILE__) . '/models/UserModel.php';
require_once dirname(__FILE__) . '/models/BlogModel.php';
// require_once dirname(__FILE__) . '/models/FriendModel.php';
// require_once dirname(__FILE__) . '/models/BlogCategoryModel.php';

// データベースアクセスクラスのインスタンスを返すFactoryクラス
class DatabaseModelFactory
{
  // UserModelインスタンスを返す。一旦このUserModelインスタンスのみ使用。
  public function createUserModel(): UserModel
  {
    return new UserModel();
  }

  // BlogModelインスタンスを返す
  public function createBlogModel(): BlogModel
  {
    return new BlogModel();
  }

  // FriendModelインスタンスを返す。
  // public function createFriendModel(): FriendModel
  // {
  //   return new FriendModel();
  // }
  // BlogCategoryModelインスタンスを返す
  // public function createBlogCategoryModel(): BlogCategoryModel
  // {
  //   return new BlogCategoryModel();
  // }


}
