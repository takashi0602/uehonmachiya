@extends('admin.layouts.app')
@section('content')
<div>
    <h1>在庫一覧</h1>
    <div class="mb-4"> <!-- TODO:実装 -->
        <form action="{{ url('/admin/stock/search') }}" method="post">
            <div class="row">
                <select name="" id=""class="form-control col-6 mx-3">
                    <option>在庫状況</option>
                    <option>○</option>
                    <option>▲</option>
                    <option>×</option>
                    <option>○, ▲</option>
                    <option>▲, ×</option>
                    <option>○, ×</option>
                </select>
                <button type="submit" class="btn btn-primary col-auto">検索</button>
            </div>
        </form>
    </div>

    <div>
        <a href="{{ url('/admin/ordering/process') }}">発注処理をする</a>
    </div>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">NO.(商品番号)</th>
            <th scope="col">商品名</th>
            <th class="text-right" scope="col">在庫数</th>
            <th class="text-right" scope="col">安全在庫数</th>
            <th class="text-center" scope="col">状況</th>
            <th scope="col"></th>
        </tr>
        </thead>
        @foreach($stocks as $stock)
            <tr>
                <td>{{ $stock->id }}</td>
                <td>{{ $products[$count++]->name }}</td>
                <td class="text-right">{{ $stock->amount }}本</td>
                <td class="text-right">{{ $stock->safety }}本</td>
                @if($stock->amount - $stock->safety >= 0)
                    <td class="text-success text-center">○</td>
                @elseif($stock->amount == 0)
                    <td class="text-danger text-center">×</td>
                @else
                    <td class="text-warning text-center">▲</td>
                @endif
                <td>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#StockModal{{ $stock->product_id }}">発注処理</button>

                    <!-- Modal -->
                    <div class="modal fade" id="StockModal{{ $stock->product_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">発注処理</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ url('/admin/ordering/process/create') }}" method="post">
                                        @csrf
                                        <div class="row mb-3">
                                            <div class="col-3">商品名</div>
                                            <div class="col-9"></div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-3">入庫先名</div>
                                            <div class="col-9"></div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-3">仕入れ単価</div>
                                            <div class="col-9">1冊：円</div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-3">発注数</div>
                                            <div class="col-5">
                                                <input type="number" class="form-control" value="1" name="amount">
                                            </div>
                                        </div>
                                        <div class="text-right pt-3">
                                            <input type="hidden" value="{{ $stock->product_id }}" name="product_id">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">キャンセル</button>
                                            <button type="submit" class="btn btn-success">発注する</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        @endforeach
    </table>
</div>
@endsection