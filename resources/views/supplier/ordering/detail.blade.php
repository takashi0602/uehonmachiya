@extends('supplier.layouts.app')
@section ('content')
<h1>発注詳細</h1>

<div class="container">
    <div class="row">
        <div class="pb-3 col">
            発注日
        </div>
        <div class="col">
            ２０１８年１２月１日
        </div>
    </div>

    <div class="row">
        <div class="pb-3 col">
            発注コード
        </div>
        <div class="col">
        </div>
    </div>

    <div class="row">
    <div class="pb-3 col">
        商品コード
    </div>
    <div class="col">
        商品名
    </div>
    <div class="col">
        個数
    </div>

</div>
    <div class="row">
        <div class="pb-3 col">
            ２０３
        </div>
        <div class="col">
            羅生門
        </div>
        <div class="col">
            １
        </div>
    </div>
    <div class="row">
        <div class="pb-3 col">
            発注先名
        </div>
        <div class="my-8 col-sm-8">
            上本町屋
        </div>
    </div>
    <div class="row">
        <div class="pb-3 col">
            発注先住所
        </div>
        <div class="my-8 col-sm-8">
            〒000-0000
        </div>
    </div>
    <div class="row">
        <div class="col">

        </div>
        <div class="pb-3 my-8 col-sm-8">
            大阪府
        </div>
    </div>
    <div class="row">
        <div class="pb-3 col">
            合計金額
        </div>
        <div class="my-8 col-sm-8">
            １０００円
        </div>
    </div>



<input type="button" value="戻る">

    <input type="button" value="出庫する">
@endsection
