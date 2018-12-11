@extends('admin.layouts.app')

@section('content')
<h1>出庫一覧</h1>
<div>▼詳細検索</div>

<table class="table">

    <thead>
    <tr>
        <th scope="col">NO</th>
        <th scope="col">出庫日</th>
        <th scope="col"> </th>

    </tr>
    </thead>
    <tbody>
    @foreach($shipments as $shipment)
    <tr>
        <th scope="row">{{$shipment->id}}</th>
        <td>{{$shipment->created_at}}</td>
        <th><a href="{{ url('/admin/shipment/detail') }}">詳細</a></th>
    </tr>
    </tbody>
    @endforeach
</table>

@endsection