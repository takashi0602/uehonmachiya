@extends('supplier.layouts.app')
@section ('content')
<h1>発注詳細</h1>

<div class="container">
    <div class="row">
        <div class="pb-3 col">
            発注日
        </div>
        <div class="col">
            ２０１８年１２月１日
        </div>
    </div>

    <div class="row">
        <div class="pb-3 col">
            発注コード
        </div>
        <div class="col">
        </div>
    </div>

    <div class="row">
    <div class="pb-3 col">
        商品コード
    </div>
    <div class="col">
        商品名
    </div>
    <div class="col">
        個数
    </div>

</div>
    <div class="row">
        <div class="pb-3 col">
            ２０３
        </div>
        <div class="col">
            羅生門
        </div>
        <div class="col">
            １
        </div>
    </div>
    <div class="row">
        <div class="pb-3 col">
            発注先名
        </div>
        <div class="my-8 col-sm-8">
            上本町屋
        </div>
    </div>
    <div class="row">
        <div class="pb-3 col">
            発注先住所
        </div>
        <div class="my-8 col-sm-8">
            〒000-0000
        </div>
    </div>
    <div class="row">
        <div class="col">

        </div>
        <div class="pb-3 my-8 col-sm-8">
            大阪府
        </div>
    </div>
    <div class="row">
        <div class="pb-3 col">

            合計金額
        </div>
        <div class="my-8 col-sm-8">
            １０００円
        </div>
    </div>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
        発注詳細
    </button>

    <!-- Modal -->
    <div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">発注詳細</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    発注日 １２月１日<br>
                    発注コード:<br>
                    商品コード: 203<br>
                    商品名: 羅生門<br>
                    個数:　１<br>
                    発注先名: 上本町屋<br>
                    発注先住所: 〒０００-００００　大阪府～<br>
                    合計金額: １０００円<br>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
                    <button type="button" class="btn btn-primary">出庫する</button>
                </div>
            </div>
        </div>
    </div>

<input type="button" value="戻る">

    <input type="button" value="出庫する">
@endsection
