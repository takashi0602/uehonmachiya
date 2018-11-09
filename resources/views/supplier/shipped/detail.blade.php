@extends('supplier.layouts.app')
@section ('content')

<h1>出庫済み詳細</h1>



<table class="table ">

    <tr>
        <td> 出庫日</td>
        <td>２０１８年 １２月　３日 </td>
        <td> </td>
    </tr>
    <tr>
        <td>発注コード</td>
        <td>１</td>
        <td></td>

    </tr>
    <tr>
        <td>商品コード</td>
        <td>商品名</td>
        <td>個数</td>

    </tr>
    <tr>
        <td>２０３</td>
        <td>羅生門</td>
        <td>１</td>
    </tr>
    <tr>
        <td>発注先名</td>
        <td>上本町屋</td>
        <td></td>

    </tr>
    <tr>
        <td>発注先住所</td>
        <td>〒０００-００００</td>
        <td></td>

    </tr>
    <tr>
        <td></td>
        <td>大阪府・・・</td>
        <td></td>

    </tr>
    <tr>
        <td>合計金額</td>
        <td>１，０００円</td>
        <td></td>

    </tr>
</table>
<input type="button" value="戻る"style="position: absolute; right: 50px;">

@endsection


