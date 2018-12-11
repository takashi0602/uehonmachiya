@extends('user.layouts.app')

@section('content')
  <h1 class="mb-5">マイページ</h1>
  <h3 class="mb-3">ユーザー情報</h3>
  <div class="row mb-3">
    <span class="col-sm-3">名前</span>
    <div class="col-sm-9">{{ $user->name }}</div>
  </div>
  <div class="row mb-3">
    <span class="col-sm-3">郵便番号</span>
    <div class="col-sm-9">{{ $user->postal }}</div>
  </div>
  <div class="row mb-3">
    <span class="col-sm-3">住所</span>
    <div class="col-sm-9">{{ $user->address }}</div>
  </div>
  <div class="row mb-3">
    <span class="col-sm-3">メールアドレス</span>
    <div class="col-sm-9">{{ $user->email }}</div>
  </div>
  <div class="row mb-5">
    <span class="col-sm-3">現在のポイント</span>
    <div class="col-sm-9">{{ $user->point }}pt</div>
  </div>
  <div class="mb-1">
      <a href="{{ url("/mypage/edit") }}">個人情報の変更</a>
  </div>
  <div class="mb-1">
     <a href="{{ url("/mypage/order") }}">注文履歴の確認</a>
  </div>
  <div class="mb-1">
    <a href="{{ url("/mypage/gift") }}">ギフトカード入力</a>
  </div>
@endsection
