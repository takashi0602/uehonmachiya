@extends('admin.layouts.app')
@section('content')
<h1>売上ランキング</h1>


<table border="2" rules="all" >
    <tr>
        <th>順位</th>
        <th>会員番号</th>
        <th>名前</th>
        <th>総合金額</th>
    </tr>
    <tr>
        <td>1</td>
        <td>1</td>
        <td>大阪花子</td>
        <td>1000</td>
    </tr>

</table>
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
    </tr>
    <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
    </tr>
    <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitter</td>
    </tr>
    </tbody>
</table>
    @endsection