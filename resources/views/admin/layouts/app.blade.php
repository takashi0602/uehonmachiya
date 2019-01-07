<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
  <div class="border-bottom mb-3 bg-info">
    <div class="container d-flex flex-wrap py-2">
      <div class="w-25"><a href="{{ url('/admin/product') }}" class="text-white w-25">商品</a></div>
      <div class="w-25"><a href="{{ url('/admin/customer') }}" class="text-white">会員</a></div>
      <div class="w-25"><a href="{{ url('/admin/supplier') }}" class="text-white">入庫先</a></div>
      <div class="w-25"><a href="{{ url('/admin/stock') }}" class="text-white">在庫</a></div>
      <div class="w-25"><a href="{{ url('/admin/order') }}" class="text-white">注文</a></div>
      <div class="w-25"><a href="{{ url('/admin/ordering') }}" class="text-white">発注</a></div>
      <div class="w-25"><a href="{{ url('/admin/arrival') }}" class="text-white">入庫</a></div>
      <div class="w-25"><a href="{{ url('/admin/shipment') }}" class="text-white">出庫</a></div>
      <div class="w-25"><a href="{{ url('/admin/sales') }}" class="text-white">売上</a></div>
      <div class="w-25"><a href="{{ url('/admin/rank') }}" class="text-white">ランキング</a></div>
      <div class="w-25"><a href="{{ url('/admin/contact') }}" class="text-white">お問い合わせ</a></div>
    </div>
  </div>
  <div class="container">
    @yield('content')
  </div>
</body>
</html>