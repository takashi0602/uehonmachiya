<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// 管理者
Route::prefix('admin')->group(function () {
  Route::group(['middleware' => 'auth.very_basic'], function(){

    // 商品一覧
    Route::get('/product', 'Admin\ProductController@index');

    // 商品編集
    Route::get('/product/edit/{id}', 'Admin\ProductController@edit');
    Route::post('/product/edit', 'Admin\ProductController@post');

    // 商品追加
    Route::get('/product/add', 'Admin\ProductController@add');

    // 商品追加機能
    Route::post('/product/add/create', 'Admin\ProductController@create');

    // 商品変更
    Route::get('/product/edit', function () {
      return view('admin.product.edit');
    });

    // 入庫先一覧
    Route::get('/supplier', 'Admin\SupplierController@index');

    // 入庫先追加
    Route::get('/supplier/add', 'Admin\SupplierController@add');

    // 入庫先追加機能
    Route::post('/supplier/add/create', 'Admin\SupplierController@create');

    // 入庫先変更
    Route::get('/supplier/edit', function () {
      return view('admin.supplier.edit');
    });

    // 会員一覧
    Route::get('/customer', 'Admin\CustomerController@index');

    // 注文一覧
    Route::get('/order', 'Admin\OrderController@index');

    // 注文->出庫
    Route::post('/order/shipment', 'Admin\OrderController@shipment');

    // 注文詳細
    Route::get('/order/detail', function () {
      return view('admin.order.detail');
    });

    // 発注一覧
    Route::get('/ordering', 'Admin\OrderingController@index');

    // 発注詳細
    Route::get('/ordering/detail', function () {
      return view('admin.ordering.detail');
    });

    // 発注処理
    Route::get('/ordering/process', 'Admin\OrderingController@process');

    // 発注作成
    Route::post('/ordering/process/create', 'Admin\OrderingController@create');

    // 入庫一覧
    Route::get('/arrival', 'Admin\ArrivalController@index');

    // 入庫処理
    Route::post('/arrival/processing', 'Admin\ArrivalController@processing');

    // 入庫詳細
    Route::get('/arrival/detail', function () {
      return view('admin.arrival.detail');
    });

    // 出庫一覧
    Route::get('/shipment', 'Admin\ShipmentController@index');

    // 出庫詳細
    Route::get('/shipment/detail', function () {
      return view('admin.shipment.detail');
    });

    // 在庫一覧
    Route::get('/stock', 'Admin\StockController@index');
    Route::post('/stock', 'Admin\StockController@index');

    // 売り上げ一覧
    Route::get('/sales', 'Admin\SalesController@index');

    // ランキング一覧
    Route::get('/rank', 'Admin\RankController@index');

    // ギフトコード
    Route::get('/gift', 'Admin\GiftController@index');
    Route::post('/gift/create', 'Admin\GiftController@create');
  });

  // お問い合わせ一覧 TODO: 時間があれば
//  Route::get('/contact', function () {
//      return view('admin.contact');
//  });

});

// 入庫先
Route::prefix('supplier')->group(function () {

  // ログイン
  Route::get('/login', 'Supplier\LoginController@supplierLoginForm');
  Route::post('/login', 'Supplier\LoginController@authenticate');

  // ログアウト
  Route::post('/logout', 'Supplier\LoginController@logout');

  // ユーザー情報
  Route::get('/mypage', 'Supplier\MyPageController@index');

  // ユーザー情報変更
  Route::get('/mypage/edit', 'Supplier\MyPageController@edit');
  Route::post('/mypage/edit/post', 'Supplier\MyPageController@post');

  // 発注一覧
  Route::get('/ordering', 'Supplier\OrderingController@index');

  // 出庫処理
  Route::post('/ordering/shipment', 'Supplier\OrderingController@shipment');

  // 出庫済み一覧
  Route::get('/shipped', 'Supplier\ShippedController@index');

});

// 会員
// トップ
Route::get('/', 'TopController@index');

// ログイン
Route::get('login', 'Auth\LoginController@userLoginForm')->name('login');

// 登録
Route::get('register', 'Auth\RegisterController@userRegistrationForm')->name('register');

// カート
Route::get('/cart', 'CartController@index');

// カート追加
Route::post('/cart/add', 'CartController@add');

// カート削除
Route::post('/cart/delete', 'CartController@delete');

// 商品・お届け先確認
Route::get('/confirm', 'CartController@confirm');

// 商品購入確定
Route::post('/finish', 'CartController@finish');

// 購入確定
Route::get('/decision', 'CartController@decision');

// マイページ
Route::get('/mypage', 'MyPageController@index');

// 個人情報編集
Route::get('/mypage/edit', 'MyPageController@edit');

// 個人情報編集送信
Route::post('/mypage/edit/post', 'MyPageController@post');

// 注文状況
Route::get('/mypage/order', 'MyPageController@order');

// ギフトコード入力
Route::get('/mypage/gift', 'MyPageController@gift');

// ポイントの加算
Route::post('/mypage/gift/add', 'MyPageController@add');

// お問い合わせ
//Route::get('/contact', function () {
//  return view('user.contact');
//});