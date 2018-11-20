@extends('admin.layouts.app')

@section('content')
<h1>出庫一覧</h1>
<div>▼詳細検索</div>

<table border="2" rules="all" >

</table>

<table class="table">
    <thead>
    <tr>
        <th scope="col">NO</th>
        <th scope="col">出庫日</th>
        <th scope="col">会社名</th>
        <th scope="col"> </th>

    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row">1</th>
        <td>7</td>
        <td>uehonmachi</td>
        <th><a href="{{ url('/admin/shipment/detail') }}">詳細</a></th>
    </tr>
    <tr>
        <th scope="row">2</th>
        <td>10</td>
        <td>nanba</td>
        <th><a href="{{ url('/admin/shipment/detail') }}">詳細</a></th>
    </tr>
    <tr>
        <th scope="row">.....</th>
        <td>....</td>
        <td>.....</td>
        <td></td>
    </tr>

    </tbody>
</table>

@endsection