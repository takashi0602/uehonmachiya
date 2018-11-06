@extends('admin.layouts.app')
@section('content')
<h1>出庫詳細</h1>
<table>

    <div>出庫番号　<input type="text"></div>
    <div>出庫日　<input type="text"></div>
    <div>会社名 <input type="text"></div>
    <div> 郵便番号　<input type="text"></div>
    <div> 住所　　<input type="text"></div>
    <div> 商品番号 <input type="text"> </div>
    <div>合計金額　　<input type="text"></div>

</table>
<input type="button" value="戻る">
    @endsection