@extends('user.layouts.app')

@section('content')
  <h1>カート</h1>
  @if($products)
    @foreach($products as $product)
      <div class="border mb-3 p-3">
        <form action="/cart/delete" method="post">
          @csrf
          <div class="row align-items-center">
            <input type="hidden" value="{{ $carts_id[$count] }}" name="cart_id">
            <h5 class="col mb-0">{{ $product->name }}</h5>
            <div class="col-auto">
              <span>{{ $amount[$count] }}冊</span>
              <span>{{ $sales_price[$count++] }}円</span>
            </div>
            <div class="col-auto">
              <button type="submit" class="btn btn-danger">削除</button>
            </div>
          </div>
        </form>
      </div>
    @endforeach
    <div class="text-right mb-3">
      <span>合計</span>
      <span>{{ array_sum($sales_price) }}円</span>
    </div>
    <div class="text-right">
      <a href="/top" class="mr-3">商品一覧へ</a>
      <a href="/confirm">購入の手続きへ</a>
    </div>
  @else
    <p>カートに商品はありません。</p>
    <div class="text-right">
      <a href="/top" class="mr-3">商品一覧へ</a>
    </div>
  @endif
@endsection