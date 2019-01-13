@extends('supplier.layouts.app')

@include('supplier.header')

@section ('content')
  <h3>ユーザー情報の変更</h3>
  <form action="{{ url('/supplier/mypage/edit/post') }}" method="post">
    @csrf
    <div class="row mb-3">
      <span class="col-sm-3">名前</span>
      <div class="col-sm-9">
        <input type="text" class="form-control" value="{{ $supplier->name }}" name="name">
      </div>
    </div>
    <div class="row mb-3">
      <span class="col-sm-3">代表者</span>
      <div class="col-sm-9">
        <input type="text" class="form-control" value="{{ $supplier->president }}" name="president">
      </div>
    </div>
    <div class="row mb-3">
      <span class="col-sm-3">郵便番号</span>
      <div class="col-sm-9">
        <input type="text" class="form-control" value="{{ $supplier->postal }}" name="postal">
      </div>
    </div>
    <div class="row mb-3">
      <span class="col-sm-3">住所</span>
      <div class="col-sm-9">
        <input type="text" class="form-control" value="{{ $supplier->address }}" name="address">
      </div>
    </div>
    <div class="row mb-3">
      <span class="col-sm-3">メールアドレス</span>
      <div class="col-sm-9">
        <input type="email" class="form-control" value="{{ $supplier->email }}" name="email">
      </div>
    </div>
    <div class="row mb-4">
      <span class="col-sm-3">電話番号</span>
      <div class="col-sm-9">
        <input type="text" class="form-control" value="{{ $supplier->tel }}" name="tel">
      </div>
    </div>
    <div class="row mb-4">
      <span class="col-sm-3">パスワード</span>
      <div class="col-sm-9">
        <input type="password" class="form-control" value="" name="password">
      </div>
    </div>
    <div class="text-right mb-4">
      <button type="submit" class="btn btn-primary">変更</button>
    </div>
    <div class="text-right">
      <a href="{{ url('/supplier/mypage') }}">ユーザー情報に戻る</a>
    </div>
  </form>
@endsection

