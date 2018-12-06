@extends('admin.layouts.app')
@section('content')
<h1>入庫先一覧</h1>
<div><a href="http://127.0.0.1:8000/admin/supplier/add">入庫先の追加</a></div>
<div><a href="http://127.0.0.1:8000/admin/supplier/edit">入庫先の編集</a></div>
<div>▼詳細検索</div>

<table class="table">
    <thead>
    <tr>
        <th scope="col">NO(入庫番号)</th>
        <th scope="col">入庫先名</th>
        <th scope="col">入庫先郵便番号</th>
        <th scope="col">入庫先電話番号(TEL)</th>
        <th scope="col">メールアドレス</th>
        <th scope="col">代表者名</th>
    </thead>
    </tr>
    <tbody>
    @foreach($suppliers as $supplier)
    <tr>
        <th scope="row">1</th>
        <td><p>{{$supplier->name}}</p></td>
        <td><p>{{$supplier->postal}}</p></td>
        <td><p>{{$supplier->tel}}</p></td>
        <td><p>{{$supplier->email}}</p></td>
        <td><p>{{$supplier->president}}</p></td>
    </tr>
    </tbody>
    @endforeach
</table>
    @endsection