@extends('user.layouts.app')

@section('content')
  <h1>カート</h1>
  <div style="padding: 10px; margin-bottom: 10px; border: 1px solid #333333;">
    羅生門　
    <div class="dropdown">
      <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
        冊
        <span class="caret"></span>
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
        <li><a href="#">1冊</a></li>
        <li><a href="#">2冊</a></li>
        <li><a href="#">3冊</a></li>
        <li><a href="#">4冊</a></li>
      </ul>

      980円

      <div class="col-4"><a href="{{ url('') }}"><input type="button" class="btn btn-primary" value="カートから削除"></a></div>
    </div>
  </div>
  </div>

    <div class="row">
  <div class="col-3"><a href="">商品を探す</a></div>
  <div class="col-3"><a href="">購入手続きに進む</a></div>
    </div>
@endsection