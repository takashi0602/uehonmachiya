
@extends('admin.layouts.app')
@section('content')

<h1>発注詳細</h1>


<<<<<<< HEAD
<table class="table">
    <thead>
    <tr>
        <th scope="col">発注番号</th>
        <th scope="col">発注日</th>
        <th scope="col">入庫日</th>
        <th scope="col">発注者</th>
        <th scope="col">商品番号</th>
        <th scope="col">合計金額</th>
    </tr>

    </thead>
    <tbody>
    <tr>
        <th scope="row">1</th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
    </tr>

    </tbody>
</table>
<a href="{{ url('/admin/ordering') }}"><input type="button" value="戻る"></a>
=======
    <div class="row">
        <div class="col-4">
            発注番号
        </div>
        <div class="col-8">1</div>
    </div>
    <div class="row">
        <div class="col-4">
            発注日
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

    <th><a href="{{ url('/admin/ordering') }}"><input type="button" class="btn btn-primary" value="戻る"></a></th>
>>>>>>> da1cf008acabe0581671d747282c762e144684f6
@endsection
