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
   <div>
        <a href="{{ url('/admin/product') }}">商品</a>
        <a href="{{ url('/admin/customer') }}">会員</a>
        <a href="{{ url('/admin/supplier') }}">入庫先</a>
        <a href="{{ url('/admin/stock') }}">在庫</a>
        <a href="{{ url('/admin/order') }}">注文</a>
        <a href="{{ url('/admin/ordering') }}">発注</a>
        <a href="{{ url('/admin/arrival') }}">入庫</a>
        <a href="{{ url('/admin/shipment') }}">出庫</a>
        <a href="{{ url('/admin/sales') }}">売上</a>
        <a href="{{ url('/admin/rank') }}">ランキング</a>
        <a href="{{ url('/admin/contact') }}">お問い合わせ</a>
   </div>
   <div class="container">
      @yield('content')
   </div>
</body>
</html>