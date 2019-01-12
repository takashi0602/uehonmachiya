@extends('supplier.layouts.app')

@include('supplier.header')

@section ('content')
<h1>発注一覧</h1>
<table class="table">
    <thead>
    <tr>
        <th scope="col">発注番号</th>
        <th scope="col">商品名</th>
        <th scope="col">ISBN</th>
        <th scope="col">数量</th>
        <th scope="col">発注書店</th>
        <th scope="col">発注日</th>
        <th scope="col"></th>
    </tr>
    </thead>
    <tbody>
    @foreach($data as $ordering)
        <tr>
            <td>{{ $ordering['ordering_id'] }}</td>
            <td>{{ $ordering['product_name'] }}</td>
            <td>{{ $ordering['isbn'] }}</td>
            <td>{{ $ordering['amount'] }}</td>
            <td>{{ $ordering['admin_company_name'] }}</td>
            <td>{{ $ordering['created_at']->format('Y/m/d') }}</td>
            <td>
                <a href data-toggle="modal" data-target="#OrderingModal{{ $ordering['ordering_id'] }}">詳細</a>
            </td>
        </tr>
        <!-- Modal -->
        <div class="modal fade bd-example-modal-lg" id="OrderingModal{{ $ordering['ordering_id'] }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">発注詳細</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-3">発注番号</div>
                            <div class="col-9">{{ $ordering['ordering_id'] }}</div>
                        </div>
                        <div class="row">
                            <div class="col-3">発注日</div>
                            <div class="col-9">{{ $ordering['created_at']->format('Y/m/d') }}</div>
                        </div>
                        <div class="row">
                            <div class="col-3">商品名</div>
                            <div class="col-9">{{ $ordering['product_name'] }}</div>
                        </div>
                        <div class="row">
                            <div class="col-3">ISBN</div>
                            <div class="col-9">{{ $ordering['isbn'] }}</div>
                        </div>
                        <div class="row">
                            <div class="col-3">数量</div>
                            <div class="col-9">{{ $ordering['amount'] }}</div>
                        </div>
                        <div class="row">
                            <div class="col-3">発注書店</div>
                            <div class="col-9">{{ $ordering['admin_company_name'] }}</div>
                        </div>
                        <div class="row">
                            <div class="col-3">郵便番号</div>
                            <div class="col-9">{{ $ordering['admin_postal'] }}</div>
                        </div>
                        <div class="row">
                            <div class="col-3">住所</div>
                            <div class="col-9">{{ $ordering['admin_address'] }}</div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <form action="{{ url('/supplier/ordering/shipment') }}" method="post">
                            @csrf
                            <input type="hidden" name="ordering_id" value="{{ $ordering['ordering_id'] }}">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
                            <button type="submit" class="btn btn-primary">出庫する</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    </tbody>
</table>
@endsection

