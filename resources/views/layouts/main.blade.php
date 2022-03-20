
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- css do Bootstrap-->
        
        <!-- css da aplicação -->
        <link href="/css/styles.css" rel="stylesheet">

     </head>
    <body>
        <!-- Diretiva do laravel -->
{{-- ADICIONAS O S INCLUDES PARA AS PÁGINAS --}}
        @yield('content')

        <footer>
        <p>BENETHOWEN &copy; 2022</p>
        </footer>
    </body>
</html>
