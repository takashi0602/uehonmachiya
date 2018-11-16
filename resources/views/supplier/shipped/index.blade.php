@extends('supplier.layouts.app')

@section('content')
<h1>出庫済み一覧</h1>

<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">出庫済み詳細</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                出庫日：２０１８年　１２月　３日<br>
                商品コード：２０３<br>
                商品名：羅生門　<br>
                個数：１<br>
                発注先名：上本町屋<br>
                発注先住所：〒000-0000 大阪府・・・<br>
                合計金額：1,000円<br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
            </div>
        </div>
    </div>
</div>





<table class="table">
    <thead>
    <tr>
        <th scope="col">出庫日</th>
        <th scope="col">発注コード</th>
        <th scope="col">発注先</th>
        <th scope="col"></th>
    </tr>

    </thead>
    <tbody>
    <tr>
        <th scope="row"></th>
        <td></td>
        <td></td>
        <td><a  class="" data-toggle="modal" data-target="#exampleModalCenter">
                <ins>詳細</ins>
            </a></td>
    </tr>
    <tr>
        <th scope="row"></th>
        <td></td>
        <td></td>
        <td><a  class="" data-toggle="modal" data-target="#exampleModalCenter">
                <ins>詳細</ins>
            </a></td>
    </tr>
    <tr>
        <th scope="row"></th>
        <td></td>
        <td></td>
        <td><a  class="" data-toggle="modal" data-target="#exampleModalCenter">
                <ins>詳細</ins>
            </a></td>
    </tr>
    </tbody>
</table>


<div>
    <a href="">発注一覧</a>
</div>
@endsection