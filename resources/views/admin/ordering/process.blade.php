@extends('admin.layouts.app')
@section('content')
<h1>発注処理</h1>

<form action="">


    <div class="form-group">
        <label for="number" class="control-label col-sm-4">入庫先名</label>
        <div class="col-sm-10">
            <select class="form-control" id="number" name="number">
                <option value="1">OIC問屋</option>
                <option value="2" selected="selected">選択してください。</option>
                <option value="3">兵庫</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-4" for="exampleInput" >出版社</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="exampleInputsyuppan" placeholder="">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-4" for="exampleInput">著者</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="exampleInputsyuppan" placeholder="">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-4" for="exampleInput">仕入単価</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="exampleInputsyuppan" placeholder="">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-4" for="exampleInput">販売単価</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="exampleInputsyuppan" placeholder="">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-4" for="exampleInput">入庫先名</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="exampleInputsyuppan" placeholder="">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-4" for="exampleInput">安全在庫数</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="exampleInputsyuppan" placeholder="">
        </div>
    </div>

    <div class="text-md-center">
    <button type="submit" class="btn btn-primary" pull-right>リセット</button>
    <button type="submit" class="btn btn-primary" pull-right>発注</button>
    </div>
</form>
@endsection