@extends('admin.layouts.app')
@section('content')
<h1>入庫一覧</h1>

<div>▼詳細検索</div>
<table class="table">
    <thead>
    <tr>
        <th scope="col">No.(入庫番号)</th>
        <th scope="col">入庫日</th>
        <th scope="col">発注コード</th>
        <th scope="col"> </th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row">1</th>
        <td></td>
        <td></td>
        <th><a href="{{ url('/admin/arrival/detail') }}">詳細</a></th>
    </tr>

    </tbody>

</table>
@endsection


