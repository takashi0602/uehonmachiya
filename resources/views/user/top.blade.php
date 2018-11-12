@extends('user.layouts.app')

@section('content')
<h1>トップ</h1>
<div class="d-flex flex-wrap justify-content-between">
  @foreach($products as $product)
    <div class="mx-4 product-cursor" data-toggle="modal" data-target="#Modal{{ $product->id }}">
      <div class="product-img mb-3" style="background-image: url('{{ $product->img }}');"></div>
      <h5 class="mb-0">{{ $product->name }}</h5>
      <div>{{ $product->author }}</div>
      <div class="text-right">{{ $product->sales_price }}<span>円</span></div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="Modal{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="ModalTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">{{ $product->name }}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>{{ $product->description }}</p>
            <div class="text-right">{{ $product->sales_price }}<span>円</span></div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">キャンセル</button>
            <button type="button" class="btn btn-primary">カートに入れる</button>
          </div>
        </div>
      </div>
    </div>
  @endforeach
</div>
@endsection