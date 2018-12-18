@extends('admin.layouts.app')

@section('content')
<h1>出庫一覧</h1>

<table class="table">

    <thead>
    <tr>
        <th scope="col">NO</th>
        <th scope="col">出庫日</th>
        <th scope="col"> </th>

    </tr>
    </thead>
    <tbody>
    @foreach($shipments as $shipment)
    <tr>
        <th scope="row">{{$shipment->id}}</th>
        <td>{{$shipment->created_at}}</td>
        <td><a href data-toggle="modal" data-target="#OrderModal{{ $shipment->id }}">詳細</a></td>
        <div class="modal fade bd-example-modal-lg" id="OrderModal{{ $shipment->id }}" tabindex="-1" role="dialog" aria-labelledby="OrderModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="OrderModalCenterTitle">出庫詳細</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div></div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
                    </div>
                </div>
            </div>
        </div>
    </tr>
    </tbody>
    @endforeach
</table>

@endsection