@extends('admin.layouts.app')

@section('content')
<h1>会員一覧</h1>
<table border="2" rules="all" >
<table class="table">
        <thead>
        <tr>
            <th scope="col">NO.(会員番号)</th>
            <th scope="col">名前</th>
            <th scope="col">郵便番号</th>
            <th scope="col">住所</th>
            <th scope="col">メールアドレス</th>
            <th scope="col">生年月日</th>
            <th scope="col">電話番号</th>
            <th scope="col">性別</th>
            <th scope="col">登録日</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>abc</td>
            <td>123-2244</td>
            <td>大阪府東大阪市</td>
            <td>abc@gmail.com</td>
            <td>1993/07/08</td>
            <td>090-1233-3344</td>
            <td>男</td>
            <td>2018/08/08</td>

        </tr>

        </tbody>
    </table>
@endsection