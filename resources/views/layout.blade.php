<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Carros</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('css')
</head>
<body>

    <div class="container-fluid">
        @yield('content')
    </div>


    <footer>


        <link rel="stylesheet" href="{{ asset('js/app.js') }}">
        @yield('js')
    </footer>

</body>
</html>
