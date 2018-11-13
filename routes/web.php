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

  // ログイン
  Route::get('/login', function () {
    return view('admin.login');
  });

  // 商品一覧
  Route::get('/product', function () {
    return view('admin.product.index');
  });

  // 商品追加
  Route::get('/product/add', function () {
    return view('admin.product.add');
  });

  // 商品変更
  Route::get('/product/edit', function () {
    return view('admin.product.edit');
  });

  // 入庫先一覧
  Route::get('/supplier', function () {
    return view('admin.supplier.index');
  });

  // 入庫先追加
  Route::get('/supplier/add', function () {
    return view('admin.supplier.add');
  });

  // 入庫先変更
  Route::get('/supplier/edit', function () {
    return view('admin.supplier.edit');
  });

  // 会員一覧
  Route::get('/user', function () {
    return view('admin.user');
  });

  // 注文一覧
  Route::get('/order', function () {
    return view('admin.order.index');
  });

  // 注文詳細
  Route::get('/order/detail', function () {
    return view('admin.order.detail');
  });

  // 発注一覧
  Route::get('/ordering', function () {
    return view('admin.ordering.index');
  });

  // 発注詳細
  Route::get('/ordering/detail', function () {
    return view('admin.ordering.detail');
  });

  // 発注処理
  Route::get('/ordering/process', function () {
    return view('admin.ordering.process');
  });

  // 入庫一覧
  Route::get('/arrival', function () {
    return view('admin.arrival.index');
  });

  // 入庫詳細
  Route::get('/arrival/detail', function () {
    return view('admin.arrival.detail');
  });

  // 出庫一覧
  Route::get('/shipment', function () {
    return view('admin.shipment.index');
  });

  // 出庫詳細
  Route::get('/shipment/detail', function () {
    return view('admin.shipment.detail');
  });

  // 在庫一覧
  Route::get('/stock', function () {
    return view('admin.stock');
  });

  // 売り上げ一覧
  Route::get('/sales', function () {
    return view('admin.sales');
  });



  // ランキング一覧
  Route::get('/rank', function () {
    return view('admin.rank');
  });

  // お問い合わせ一覧
    Route::get('/contact', function () {
        return view('admin.contact');
    });

});

// 入庫先
Route::prefix('supplier')->group(function () {

  // ログイン
  Route::get('/login', function () {
    return view('supplier.login');
  });

  // 発注一覧
  Route::get('/ordering', function () {
    return view('supplier.ordering.index');
  });

  // 発注詳細
  Route::get('/ordering/detail', function () {
    return view('supplier.ordering.detail');
  });

  // 出庫済み一覧
  Route::get('/shipped', function () {
    return view('supplier.shipped.index');
  });

  // 出庫済み詳細
  Route::get('/shipped/detail', function () {
    return view('supplier.shipped.detail');
  });

});

// 会員
Route::get('/top', 'ProductController@index');

Route::get('login', 'Auth\LoginController@userLoginForm')->name('login');

Route::get('register', 'Auth\RegisterController@userRegistrationForm')->name('register');