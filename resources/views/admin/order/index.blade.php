
@extends('admin.layouts.app')
@section('content')
<h1>注文一覧</h1>

<table class="table">
    <thead>
    <tr>
        <th scope="col">NO(注文番号)</th>
        <th scope="col">注文日</th>
        <th scope="col"></th>

    </tr>
    </thead>
    <tbody>
    @foreach($orders as $order)
        <tr>
            <td>{{$order->id}}</td>
            <td>{{$order->created_at}}</td>
            <td><a href data-toggle="modal" data-target="#OrderModal{{ $order->id }}">詳細</a></td>
            <div class="modal fade bd-example-modal-lg" id="OrderModal{{ $order->id }}" tabindex="-1" role="dialog" aria-labelledby="OrderModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="OrderModalCenterTitle">注文詳細</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div></div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
                            <button type="button" class="btn btn-primary">出庫する</button>
                        </div>
                    </div>
                </div>
            </div>
        </tr>
    @endforeach
    </tbody>
</table>

@endsection