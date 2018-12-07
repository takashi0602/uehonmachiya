@extends('user.layouts.app')

@section('content')
  <h1 class="mb-4">ギフトコード入力</h1>
  <div class="mb-5">現在のポイント：{{ $point }}</div>
  <p>ギフトコードを入力してください。</p>
  <form action="/mypage/gift/add" method="post" class="text-center d-flex justify-content-center mb-5">
    @csrf
    <div class="w-75 mr-3">
      <input type="text" class="form-control" name="code" placeholder="例：abcdefg1234567">
    </div>
    <button type="submit" class="btn btn-primary">確定</button>
  </form>
  <div class="text-right">
    <a href="{{ url("/mypage") }}">マイページに戻る</a>
  </div>
@endsection