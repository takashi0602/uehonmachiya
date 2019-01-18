@extends('admin.layouts.app')
@section('content')
<h1>入庫先一覧</h1>
<div>
    <a href="{{ url('/admin/supplier/add') }}">入庫先の追加</a>
</div>
<table class="table">
    <thead>
    <tr>
        <th scope="col">入庫先番号</th>
        <th scope="col">入庫先名</th>
        <th scope="col">郵便番号</th>
        <th scope="col">住所</th>
        <th scope="col">電話番号</th>
        <th scope="col">メールアドレス</th>
        <th scope="col">代表者名</th>
    </thead>
    </tr>
    <tbody>
    @foreach($suppliers as $supplier)
        <tr>
            <td>{{ $supplier->id }}</td>
            <td>{{ $supplier->name }}</td>
            <td>〒{{ $supplier->postal }}</td>
            <td>{{ $supplier->address }}</td>
            <td>{{ $supplier->tel }}</td>
            <td>{{ $supplier->email }}</td>
            <td>{{ $supplier->president }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
<div class="d-flex justify-content-center">
    <div>{{ $suppliers->links() }}</div>
</div>
@endsection