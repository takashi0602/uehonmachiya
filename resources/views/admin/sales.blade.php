@extends('admin.layouts.app')
@section('content')
<h1>売上一覧</h1>
<th>
    <tr>NO.1(会員番号)</tr>
    <tr>日付</tr>
    <tr>商品名</tr>
    <tr>個数</tr>
    <tr>合計金額</tr>
    <tr>利益</tr>
    <tr>購入者名</tr>
</th>
<br>
<input type="button"value="1">
<input type="button"value="2">
<input type="button"value=".....X(最後のページ)">
    @endsection