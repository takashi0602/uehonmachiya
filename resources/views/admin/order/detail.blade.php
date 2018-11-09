@extends('admin.layouts.app')
@section('content')
<h1>注文詳細</h1>



<table class="table">
        <thead>
        <tr>
                <th scope="col">注文番号</th>
                <td>1</td>
                <td></td>

        </tr>
        </thead>
        <tbody>
        <tr>
                <th scope="row">注文日</th>
                <td></td>
                <td></td>

        </tr>
        <tr>
                <th scope="row">会員名</th>
                <td></td>
                <td></td>

        </tr>
        <tr>
                <th scope="row">郵便番号</th>
                <td></td>
                <td></td>

        </tr>
        <tr>
                <th scope="row">住所</th>
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
                <th scope="row">合計金額</th>
                <td></td>
                <td></td>

        </tr>
        </tbody>
</table>
<th><a href="{{ url('/admin/order') }}"><input type="button" value="戻る"></a></th>
        @endsection