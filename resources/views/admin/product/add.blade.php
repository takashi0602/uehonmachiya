@extends('admin.layouts.app')
@section('content')
<h1 class="mb-4">商品追加</h1>
<form action="{{ url("/admin/product/add/create") }}" method="post">
    @csrf
    <div class="row mb-3">
        <label class="col-sm-3">商品名</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" placeholder="" name="name">
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-3" for="exampleInput">カテゴリ</label>
        <div class="col-sm-4 mb-2">
            <select class="form-control">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" name="category_id">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-sm-5">
            <input type="text" class="form-control" placeholder="カテゴリを追加する" name="category_name">
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-3">説明</label>
        <div class="col-sm-9">
            <textarea type="text" class="form-control" placeholder="" name="description"></textarea>
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-3">著者</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" placeholder="" name="author">
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-3">出版社</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" placeholder="" name="company">
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-3">画像</label>
        <div class="col-sm-9">
            <input type="file" class="form-control-file" placeholder="" name="img">
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-3">仕入単価</label>
        <div class="col-sm-9">
            <input type="number" class="form-control" placeholder="" name="price">
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-3">販売単価</label>
        <div class="col-sm-9">
            <input type="number" class="form-control" placeholder="" name="sales_price">
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-3" for="exampleInput">入庫先名</label>
        <div class="col-sm-5">
            <select class="form-control" name="supplier_id">
                @foreach($suppliers as $supplier)
                    <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-3">安全在庫数</label>
        <div class="col-sm-9">
            <input type="number" class="form-control" value="1" name="safety">
        </div>
    </div>
    <div class="text-right">
        <button type="submit" class="btn btn-primary">追加</button>
    </div>
</form>
@endsection