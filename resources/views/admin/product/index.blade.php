@extends('admin.layouts.app')
@section('content')
<h1>商品一覧</h1>
<tr>
    <th><a href="{{ url('/admin/product/add') }}">商品の追加</a></th>
    <th><a href="{{ url('/admin/product/edit') }}">商品の編集</a></th>
</tr>




<table class="table">
    <thead>
    <tr>
        <th scope="col">NO.(商品番号)</th>
        <th scope="col">著者</th>
        <th scope="col">商品名</th>
        <th scope="col">仕入価格</th>
        <th scope="col">販売価格</th>
        <th scope="col">入庫先名</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row">1</th>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <th scope="row">2</th>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <th scope="row"></th>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    </tbody>
</table>

@endsection