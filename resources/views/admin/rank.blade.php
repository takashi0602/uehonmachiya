@extends('admin.layouts.app')
@section('content')
<h1>売上ランキング</h1>
<table class="table">
    <thead>
    <tr>
        <th scope="col">順位</th>
        <th scope="col">名前</th>
        <th scope="col">総合金額</th>
    </tr>
    </thead>
    <tbody>
        @foreach($data as $rank)
            <tr>
                <td>{{ $count++ }}</td>
                <td>{{ $rank['user_name'] }}</td>
                <td>{{ $rank['money'] }}円</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection