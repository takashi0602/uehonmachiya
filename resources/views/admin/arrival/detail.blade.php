@extends('admin.layouts.app')
@section('content')
<h1>入庫詳細</h1>


<div class="col-lg-9">


    <div class="row">
        <div class="col-4">
            入庫番号
        </div>
        <div class="col-8">1</div>
    </div>
    <div class="row">
        <div class="col-4">
            発注番号
        </div>
        <div class="col-8"></div>
    </div>
    <div class="row">
        <div class="col-4">
            入庫日
        </div>
        <div class="col-8"></div>
    </div>
    <div class="row">
        <div class="col-4">
            入庫先
        </div>
        <div class="col-8"></div>
    </div>
    <div class="row">
        <div class="col-4">
            発注者
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
            商品番号
        </div>

    </div>
</div>

<a href="{{ url('/admin/arrival') }}"><input type="button" class="btn btn-primary"value="戻る" ></a>





    @endsection