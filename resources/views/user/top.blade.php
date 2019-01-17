@extends('user.layouts.app')

@section('content')
<h1 class="mb-5">商品一覧</h1>
<div>
  <form action="{{ url('/') }}" method="post" class="mb-5">
    @csrf
    <div class="row">
      <div class="col-sm-3 mb-3">
        <select class="form-control" name="id">
          <option value="0">ジャンル</option>
          @foreach($genre as $item)
            <option value="{{ $item->id }}">{{ $item->name }}</option>
          @endforeach
        </select>
      </div>
      <div class="col-sm-7 mb-3">
        <input type="text" class="form-control" name="search" value="" placeholder="例：タイトル　ISBN　著者　出版社">
      </div>
      <div class="col-sm-auto">
        <button type="submit" class="btn btn-primary">検索</button>
      </div>
    </div>
  </form>
</div>
<p class="text-success">{{ session('message')}}</p>
@if($flag)
  @if(count($products))
    <div class="mb-3">検索結果：{{ count($products) }}件</div>
  @else
    <div class="mb-3">商品が見つかりません。</div>
  @endif
@endif
<div class="d-flex flex-wrap justify-content-between">
  @foreach($products as $product)
    <div class="mx-4 product-cursor mb-5" data-toggle="modal" data-target="#Modal{{ $product->id }}">
      <div class="product-img mb-3" style="background-image: url('{{ asset('storage/' . $product->img) }}'); background-repeat: no-repeat; background-position: center;"></div>
      <h5 class="mb-0 word-break">{{ $product->name }}</h5>
      <div>{{ $product->author }}</div>
      <div class="text-right">{{ $product->sales_price }}<span>円</span></div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="Modal{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="ModalTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header border-0">
            <h3 class="modal-title" id="exampleModalLongTitle">{{ $product->name }}</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="/cart/add" method="post">
              @csrf
              <div>著者：{{ $product->author }}</div>
              <div>出版社：{{ $product->company }}</div>
              <div>ジャンル：{{ $categories[$count++]->name }}</div>
              <div>
                @isset($product->isbn)
                  ISBN：{{ $product->isbn }}
                @endisset
              </div>
              <div>説明</div>
              <p>{{ $product->description }}</p>
              <div class="text-right">
                <div class="mb-3">
                  {{ $product->sales_price }}<span>円</span>
                </div>
                <div class="row mb-3 mx-0 align-items-end justify-content-end">
                  <div class="col-3">
                    <input type="number" class="form-control d-inline-block" value="1" name="amount"/>
                  </div>
                  <div class="col-auto align-middle px-0">冊</div>
                </div>
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">キャンセル</button>
                <button type="submit" class="btn btn-primary">カートに入れる</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  @endforeach
</div>
@endsection