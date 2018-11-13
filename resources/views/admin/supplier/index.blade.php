@extends('admin.layouts.app')
@section('content')
<h1>入庫先一覧</h1>
<div><a href="http://127.0.0.1:8000/admin/supplier/add">入庫先の追加</a></div>
<div><a href="http://127.0.0.1:8000/admin/supplier/edit">入庫先の編集</a></div>
<div>▼詳細検索</div>


</table>


<table class="table">
    <thead>
    <tr>
        <th scope="col">NO(入庫番号)</th>
        <th scope="col">入庫先名</th>
        <th scope="col">入庫先郵便番号</th>
        <th scope="col">入庫先電話番号(TEL)</th>
        <th scope="col">入庫先電話番号(FAX)</th>
        <th scope="col">メールアドレス</th>
        <th scope="col">代表者名</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row">1</th>
        <td>OIC問屋</td>
        <td>1001000</td>

        <td>090-1234-5678</td>
        <td>012-441-222</td>
        <td>oic@gmail.com</td>
        <td>大阪太郎</td>
    </tr>
    <th scope="row">2</th>
    <td>.....</td>
    <td>......</td>

    <td>000-0000-0000</td>
    <td>000-000-000</td>
    <td>aaaa@gmail.com</td>
    <td>xxxxx</td>
    </tbody>
</table>
    @endsection