@extends('admin.layouts.app')
@section('content')
<h1 class="mb-3">商品一覧</h1>
<div class="mb-3">
    <form action="{{ url('/admin/product') }}" method="get">
        <div class="row">
            <div class="col-sm-3 mb-3">
                <select class="form-control" name="category">
                    <option value="0">ジャンル</option>
                    @foreach($genre as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-sm-7 mb-3">
                <input type="text" class="form-control" name="search" value="" placeholder="例：タイトル　ISBN　著者　出版社" required>
            </div>
            <div class="col-sm-auto">
                <button type="submit" class="btn btn-primary">検索</button>
            </div>
        </div>
    </form>
</div>
<div class="mb-2">
    <a href="{{ url('/admin/product/add') }}">商品の追加</a>
</div>
@if($flag)
    @if(count($products))
        <div class="mb-3">表示件数：{{ count($products) }}件</div>
    @else
        <div class="mb-3">商品が見つかりません。</div>
    @endif
@endif
<div class="table-responsive">
    <table class="table">
        <thead class="text-nowrap">
        <tr>
            <th scope="col">商品番号</th>
            <th scope="col">商品名</th>
            <th scope="col">著者</th>
            <th scope="col">出版社</th>
            <th scope="col">ISBN</th>
            <th scope="col">仕入価格</th>
            <th scope="col">販売価格</th>
            <th scope="col">ジャンル</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr class="text-nowrap">
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->author}}</td>
                <td>{{$product->company}}</td>
                <td>{{$product->isbn}}</td>
                <td>{{$product->price}}円</td>
                <td>{{$product->sales_price}}円</td>
                <td>{{ $categories[$count]->name }}</td>
                <td>
                    <a href="/admin/product/edit/{{ $product->id }}">編集</a>
                </td>
                <td>
                    <a href data-toggle="modal" data-target="#ProductModal{{ $product->id }}">詳細</a>
                </td>
            </tr>
            <!-- Modal -->
            <div class="modal fade bd-example-modal-lg" id="ProductModal{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">商品詳細</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-sm-3">商品番号</div>
                                <div class="col-sm-9">{{ $product->id }}</div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">登録日</div>
                                <div class="col-sm-9">{{ $product->created_at->format('Y/m/d') }}</div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">商品名</div>
                                <div class="col-sm-9">{{ $product->name }}</div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">商品画像</div>
                                <div class="col-sm-9">
                                    <div class="product-img" style="background-image: url('{{ asset('storage/' . $product->img) }}'); background-repeat: no-repeat;"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">説明</div>
                                <div class="col-sm-9">{{ $product->description }}</div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">著者</div>
                                <div class="col-sm-9">{{ $product->author }}</div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">出版社</div>
                                <div class="col-sm-9">{{ $product->company }}</div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">ジャンル</div>
                                <div class="col-sm-9">{{ $categories[$count]->name }}</div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">ISBN</div>
                                <div class="col-sm-9">{{ $product->isbn }}</div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">仕入れ価格</div>
                                <div class="col-sm-9">{{ $product->price }}円</div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">販売価格</div>
                                <div class="col-sm-9">{{ $product->sales_price }}円</div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">入庫先</div>
                                <div class="col-sm-9">{{ $suppliers[$count++]->name }}</div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        <div>{{ $products->links() }}</div>
    </div>
</div>
@endsection