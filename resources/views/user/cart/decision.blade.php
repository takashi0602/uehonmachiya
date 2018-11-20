@extends('user.layouts.app')

@section('content')
  <div class="text-center">
    <h2 class="my-5">商品購入ありがとうございます。</h2>
    <p class="mb-5">商品が発送されるまで、しばらくお待ち下さい。</p>
  </div>
  <div class="text-right">
    <a href="{{ url('/mypage/order') }}" class="mr-3">注文商品の確認</a>
    <a href="{{ url('/top') }}">TOPへ戻る</a>
  </div>
@endsection