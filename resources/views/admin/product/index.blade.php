@extends('admin.layouts.app')
@section('content')
<h1>商品一覧</h1>
<div>
    <a href="{{ url('/admin/product/add') }}">商品の追加</a>
</div>

<table class="table">
    <thead>
    <tr>
        <th scope="col">商品番号</th>
        <th scope="col">商品名</th>
        <th scope="col">著者</th>
        <th scope="col">ISBN</th>
        <th scope="col">仕入価格</th>
        <th scope="col">販売価格</th>
        <th scope="col">ジャンル</th>
        <th scope="col">入庫先名</th>
    </tr>
    </thead>
    <tbody>
    @foreach($products as $product)
    <tr>
        <td>{{$product->id}}</td>
        <td>{{$product->name}}</td>
        <td>{{$product->author}}</td>
        <td>{{$product->isbn}}</td>
        <td>{{$product->price}}</td>
        <td>{{$product->sales_price}}</td>
        <td>{{ $categories[$count]->name }}</td>
        <td>{{ $suppliers[$count++]->name }}</td>
    </tr>
    @endforeach
    </tbody>
</table>

@endsection