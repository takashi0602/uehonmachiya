@extends('user.layouts.app')

@section('content')
  <h1>ギフトコード入力</h1>
  <form>
    <div class="form-row">
      <div class="col">
        <input type="text" class="form-control" >
      </div>
      <div class="col">
        <input type="text" class="form-control">
      </div>
      <div class="col">
        <input type="text" class="form-control">
      </div>
    </div>
  </form>


  <a href="#" class="btn btn-戻る btn-lg active" role="button" aria-pressed="true">戻る</a>
  <a href="#" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">確定</a>
@endsection