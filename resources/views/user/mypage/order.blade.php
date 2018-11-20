@extends('user.layouts.app')

@section('content')
  <h1>注文状況</h1>
  <tr>
    <div class="container">
      <div class="row">
        <td><div class="col-md-3">ドラえもん</div></td>
        <td><div class="col-md-3">１冊</div></td>
        <td> <div class="col-md-3">800円</div></td>
        <td><div class="col-md-3">1月1日</div></td>

      </div>

    </div>
    </div>
  </tr>
  <div class="mx-auto" style="width: 200px;">
    (10行でページネーション)
  </div>

  <nav aria-label="...">
    <ul class="pagination">
      <li class="page-item disabled">
        <a class="page-link" href="#" tabindex="-1">Previous</a>
      </li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item active">
        <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
      </li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item">
        <a class="page-link" href="#">Next</a>
      </li>
    </ul>
  </nav>

  <div><input type="button" value="マイページに戻る"></div>
@endsection