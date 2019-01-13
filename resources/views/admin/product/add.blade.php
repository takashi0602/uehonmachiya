@extends('admin.layouts.app')
@section('content')
<h1 class="mb-4">商品追加</h1>
<form action="{{ url("/admin/product/add/create") }}" method="post" enctype="multipart/form-data" class="mb-3">
    @csrf
    <div class="row mb-3">
        <label class="col-md-3"><span class="text-danger">*</span>商品名</label>
        <div class="col-md-9">
            <input type="text" class="form-control" placeholder="" name="name">
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-md-3"><span class="text-danger">*</span>ジャンル</label>
        <div class="col-md-4 mb-2">
            <select class="form-control" name="category_id">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-5">
            <input type="text" class="form-control" placeholder="新しいカテゴリーを追加" name="category_name">
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-md-3"><span class="text-danger">*</span>著者</label>
        <div class="col-md-9">
            <input type="text" class="form-control" placeholder="" name="author">
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-md-3"><span class="text-danger">*</span>出版社</label>
        <div class="col-md-9">
            <input type="text" class="form-control" placeholder="" name="company">
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-md-3">ISBN</label>
        <div class="col-md-9">
            <input type="text" class="form-control" placeholder="10桁 or 13桁" name="isbn">
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-md-3"><span class="text-danger">*</span>商品説明</label>
        <div class="col-md-9">
            <textarea type="text" class="form-control" placeholder="" name="description"></textarea>
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-md-3"><span class="text-danger">*</span>仕入単価</label>
        <div class="col-md-9">
            <input type="number" class="form-control" placeholder="" name="price">
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-md-3"><span class="text-danger">*</span>販売単価</label>
        <div class="col-md-9">
            <input type="number" class="form-control" placeholder="" name="sales_price">
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-md-3"><span class="text-danger">*</span>入庫先名</label>
        <div class="col-md-5">
            <select class="form-control" name="supplier_id">
                @foreach($suppliers as $supplier)
                    <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-md-3"><span class="text-danger">*</span>安全在庫数</label>
        <div class="col-md-9">
            <input type="number" class="form-control" value="1" name="safety">
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-md-3"><span class="text-danger">*</span>画像</label>
        <div class="col-md-9">
            <label>
                <span class="btn btn-primary">
                    ファイル選択
                    <input type="file" style="display:none" name="img">
                </span>
            </label>
        </div>
    </div>
    <div class="text-right">
        <button type="submit" class="btn btn-primary">追加</button>
    </div>
</form>
@endsection