@extends('admin.layouts.app')
@section('content')
<h1>お問い合わせ一覧</h1>

<div>▼詳細検索</div>


<table class="table">
    <thead>
    <tr>
        <th scope="col">NO</th>
        <th scope="col">日付</th>
        <th scope="col">会社名</th>
        <th scope="col">メールアドレス</th>
        <th scope="col">内容</th>
        <th scope="col">状態</th>
        <th scope="col"></th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row">1</th>
        <td>2018/12/3</td>
        <td>山田花子</td>
        <td>hanako@gmail.com</td>
        <td>.....</td>
        <td>未対応</td>
        <th><a href="">対応済みにする</a></th>
    </tr>
    <tr>
        <th scope="row">2</th>
        <td>2018/11/4</td>
        <td>abc</td>
        <td>abc@gmail.com</td>
        <td>.....</td>
        <td>未対応</td>
        <th><a href="">対応済みにする</a></th>
    </tr>
    </tbody>
</table>
    @endsection