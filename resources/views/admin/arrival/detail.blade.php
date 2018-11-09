@extends('admin.layouts.app')
@section('content')
<h1>入庫詳細</h1>



<table class="table">

    <tr>
        <th scope="col">入庫番号</th>
        <td scope="col"></td>
        <td></td>

    </tr>

    <tbody>
    <tr>
        <th scope="row">発注番号</th>
        <td></td>
        <td></td>

    </tr>
    <tr>
        <th scope="row">入庫日</th>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <th scope="row">入庫先</th>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <th scope="row">発注者</th>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <th scope="row">商品番号</th>
        <th scope="row">商品名</th>
        <th scope="row">個数</th>

    </tr>
    <tr>
        <td>1</td>
        <td>C++プログラミング</td>
        <td>1</td>
    </tr>
    <tr>
        <th scope="row">商品番号</th>
        <td>1,000</td>
        <td> </td>
    </tr>
    </tbody>
</table>
<a href="{{ url('/admin/arrival') }}"><input type="button" value="戻る" ></a>
    @endsection