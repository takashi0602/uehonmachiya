@extends('admin.layouts.app')

@section('content')
<h1>会員一覧</h1>

<table class="table">
        <thead>
        <tr>
            <th scope="col">NO.(会員番号)</th>
            <th scope="col">名前</th>
            <th scope="col">郵便番号</th>
            <th scope="col">住所</th>
            <th scope="col">メールアドレス</th>
            <th scope="col">生年月日</th>
            <th scope="col">電話番号</th>
            <th scope="col">性別</th>
            <th scope="col">登録日</th>
        </tr>
        </thead>
        <tbody>

        @foreach($customers as $customer)
        <tr>
            <th scope="row">1</th>
            <td>
                <p>{{$customer->name}}</p>
                </td>

            <td>
                    <p>{{$customer->postal}}</p>
            </td>

            <td>
                    <p>{{$customer->address}}</p>
            </td>

            <td>
                    <p>{{$customer->email}}</p>
            </td>

            <td>
                    <p>{{$customer->birth}}</p>
            </td>

            <td>
                    <p>{{$customer->tel}}</p>

            </td>

            <td>
                @if($customer->sex)
                    <p>女性</p>
                @else
                    <p>男性</p>
                @endif
            </td>
        </tr>
        @endforeach

        </tbody>
    </table>
@endsection