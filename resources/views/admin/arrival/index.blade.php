@extends('admin.layouts.app')
@section('content')
<h1>入庫一覧</h1>
<table class="table">
    <thead>
    <tr>
        <th scope="col">入庫番号</th>
        <th scope="col">入庫先名</th>
        <th scope="col">状況</th>
        <th scope="col">入庫処理</th>
        <th scope="col"></th>
    </tr>
    </thead>
    <tbody>
    @foreach($arrivals as $arrival)
    <tr>
        <td>{{ $arrival->id }}</th>
        <td>{{ $suppliers[$count]->name }}</th>
        <td>
            @if($arrival->status)
                <span class="text-success">入庫済み</span>
            @else
                <span class="text-info">配送中</span>
            @endif
        </td>
        <td>
            @if($arrival->status)
                <span class="text-secondary">入庫処理済み</span>
            @else
                <a href data-toggle="modal" data-target="#modal-arrival{{ $arrival->id }}">入庫処理</a>
            @endif
        </td>
        <div class="modal" id="modal-arrival{{ $arrival->id }}" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title" id="modal-label">入庫処理</h2>
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>
                            ※ 商品が入庫された際に、入庫処理ボタンを押してください。<br>
                            入庫処理ボタンを押すと、状況が配送中から入庫済みに変更されます。
                        </p>
                    </div>
                    <div class="modal-footer">
                        <form action="{{ url('/admin/arrival/processing') }}" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{ $arrival->id }}">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
                            <button type="submit" class="btn btn-primary">入庫処理</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <td>
            <a href data-toggle="modal" data-target="#modal-sample{{ $arrival->id }}">詳細</a>
        </td>
        <div class="modal" id="modal-sample{{ $arrival->id }}" tabindex="-1">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title" id="modal-label">入庫詳細</h2>
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row mb-3">
                            <div class="col-auto">入庫番号</div>
                            <div class="col-auto">{{ $arrival->id }}</div>
                        </div>
                        @if($arrival->status)
                            <div class="row mb-3">
                                <div class="col-auto">入庫日</div>
                                <div class="col-auto">{{ $arrival->updated_at->format("Y/m/d") }}</div>
                            </div>
                        @endif
                        <div class="row mb-3">
                            <div class="col-auto">入庫先</div>
                            <div class="col-auto">{{ $suppliers[$count]->name }}</div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-auto">郵便番号</div>
                            <div class="col-auto">〒{{ $suppliers[$count]->postal }}</div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-auto">住所</div>
                            <div class="col-auto">{{ $suppliers[$count]->address }}</div>
                        </div>
                        <div class="mb-3">
                            <div class="row mb-1">
                                <div class="col-6">商品名</div>
                                <div class="col-3">ISBN</div>
                                <div class="col">発注数</div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-6">{{ $products[$count]->name }}</div>
                                <div class="col-3">{{ $products[$count]->isbn }}</div>
                                <div class="col">{{ $arrival->amount }}冊</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-auto">仕入れ価格</div>
                            <div class="col-auto">{{ $products[$count++]->price * $arrival->amount }}円</div>
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
<div class="d-flex justify-content-center">
    <div>{{ $arrivals->links() }}</div>
</div>
@endsection


