
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- css do Bootstrap-->
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

       <!-- Fonte do Google -->
       <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">


        <!-- css da aplicação -->
        <link href="/css/styles.css" rel="stylesheet">

     </head>
    <body>
        <div class="container md-10 sm-4 ">
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
            <div class="cpllapse navbar-collapse" id="navbar">
                <a href= "/" class="navbar-brand">
                   <img src="/image/favicon.png" alt="BNTH logo">

                </a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                     <a href="sobre" class="nav-link">Sobre</a>
                    
                    </li>
                    <li class="nav-item">
                     <a href="postagem" class="nav-link">Postagem</a>
                    </li>
                    <li class="nav-item">
                     <a href="videoaula" class="nav-link">Videoaulas</a>
                    </li>
                    <li class="nav-item">
                     <a href="videopost" class="nav-link">Videopost</a>
                    </li>


                </ul>
            </div>

            </nav>
        </header>
        <!-- Diretiva do laravel -->
{{-- ADICIONAS O S INCLUDES PARA AS PÁGINAS --}}
        @yield('content')
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <footer>
        <p class="text-center">BENETHOWEN &copy; 2022</p>
        </footer>

    </div>
    </body>
</html>
