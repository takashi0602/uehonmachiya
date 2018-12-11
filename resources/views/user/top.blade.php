@extends('user.layouts.app')

@section('content')
<h1>トップ</h1>
<div class="d-flex flex-wrap justify-content-between">
  @foreach($products as $product)
    <div class="mx-4 product-cursor mb-5" data-toggle="modal" data-target="#Modal{{ $product->id }}">
      <div class="product-img mb-3" style="background-image: url('{{ $product->img }}');"></div>
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