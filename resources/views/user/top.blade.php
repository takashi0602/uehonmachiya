@extends('user.layouts.app')

@section('content')
<h1>トップ</h1>
<div class="d-flex">
  @foreach($products as $product)
    <div class="mx-3">
      <img src="{{ $product->img }}" alt="{{ $product->name }}" class="">
      <p>{{ $product->name }}</p>
    </div>
  @endforeach
</div>
@endsection