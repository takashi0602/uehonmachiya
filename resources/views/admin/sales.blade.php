@extends('admin.layouts.app')
@section('content')
<h1>売上一覧</h1>
<table class="table">
    <thead>
    <tr>
        <th scope="col">日付</th>
        <th scope="col">商品名</th>
        <th scope="col">数量</th>
        <th scope="col">売上</th>
    </tr>
    </thead>
    <tbody>
    @foreach($data as $sales)
        <tr>
            <td>{{ $sales['created_at']->format('Y/m/d') }}</td>
            <td>{{ $sales['name'] }}</td>
            <td>{{ $sales['amount'] }}冊</td>
            <td>{{ $sales['sales'] }}円</td>
        </tr>
    @endforeach
    </tbody>
</table>
<div class="d-flex justify-content-center">
    <div>{{ $shipments->links() }}</div>
</div>
@endsection