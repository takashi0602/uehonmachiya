@extends('admin.layouts.app')
@section('content')
<h1>出庫詳細</h1>

<div class="col-lg-9">


    <div class="row">
        <div class="col-4">
            出庫番号
        </div>
        <div class="col-8">1</div>
    </div>
    <div class="row">
        <div class="col-4">
            出庫日
        </div>
        <div class="col-8"></div>
    </div>
    <div class="row">
        <div class="col-4">
            会社名
        </div>
        <div class="col-8"></div>
    </div>
    <div class="row">
        <div class="col-4">
            郵便番号
        </div>
        <div class="col-8"></div>
    </div>
    <div class="row">
        <div class="col-4">
            住所
        </div>
        <div class="col-8"></div>
    </div>
    <div class="row">
        <div class="col-4">
            商品番号
        </div>
        <div class="col-4">
            商品名
        </div>
        <div class="col-4">
            個数
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            1
        </div>
        <div class="col-4">
            C++プログラミング入門
        </div>
        <div class="col-4">
            1
        </div>
    </div>
    <div class="row">
        <div class="col">
            合計金額
        </div>

    </div>
</div>
<a href="{{ url('/admin/shipment') }}"><input type="button" class="btn btn-primary"value="戻る" ></a>
@endsection