@extends('supplier.layouts.app')

@include('supplier.header')

@section('content')
<h1>出庫済み一覧</h1>
<table class="table">
    <thead>
    <tr>
        <th scope="col">出庫番号</th>
        <th scope="col">商品名</th>
        <th scope="col">ISBN</th>
        <th scope="col">数量</th>
        <th scope="col">発注書店</th>
        <th scope="col">出庫日</th>
        <th scope="col"></th>
    </tr>
    </thead>
    <tbody>
    @foreach($data as $arrival)
        <tr>
            <td>{{ $arrival['id'] }}</td>
            <td>{{ $arrival['product_name'] }}</td>
            <td>{{ $arrival['product_id'] }}</td> {{-- TODO:ISBNに --}}
            <td>{{ $arrival['amount'] }}</td>
            <td>{{ $arrival['admin_company_name'] }}</td>
            <td>{{ $arrival['created_at']->format('Y/m/d') }}</td>
            <td>
                <a href data-toggle="modal" data-target="#OrderingModal{{ $arrival['id'] }}">詳細</a>
            </td>
        </tr>
        <!-- Modal -->
        <div class="modal fade bd-example-modal-lg" id="OrderingModal{{ $arrival['id'] }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">出庫済み詳細</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-3">出庫番号</div>
                            <div class="col-9">{{ $arrival['id'] }}</div>
                        </div>
                        <div class="row">
                            <div class="col-3">出庫日</div>
                            <div class="col-9">{{ $arrival['created_at']->format('Y/m/d') }}</div>
                        </div>
                        <div class="row">
                            <div class="col-3">商品名</div>
                            <div class="col-9">{{ $arrival['product_name'] }}</div>
                        </div>
                        <div class="row">
                            <div class="col-3">ISBN</div>{{-- TODO:ISBNに --}}
                            <div class="col-9">{{ $arrival['product_id'] }}</div>
                        </div>
                        <div class="row">
                            <div class="col-3">数量</div>
                            <div class="col-9">{{ $arrival['amount'] }}</div>
                        </div>
                        <div class="row">
                            <div class="col-3">発注書店</div>
                            <div class="col-9">{{ $arrival['admin_company_name'] }}</div>
                        </div>
                        <div class="row">
                            <div class="col-3">郵便番号</div>
                            <div class="col-9">{{ $arrival['admin_postal'] }}</div>
                        </div>
                        <div class="row">
                            <div class="col-3">住所</div>
                            <div class="col-9">{{ $arrival['admin_address'] }}</div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    </tbody>
</table>
@endsection