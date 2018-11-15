@extends('admin.layouts.app')
@section('content')
    <h1>商品の変更</h1>


    <form >
        <div class="form-group">
            <label class="col-sm-4" for="exampleInputsyohin">商品名</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="exampleInputsyohin" aria-describedby="syohinHelp" placeholder="">
            </div>
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
        <button type="submit" class="btn btn-primary " >リセット</button>
        <button type="submit" class="btn btn-primary" >変更</button>
    </form>
@endsection
