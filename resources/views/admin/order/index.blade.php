
@extends('admin.layouts.app')
@section('content')
<h1>注文一覧</h1>
<h1>詳細検索</h1>


<table class="table">
    <thead>
    <tr>
        <th scope="col">NO(注文番号)</th>
        <th scope="col">注文日</th>
        <th scope="col">会社名</th>
        <th scope="col"></th>

    </tr>
    </thead>
    <tbody>

    <tr>
        <th scope="row">{{$order->id}}</th>
        <td>{{$order->orderday}}</td>
        <td>{{$order->company}}</td>
        <th><a href="{{ url('/admin/order/detail') }}">詳細</a></th>
    </tr>

    </tbody>
</table>

@endsection