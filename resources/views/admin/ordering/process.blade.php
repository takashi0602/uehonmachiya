@extends('admin.layouts.app')
@section('content')
<h1>発注処理</h1>

<div>入庫先名</div>
<form action="">
<select name="ordering" id="">
    <option value="OIC">OIC問屋</option>
    <option value="OIC">test</option>
</select>
</form>

<div>商品名</div>
<input type="text" name="商品名">

<div>個数</div>
<input type="text" name="個数">

<input type="button" value="追加">

<div><input type="button" value="発注"></div>
@endsection