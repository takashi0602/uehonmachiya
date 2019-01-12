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
              <span class="mr-3">{{ $amount[$count] }}冊</span>
              <span>{{ $sales_price[$count++] }}円</span>
            </div>
            <div class="col-auto">
              <button type="submit" class="btn btn-danger">削除</button>
            </div>
          </div>
        </form>
      </div>
    @endforeach
    <div class="text-right">
      <span>合計</span>
      <span>{{ $total }}円</span>
    </div>
    <div class="text-right">
      <span>ご利用可能ポイント</span>
      <span>{{ $point->point }}pt</span>
    </div>
    <div class="text-right mb-3">
      <span>購入後ポイント</span>
      <span>{{ $remaining_points }}pt</span>
    </div>
    @if($remaining_points >= 0)
      <div class="text-right">
        <a href="/" class="mr-3">商品一覧へ</a>
        <a href="/confirm">購入の手続きへ</a>
      </div>
    @else
      <p class="text-danger">
        ※合計金額がご利用可能ポイントより多いため購入できません。<br>
        カートから商品を削除するか、ギフトコードを入力し、ポイントを増やして下さい。
      </p>
      <div class="text-right">
        <a href="/" class="mr-3">商品一覧へ</a>
        <a href="/mypage/gift" class="mr-3">ギフトコード入力画面へ</a>
      </div>
    @endif
  @else
    <p>カートに商品はありません。</p>
    <div class="text-right">
      <a href="/" class="mr-3">商品一覧へ</a>
    </div>
  @endif
@endsection