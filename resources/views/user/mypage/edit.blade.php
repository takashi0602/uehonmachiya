@extends('user.layouts.app')

@section('content')
  <h1>個人情報の変更</h1>
  <form action="{{ url("/mypage/edit/post") }}" method="post">
    @csrf
    <div class="row mb-3">
      <div class="col-sm-3">名前</div>
      <div class="col-sm-9">
        <input class="form-control" type="text" value="{{ $user->name }}" name="name">
      </div>
    </div>
    <div class="row mb-3">
      <div class="col-sm-3">フリガナ</div>
      <div class="col-sm-9">
        <input class="form-control" type="text" value="{{ $user->kana }}" name="kana">
      </div>
    </div>
    <div class="row mb-3">
      <div class="col-sm-3">性別</div>
      <div class="col-sm-9">
        @if($user->sex)
          <div class="form-check">
            <input class="form-check-input" type="radio" name="sex" id="radios1" value="0">
            <label class="form-check-label" for="radios1">男性</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="sex" id="radios2" value="1" checked>
            <label class="form-check-label" for="radios2">女性</label>
          </div>
        @else
          <div class="form-check">
            <input class="form-check-input" type="radio" name="sex" id="radios1" value="0" checked>
            <label class="form-check-label" for="radios1">男性</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="sex" id="radios2" value="1">
            <label class="form-check-label" for="radios2">女性</label>
          </div>
        @endif
      </div>
    </div>
    <div class="row mb-3">
      <div class="col-sm-3">郵便番号</div>
      <div class="col-sm-9">
        <input class="form-control" type="text" value="{{ $user->postal }}" name="postal">
      </div>
    </div>
    <div class="row mb-3">
      <div class="col-sm-3">住所</div>
      <div class="col-sm-9">
        <input class="form-control" type="text" value="{{ $user->address }}" name="address">
      </div>
    </div>
    <div class="row mb-3">
      <div class="col-sm-3">電話番号</div>
      <div class="col-sm-9">
        <input class="form-control" type="text" value="{{ $user->tel }}" name="tel">
      </div>
    </div>
    <div class="row mb-3">
      <div class="col-sm-3">誕生日</div>
      <div class="col-sm-9">
        <input class="form-control" type="date" value="{{ $user->birth }}" name="birth">
      </div>
    </div>
    <div class="text-right">
      <button type="submit" class="btn btn-primary">変更</button>
    </div>
  </form>
@endsection