@extends('admin.layouts.app')
@section('content')
<h1>商品一覧</h1>
<div>
    <a href="{{ url('/admin/product/add') }}">商品の追加</a>
</div>
<div class="table-responsive text-nowrap">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">商品番号</th>
            <th scope="col">商品名</th>
            <th scope="col">著者</th>
            <th scope="col">出版社</th>
            <th scope="col">ISBN</th>
            <th scope="col">仕入価格</th>
            <th scope="col">販売価格</th>
            <th scope="col">ジャンル</th>
            <th scope="col">入庫先名</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->author}}</td>
                <td>{{$product->company}}</td>
                <td>{{$product->isbn}}</td>
                <td>{{$product->price}}円</td>
                <td>{{$product->sales_price}}円</td>
                <td>{{ $categories[$count]->name }}</td>
                <td>{{ $suppliers[$count++]->name }}</td>
                <td>
                    <a href="/admin/product/edit/{{ $product->id }}">編集</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection