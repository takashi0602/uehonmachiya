<h1>入庫先変更</h1>
<p1>入庫先名</p1><input type="text" name="nyuukoname" size="30" maxlength="20"><br>
<br>
<p1>郵便番号</p1><input type="text" name="postalcode" size="30" maxlength="20"><br>
<br>
<p1>入庫先場所</p1><input type="text" name="address" size="30" maxlength="20"><br>
<br>
<p1>入庫先TEL</p1><input type="text" name="TEL" size="30" maxlength="20"><br>
<br>
<p1>入庫先FAX</p1><input type="text" name="FAX" size="30" maxlength="20"><br>
<br>
<p1>メールアドレス</p1><input type="text" name="meil" size="30" maxlength="20"><br>
<br>
<p1>代表者</p1><input type="text" name="daihyou" size="30" maxlength="20"><br>
<br>
<br>
<input type="reset"value="リセット">   <input type="submit"value="変更">
@extends('admin.layouts.app')
@section('content')
        <h1>入庫先の変更</h1>


        <form >
            <div class="form-group">
                <label class="col-sm-4" for="exampleInputsyohin">入庫先名</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="exampleInputsyohin" aria-describedby="syohinHelp" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4" for="exampleInput" >入庫先郵便番号</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="exampleInputsyuppan" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4" for="exampleInput">入庫先住所</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="exampleInputsyuppan" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4" for="exampleInput">入庫先電話番号(TEL)</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="exampleInputsyuppan" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4" for="exampleInput">入庫気電話番号(FAX)</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="exampleInputsyuppan" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4" for="exampleInput">メールアドレス</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="exampleInputsyuppan" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4" for="exampleInput">代表者名</label>
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

