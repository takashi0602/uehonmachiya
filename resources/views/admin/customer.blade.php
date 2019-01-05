@extends('admin.layouts.app')
@section('content')
<h1>会員一覧</h1>

<table class="table">
    <thead>
    <tr>
        <th scope="col">会員番号</th>
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
    @foreach($customers as $customer)
    <tr>
        <td>{{$customer->id}}</td>
        <td>{{$customer->name}}</td>
        <td>{{$customer->postal}}</td>
        <td>{{$customer->address}}</td>
        <td>{{$customer->email}}</td>
        <td>{{$customer->birth}}</td>
        <td>{{$customer->tel}}</td>
        <td>
            @if($customer->sex)
                女性
            @else
                男性
            @endif
        </td>
        <td>{{$customer->created_at->format("Y/m/d")}}</td>
    </tr>
    @endforeach
    </tbody>
</table>
@endsection