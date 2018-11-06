@extends('admin.layouts.app')
@section('content')
<h1>会員一覧</h1>
<table border="2" rules="all" >
    <tr>

        <th>NO.1(会員番号)</th>
        <th>名前</th>
        <th>郵便番号</th>
        <th>住所</th>
        <th>メールアドレス</th>
        <th>生年月日</th>
        <th>電話番号</th>
        <th>性別</th>
        <th>登録日</th>
    </tr>

    @endsection