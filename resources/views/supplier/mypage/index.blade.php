@extends('supplier.layouts.app')

@include('supplier.header')

@section ('content')
  <h3>ユーザー情報</h3>
  <div class="row mb-3">
    <span class="col-sm-3">名前</span>
    <div class="col-sm-9">{{ $supplier->name }}</div>
  </div>
  <div class="row mb-3">
    <span class="col-sm-3">代表者</span>
    <div class="col-sm-9">{{ $supplier->president }}</div>
  </div>
  <div class="row mb-3">
    <span class="col-sm-3">郵便番号</span>
    <div class="col-sm-9">〒{{ $supplier->postal }}</div>
  </div>
  <div class="row mb-3">
    <span class="col-sm-3">住所</span>
    <div class="col-sm-9">{{ $supplier->address }}</div>
  </div>
  <div class="row mb-3">
    <span class="col-sm-3">メールアドレス</span>
    <div class="col-sm-9">{{ $supplier->email }}</div>
  </div>
  <div class="row mb-4">
    <span class="col-sm-3">電話番号</span>
    <div class="col-sm-9">{{ $supplier->tel }}</div>
  </div>
  <h3>出庫先情報</h3>
  <div class="row mb-3">
    <span class="col-sm-3">出庫先名</span>
    <div class="col-sm-9">{{ env('USER_COMPANY_NAME') }}</div>
  </div>
  <div class="row mb-3">
    <span class="col-sm-3">郵便番号</span>
    <div class="col-sm-9">〒{{ env('USER_POSTAL') }}</div>
  </div>
  <div class="row mb-3">
    <span class="col-sm-3">住所</span>
    <div class="col-sm-9">{{ env('USER_ADDRESS') }}</div>
  </div>
  <div class="row mb-3">
    <span class="col-sm-3">メールアドレス</span>
    <div class="col-sm-9">{{ env('USER_EMAIL') }}</div>
  </div>
  <div class="row mb-4">
    <span class="col-sm-3">電話番号</span>
    <div class="col-sm-9">{{ env('USER_TEL') }}</div>
  </div>
  <div class="mb-1">
    <a href="{{ url("/supplier/mypage/edit") }}">ユーザー情報の変更</a>
  </div>
@endsection

