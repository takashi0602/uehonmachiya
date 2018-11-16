@extends('admin.layouts.app')
@section('content')
<h1>発注処理</h1>

<div>入庫先名</div>
<form action="">
<select name="ordering" id="">
    <option value="OIC">OIC問屋</option>
    <input type="text" name="個数">

    <input type="button" value="追加">

    <div><input type="button" value="発注"></div>


    <form action="">
        <div class="form-group">
    <option value="OIC">test</option>
</select>
</form>

<div>商品名</div>
<input type="text" name="商品名">
<select name="ordering" id="">
    <option value="OIC">OIC問屋</option>
    <option value="OIC">あ</option>
</select>
<div>個数</div>
        <label class="col-sm-4" for="exampleInputsyohin">入庫先名</label>

        <div class="col-sm-8">
            <input type="text" class="form-control" id="exampleInputsyohin" aria-describedby="syohinHelp" placeholder="">
    </div>
    <div class="form-group">
        <label class="col-sm-4" for="exampleInput" >出版社</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="exampleInputsyuppan" placeholder="">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-4" for="exampleInput">著者</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="exampleInputsyuppan" placeholder="">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-4" for="exampleInput">仕入単価</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="exampleInputsyuppan" placeholder="">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-4" for="exampleInput">販売単価</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="exampleInputsyuppan" placeholder="">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-4" for="exampleInput">入庫先名</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="exampleInputsyuppan" placeholder="">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-4" for="exampleInput">安全在庫数</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="exampleInputsyuppan" placeholder="">
        </div>
    </div>
<div class="text-right mr-4">
    <button type="reset" class="btn btn-primary">リセット</button>
    <button type="submit" class="btn btn-primary " >変更</button>
</div>
</form>
@endsection