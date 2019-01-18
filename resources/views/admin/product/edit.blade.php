@extends('admin.layouts.app')
@section('content')
    <h1>商品編集</h1>
    <form action="{{ url('/admin/product/edit') }}" method="post" enctype="multipart/form-data" class="mb-3">
        @csrf
        <div class="row mb-3">
            <div class="col-md-3"><span class="text-danger">*</span>商品名</div>
            <div class="col-md-9">
                <input type="text" class="form-control" value="{{ $product->name }}" name="product_name">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-3"><span class="text-danger">*</span>ジャンル</div>
            <div class="col-md-4 mb-2">
                <select class="form-control" name="category_id">
                    @foreach($categories as $cate)
                        @if($cate->id == $category->id)
                            <option value="{{ $cate->id }}" selected>{{ $cate->name }}</option>
                        @else
                            <option value="{{ $cate->id }}">{{ $cate->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="col-md-5">
                <input type="text" class="form-control" placeholder="新しいカテゴリーを追加" name="category_name">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-3"><span class="text-danger">*</span>著者</div>
            <div class="col-md-9">
                <input type="text" class="form-control" value="{{ $product->author }}" name="author">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-3" ><span class="text-danger">*</span>出版社</div>
            <div class="col-md-9">
                <input type="text" class="form-control" value="{{ $product->company }}" name="company">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-3">ISBN</div>
            <div class="col-md-9">
                <input type="text" class="form-control" value="{{ $product->isbn }}" name="isbn">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-3"><span class="text-danger">*</span>商品説明</div>
            <div class="col-md-9">
                <textarea type="text" class="form-control" name="description">{{ $product->description }}</textarea>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-3"><span class="text-danger">*</span>仕入単価</div>
            <div class="col-md-9">
                <input type="text" class="form-control" value="{{ $product->price }}" name="price">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-3"><span class="text-danger">*</span>販売単価</div>
            <div class="col-md-9">
                <input type="text" class="form-control" value="{{ $product->sales_price }}" name="sales_price">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-3"><span class="text-danger">*</span>安全在庫数</div>
            <div class="col-md-9">
                <input type="text" class="form-control" value="{{ $stock->safety }}" name="safety">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-3">画像</div>
            <div class="col-md-9">
                <label>
                    <span class="btn btn-primary">
                        ファイル選択
                        <input type="file" style="display:none" name="img">
                    </span>
                </label>
                <div class="product-img" style="background-image: url('{{ asset('storage/' . $product->img) }}'); background-repeat: no-repeat;"></div>
            </div>
        </div>
        <div class="text-right">
            <input type="hidden" name="id" value="{{ $product->id }}">
            <button type="submit" class="btn btn-primary px-3">変更</button>
        </div>
    </form>
@endsection
