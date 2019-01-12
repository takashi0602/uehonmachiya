@extends('user.layouts.app')

@section('content')
  <h1>注文履歴</h1>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">日付</th>
        <th scope="col">商品名</th>
        <th scope="col">冊数</th>
        <th scope="col">値段</th>
        <th scope="col">状況</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      @foreach($data as $d)
        <tr>
          <td>{{ $d["date"] }}</td>
          <td>{{ $d["name"] }}</td>
          <td>{{ $d["amount"] }}冊</td>
          <td>{{ $d["total"] }}</td>
          <td>
            @if($d["status"])
              <span class="text-success">配送済み</span>
            @else
              <span class="text-secondary">配送待ち</span>
            @endif
          </td>
          <td>
            <a href data-toggle="modal" data-target="#detail{{ $d["id"] }}">詳細</a>
          </td>
        </tr>
        <div class="modal fade" id="detail{{ $d["id"] }}" tabindex="-1" role="dialog" aria-labelledby="detail{{ $d["id"] }}Title" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header border-0">
                <h5 class="modal-title" id="detail{{ $d["id"] }}Title">{{ $d["name"] }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div>著者：{{ $d["author"] }}</div>
                <div>
                  @isset($d["isbn"])
                    ISBN：{{ $d["isbn"] }}
                  @endisset
                </div>
                <p class="mb-3">{{ $d["description"] }}</p>
                <div class="mb-3 text-right">1冊：{{ $d["price"] }}円</div>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </tbody>
  </table>
  <div class="text-right">
    <a href="{{ url("/mypage") }}">マイページへ戻る</a>
  </div>
@endsection