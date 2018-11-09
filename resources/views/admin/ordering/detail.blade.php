
@extends('admin.layouts.app')
@section('content')
<h1>発注詳細</h1>


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
@endsection
