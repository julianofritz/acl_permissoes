<html>
    <head>
        <title>App Juliano - @yield('title')</title>
    </head>

    <body>
        <h1>Cabeçalho faz parte do layout</h1>
        @section('sidebar')
            This is the master sidebar.
        @show

        <div class="container">
            @yield('content')
        </div>
        <h1>Rodapé faz parte do layout</h1>
    </body>
</html>