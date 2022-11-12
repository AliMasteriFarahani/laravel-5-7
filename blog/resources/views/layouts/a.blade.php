<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/bootstrap/css/bootstrap.min.css">
        <script src="/css/bootstrap/js/bootstrap.min.css"></script>
        <title>Laravel</title>
    </head>
    <body dir="ltr">
        <div class="container">
            @yield('content')
        </div>
        <footer>
            @yield('footer')
        </footer>
    </body>
    <style>
        .body{
            direction: ltr !important;
        }
    </style>
</html>
