<?php

declare(strict_types=1);

namespace MyApplication;

// 一旦、UserModel,BlogModelを使用します。
use MyApplication\Models\UserModelInterface;
use MyApplication\Models\BlogModelInterface;
// use MyApplication\Models\FriendModelInterface;
// use MyApplication\Models\BlogCategoryModelInterface;
use MyApplication\Models\Testing\TestUserModel;
use MyApplication\Models\Testing\TestBlogModel;
// use MyApplication\Models\Testing\FriendModel;
// use MyApplication\Models\Testing\BlogCategoryModel;
require_once dirname(__FILE__) . '/AbstractDatabaseModelFactory.php';
// 一旦、UserModel.php,BlogModel.phpを使用します。
require_once dirname(__FILE__)  . '/models/testing/TestUserModel.php';
require_once dirname(__FILE__)  . '/models/testing/TestBlogModel.php';
// require_once dirname(__FILE__) . '/models/testing/TestFriendModel.php';
// require_once dirname(__FILE__) . '/models/testing/TestBlogCategoryModel.php';

// テストデータ用モデルクラスのインスタンスを返すFactoryクラス
class TestDatabaseModelFactory extends AbstractDatabaseModelFactory
{
  // UserModelインスタンスを返す。一旦このUserModelインスタンスのみ使用。
  public function createUserModel(): UserModelInterface
  {
    return new TestUserModel();
  }

  // TestBlogModelインスタンスを返す
  public function createBlogModel(): BlogModelInterface
  {
    return new TestBlogModel();
  }

  // TestFriendModelインスタンスを返す。
  // public function createFriendModel(): FriendModelInterface
  // {
  //   return new TestFriendModel();
  // }
  // TestBlogCategoryModelインスタンスを返す
  // public function createBlogCategoryModel(): BlogCategoryModelInterface
  // {
  //   return new TestaBlogCategoryModel();
  // }


}
