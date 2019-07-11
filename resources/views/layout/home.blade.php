<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/style.css">

        <title>Laravel</title>

    </head>
    <body>
       @yield('content');
    </body>


    <script src="jquery-3.4.1.min.js"></script>
</html>
