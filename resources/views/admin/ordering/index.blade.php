@extends('admin.layouts.app')
@section('content')

<h1>発注一覧</h1>
<table class="table">
    <thead>
    <tr>
        <th scope="col">発注番号</th>
        <th scope="col">入庫先名</th>
        <th scope="col">商品名</th>
        <th scope="col">個数</th>
        <th scope="col">発注日</th>
        <th scope="col">状況</th>
    </tr>
    </thead>
    <tbody>
    @foreach($ordering as $order)
        <tr>
            <th scope="row">{{$order->id}}</th>
            <td>{{$suppliers[$count]->name}}</td>
            <td>{{$products[$count++]->name}}</td>
            <td>{{$order->amount}}</td>
            <td>{{$order->created_at->format("Y/m/d")}}</td>
            <td>
                @if($order->status == 0)
                    配送待ち
                @endif
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
