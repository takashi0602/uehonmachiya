@extends('user.layouts.app')

@section('content')
  <h1>マイページ</h1>
  <h1>ユーザー情報</h1>
  <div class="form-group row">
    <label for="input名前3" class="col-sm-5 col-form-label">名前</label>
    <div class="col-sm-8">
      <input type="名前" class="form-control" id="input名前3" placeholder="名前">
    </div>
  </div>
  <div class="form-group row">
    <label for="input住所3" class="col-sm-5 col-form-label">住所</label>
    <div class="col-sm-8">
      <input type="住所" class="form-control" id="input住所3" placeholder="住所">
    </div>
  </div>
    <div class="form-group row">
      <label for="inputメールアドレス3" class="col-sm-5 col-form-label">メールアドレス</label>
      <div class="col-sm-8">
        <input type="メールアドレス" class="form-control" id="inputメールアドレス3" placeholder="メールアドレス">
      </div>
    </div>
      <div class="form-group row">
        <label for="input現在のポイント3" class="col-sm-5 col-form-label">現在のポイント</label>
        <div class="col-sm-8">
          <input type="現在のポイント" class="form-control" id="input現在のポイント3" placeholder="現在のポイント">
        </div>
      </div>
    </div>
  </div>
  <div>
      <a href="#" class="個人情報の変更はこちら">個人情報の変更はこちら</a>
  </div>
  <div>
     <a href="#" class="注文状況の確認">注文状況の確認</a>
  </div>
   <div>
     <a href="#" class="購入履歴の確認">購入履歴の確認</a>
   </div>
   <div>
     <a href="#" class="ギフトカード入力">ギフトカード入力</a>
   </div>
@endsection
