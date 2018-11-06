
<form action="">
   <div>

    <tr>
        <th><a href="{{ url('/admin/product') }}">商品</a></th>
        <th><a href="{{ url('/admin/user') }}">会員</a></th>
        <th><a href="{{ url('/admin/supplier') }}">入庫先</a></th>
        <th><a href="{{ url('/admin/stock') }}">在庫</a></th>
        <th><a href="{{ url('/admin/order') }}">注文</a></th>
        <th><a href="{{ url('/admin/ordering') }}">発注</a></th>
        <th><a href="{{ url('/admin/arrival') }}">入庫</a></th>
        <th><a href="{{ url('/admin/shipment') }}">出庫</a></th>
        <th><a href="{{ url('/admin/sales') }}">売上</a></th>
        <th><a href="{{ url('/admin/rank') }}">ランキング</a></th>
        <th><a href="{{ url('/admin/contact') }}">お問い合わせ</a></th>


    </tr>
   </div>
</form>
<div>
    @yield('content')
</div>