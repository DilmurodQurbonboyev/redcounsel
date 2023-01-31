<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>404</title>
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/404.css') }}">
</head>

<body>

<div id="notfound">
    <div class="notfound">
        <div class="notfound-404">
            <div></div>
            <h1>404</h1>
        </div>
        <h2>{{ tr('Page not found') }}</h2>
        <p>{{tr('The page you are looking for might have been removed had its name changed or is temporarily unavailable.')}}</p>
        <a href="/">{{ tr('Home') }}</a>
    </div>
</div>
</body>
</html>
