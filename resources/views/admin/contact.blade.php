@extends('admin.layouts.app')
@section('content')
<h1>お問い合わせ一覧</h1>

<div>▼詳細検索</div>

<table border="2" rules="all" >
    <tr>
        <th>No</th>
        <th>日付</th>
        <th>会員名</th>
        <th>メールアドレス</th>
        <th>内容</th>
        <th>状態</th>
        <th>　</th>
    </tr>
    <tr>
        <td>1</td>
        <td>2018/12/3</td>
        <td>山田花子</td>
        <td>hanako@gmail.com</td>
        <td>.....</td>
        <td>未対応</td>
        <th><a href="">対応済みにする</a></th>
    </tr>

</table>
    @endsection