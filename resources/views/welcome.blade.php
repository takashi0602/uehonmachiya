<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
    </head>
    <body>
        <div>
            <div>
                <a href="/top">会員</a>
            </div>
            <div>
                <a href="/admin/login">管理者</a>
            </div>
            <div>
                <a href="/supplier/login">入庫先</a>
            </div>
        </div>
    </body>
</html>
