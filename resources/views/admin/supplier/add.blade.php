@extends('admin.layouts.app')
@section('content')
<h1 class="mb-4">入庫先追加</h1>
<form action="{{ url("/admin/supplier/add/create") }}" method="post">
    @csrf
    <div class="row mb-3">
        <label class="col-sm-3">入庫先名</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" placeholder="" name="name">
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-3">代表者名</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" placeholder="" name="president">
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-3">メールアドレス</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" placeholder="" name="email">
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-3">電話番号</label>
        <div class="col-sm-9">
            <input type="tel" class="form-control" placeholder="" name="tel">
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-3">パスワード</label>
        <div class="col-sm-9">
            <input type="password" class="form-control" placeholder="" name="password">
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-3">郵便番号</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" placeholder="" name="postal">
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-3">住所</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" placeholder="" name="address">
        </div>
    </div>
    <div class="text-right">
        <button type="submit" class="btn btn-primary">追加</button>
    </div>
</form>
@endsection

