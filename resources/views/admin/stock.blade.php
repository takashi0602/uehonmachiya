@extends('admin.layouts.app')
@section('content')
<h1>在庫一覧</h1>

<div><a href="http://127.0.0.1:8000/admin/ordering/process">発注処理をする</a></div>

<div>▼詳細検索</div>




<table class="table">
    <thead>
    <tr>
        <th scope="col">NO.(商品番号)</th>
        <th scope="col">商品名</th>
        <th scope="col">在庫数</th>
        <th scope="col">安全在庫数</th>
    </tr>
    </thead>

    @foreach($stocks as $stock)

    <tr>
        <th scope="row">{{$stock->id}}</th>
        <td>{{ $products[$count++]->name }}</td>
        <td>{{$stock->amount}}</td>
        <td>{{$stock->safety}}</td>
    </tr>
        @endforeach
</table>
    @endsection