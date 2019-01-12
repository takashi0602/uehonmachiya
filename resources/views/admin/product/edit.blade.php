@extends('admin.layouts.app')
@section('content')
    <h1>商品の変更</h1>
    <form action="{{ url('/admin/product/edit') }}" method="post">
        <div class="row mb-3">
            <div class="col-md-3">商品名</div>
            <div class="col-md-9">
                <input type="text" class="form-control" value="{{ $product->name }}" name="product_name">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-3">ジャンル</div>
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
            <div class="col-md-3">著者</div>
            <div class="col-md-9">
                <input type="text" class="form-control" value="{{ $product->author }}" name="author">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-3" >出版社</div>
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
            <div class="col-md-3">仕入単価</div>
            <div class="col-md-9">
                <input type="text" class="form-control" value="{{ $product->price }}" name="price">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-3">販売単価</div>
            <div class="col-md-9">
                <input type="text" class="form-control" value="{{ $product->sales_price }}" name="sales_price">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-3">安全在庫数</div>
            <div class="col-md-9">
                <input type="text" class="form-control" value="{{ $stock->safety }}" name="safety">
            </div>
        </div>
        <div class="text-right">
            @csrf
            <input type="hidden" name="id" value="{{ $product->id }}">
            <button type="submit" class="btn btn-primary px-3">変更</button>
        </div>
    </form>
@endsection
