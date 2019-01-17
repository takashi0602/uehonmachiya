@extends('admin.layouts.app')
@section('content')

<h1>発注一覧</h1>
<table class="table">
    <thead>
    <tr>
        <th scope="col">発注番号</th>
        <th scope="col">入庫先</th>
        <th scope="col">商品名</th>
        <th scope="col">発注数</th>
        <th scope="col">発注日</th>
        <th scope="col">状況</th>
        <th scope="col"></th>
    </tr>
    </thead>
    <tbody>
    @foreach($data as $ordering)
        <tr>
            <td>{{ $ordering['id'] }}</td>
            <td>{{ $ordering['supplier_name'] }}</td>
            <td>{{ $ordering['product_name'] }}</td>
            <td>{{ $ordering['amount'] }}冊</td>
            <td>{{ $ordering['created_at']->format("Y/m/d") }}</td>
            <td>
                @if($ordering['status'] == 0)
                    配送待ち
                @endif
            </td>
            <td>
                <a href data-toggle="modal" data-target="#OrderingModal{{ $ordering['id'] }}">詳細</a>
            </td>
            <div class="modal fade bd-example-modal-lg" id="OrderingModal{{ $ordering['id'] }}" tabindex="-1" role="dialog" aria-labelledby="OrderModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="OrderModalCenterTitle">発注詳細</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row mb-3">
                                <div class="col-auto">発注番号</div>
                                <div class="col-auto">{{ $ordering['id'] }}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-auto">発注日</div>
                                <div class="col-auto">{{ $ordering['created_at']->format("Y/m/d") }}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-auto">入庫先</div>
                                <div class="col-auto">{{ $ordering['supplier_name'] }}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-auto">郵便番号</div>
                                <div class="col-auto">〒{{ $ordering['postal'] }}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-auto">住所</div>
                                <div class="col-auto">{{ $ordering['address'] }}</div>
                            </div>
                            <div class="mb-3">
                                <div class="row mb-1">
                                    <div class="col-6">商品名</div>
                                    <div class="col-3">ISBN</div>
                                    <div class="col">発注数</div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-6">{{ $ordering['product_name'] }}</div>
                                    <div class="col-3">{{ $ordering['isbn'] }}</div>
                                    <div class="col">{{ $ordering['amount'] }}冊</div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-auto">仕入れ価格</div>
                                <div class="col-auto">{{ $ordering['price'] * $ordering['amount'] }}円</div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
                        </div>
                    </div>
                </div>
            </div>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
