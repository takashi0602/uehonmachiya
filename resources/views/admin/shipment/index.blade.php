@extends('admin.layouts.app')

@section('content')
<h1>出庫一覧</h1>

<table class="table">
    <thead>
    <tr>
        <th scope="col">出庫番号</th>
        <th scope="col">会員名</th>
        <th scope="col">出庫日</th>
        <th scope="col"></th>
    </tr>
    </thead>
    <tbody>
        @foreach($data as $shipment)
            <tr>
                <td>{{ $shipment['id'] }}</td>
                <td>{{ $shipment['user_name'] }}</td>
                <td>{{ $shipment['created_at'] }}</td>
                <td><a href data-toggle="modal" data-target="#OrderModal{{ $shipment['id'] }}">詳細</a></td>
                <div class="modal fade bd-example-modal-lg" id="OrderModal{{ $shipment['id'] }}" tabindex="-1" role="dialog" aria-labelledby="OrderModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="OrderModalCenterTitle">出庫詳細</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row mb-3">
                                    <div class="col-auto">注文番号</div>
                                    <div class="col-auto">{{ $shipment['id'] }}</div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-auto">注文日</div>
                                    <div class="col-auto">{{ $shipment['created_at'] }}</div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-auto">会員名</div>
                                    <div class="col-auto">{{ $shipment['user_name'] }}</div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-auto">郵便番号</div>
                                    <div class="col-auto">{{ $shipment['postal'] }}</div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-auto">住所</div>
                                    <div class="col-auto">{{ $shipment['address'] }}</div>
                                </div>
                                <div class="mb-3">
                                    <div class="row mb-1">
                                        <div class="col">商品名</div>
                                        <div class="col">注文数</div>
                                    </div>
                                    @for($i = 0; $i < count($shipment['product_name']); $i++)
                                        <div class="row mb-1">
                                            <div class="col">{{ $shipment['product_name'][$i] }}</div>
                                            <div class="col">{{ $shipment['amount'][$i] }}冊</div>
                                        </div>
                                    @endfor
                                </div>
                                <div class="row mb-3">
                                    <div class="col-auto">売上</div>
                                    <div class="col-auto">{{ array_sum($shipment['sales']) }}円</div>
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