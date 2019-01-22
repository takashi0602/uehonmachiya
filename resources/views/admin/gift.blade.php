@extends('admin.layouts.app')

@section('content')
  <h1 class="mb-3">ギフトコード一覧</h1>
  <form action="{{ url('/admin/gift/create') }}" method="post" class="mb-3">
    @csrf
    <h5>ギフトコードの追加</h5>
    <p>追加するギフトコードの数量とポイントを入力してください。</p>
    <div class="row">
      <div class="col-3">
        <input type="number" class="form-control" value="1" name="amount">
      </div>
      <div class="col-auto align-self-end pl-0">つ</div>
      <div class="col-3">
        <input type="number" class="form-control" value="1" name="point">
      </div>
      <div class="col-auto align-self-end pl-0">pt</div>
      <div class="col-auto">
        <button type="submit" class="btn btn-primary">追加</button>
      </div>
    </div>
  </form>
  <table class="table">
    <thead>
    <tr>
      <th scope="col">番号</th>
      <th scope="col">ギフトコード</th>
      <th scope="col">ポイント</th>
      <th scope="col">状況</th>
    </tr>
    </thead>
    <tbody>
    @foreach($gifts as $gift)
      <tr>
        <td>{{ $gift->id }}</td>
        <td>{{ $gift->code }}</td>
        <td>{{ $gift->point }}pt</td>
        <td>
          @if($gift->use_flag)
            <span class="text-secondary">使用済み</span>
          @else
            <span class="text-success">未使用</span>
          @endif
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
  <div class="d-flex justify-content-center">
    <div>{{ $gifts->links() }}</div>
  </div>
@endsection