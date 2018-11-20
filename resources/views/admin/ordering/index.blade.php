@extends('admin.layouts.app')
@section('content')

<h1>発注一覧</h1>
<a href="{{ url('/admin/ordering/detail') }}">商品発注詳細</a>
<table class="table">
    <thead>
    <tr>
        <th scope="col">No.(発注番号)</th>
        <th scope="col">入庫先名</th>
        <th scope="col">発注者名</th>
        <th scope="col">発注日</th>
        <th scope="col">状況</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row">1</th>
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
    </tr>
    <tr>
        <th scope="row">3</th>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    </tbody>
</table>
@endsection
