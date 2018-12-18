
@extends('admin.layouts.app')
@section('content')
<h1>注文一覧</h1>

<table class="table">
    <thead>
    <tr>
        <th>NO(注文番号)</th>
        <th>会員名</th>
        <th>注文日</th>
        <th></th>

    </tr>
    </thead>
    <tbody>
    @foreach($data as $order)
        @if($order['status'] == 0)
            <tr>
                <td>{{ $order['id'] }}</td>
                <td>{{ $order['user_name'] }}</td>
                <td>{{ $order['created_at'] }}</td>
                <td><a href data-toggle="modal" data-target="#OrderModal{{ $order['id'] }}">詳細</a></td>
                <div class="modal fade bd-example-modal-lg" id="OrderModal{{ $order['id'] }}" tabindex="-1" role="dialog" aria-labelledby="OrderModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="OrderModalCenterTitle">注文詳細</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row mb-3">
                                    <div class="col-auto">注文番号</div>
                                    <div class="col-auto">{{ $order['id'] }}</div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-auto">注文日</div>
                                    <div class="col-auto">{{ $order['created_at'] }}</div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-auto">会員名</div>
                                    <div class="col-auto">{{ $order['user_name'] }}</div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-auto">郵便番号</div>
                                    <div class="col-auto">{{ $order['postal'] }}</div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-auto">住所</div>
                                    <div class="col-auto">{{ $order['address'] }}</div>
                                </div>
                                <div class="mb-3">
                                    <div class="row mb-1">
                                        <div class="col">商品名</div>
                                        <div class="col">注文数</div>
                                        <div class="col">在庫数</div>
                                    </div>
                                    @for($i = 0; $i < count($order['product_name']); $i++)
                                        <div class="row mb-1">
                                            <div class="col">{{ $order['product_name'][$i] }}</div>
                                            <div class="col">{{ $order['amount'][$i] }}冊</div>
                                            <div class="col">{{ $order['stock'][$i] }}冊</div>
                                        </div>
                                    @endfor
                                </div>
                                <div class="row mb-3">
                                    <div class="col-auto">売上</div>
                                    <div class="col-auto">{{ array_sum($order['sales']) }}円</div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <form action="{{ url('/admin/order/shipment') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="order_id" value="{{ $order['id'] }}">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
                                    <button type="submit" class="btn btn-primary">出庫する</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </tr>
        @endif
    @endforeach
    </tbody>
</table>

@endsection