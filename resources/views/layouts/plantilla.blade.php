<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        #libro:hover {
            opacity: 0.5;

        }

    </style>
</head>

<body>
    <img class="w-100 img-fluid" style="height:350px" src="/images/foto.png">
    <nav class="navbar navbar-expand-lg navbar-light d-flex" style="background-color: slateblue">
        <div class="container-fluid">
            <a class="navbar-brand"><strong>BLOG</strong></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-3">
                    <a style="color: white; font-size: 18px" class="nav-link ml-3"
                        href="{{ url('/inicio') }}">Inicio</a>
                    <a style="color: white; font-size: 18px" class="nav-link ml-3"
                        href="{{ url('/biografia') }}">Biografia</a>
                    <a style="color: white; font-size: 18px" class="nav-link ml-3"
                        href="{{ url('/libros') }}">Libros</a>
                    <a style="color: white; font-size: 18px" class="nav-link ml-3"
                        href="{{ url('/contacto') }}">Contacto</a>
                </div>
                <!--login y registro-->
                @guest

                    <a style="color: white; font-size: 18px" class="nav-link ml-auto"
                        href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))

                        <a style="color: white; font-size: 18px" class="nav-link"
                            href="{{ route('register') }}">Registro</a>

                    @endif
                @else
                @if(Auth::user()->id =="1")
                        <a style="color: white; font-size: 18px" class="nav-link ml-3"
                        href="{{ url('/crear') }}">Publicar</a>
                        @endif

                    <a id="navbarDropdown" class="nav-link dropdown-toggle ml-auto" href="#" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre
                        style="color: white; font-size: 18px">
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                @endguest

            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-8">
                @yield('cuerpo')
            </div>
            <div class="col-sm-12 col-md-4 text-center mt-5">
                @yield('target')
            </div>
        </div>
    </div>
    <div class="mt-5" style="height: 300px; background-color:rgb(180, 180, 180)">
        <div class="row text-center offset-md-4 p-5">
            <div class="col-1 ml-5">
                <img src="/images/instagram.svg" width="25" height="25">
            </div>
            <div class="col-1">
                <img src="/images/facebook.svg" width="25" height="25">
            </div>
            <div class="col-1">
                <img src="/images/twitter.svg" width="25" height="25">
            </div>
            <div class="col-1">
                <img src="/images/globe.svg" width="25" height="25">
            </div>
        </div>
        <div class="row mt-5">
            <div class="col text-center">
                <p style="font-size: 12px">© J.K. ROWLING 2016</p>
                <p style="font-size: 12px" class="mb-1">Harry Potter and Fantastic Beasts Publishing rights © J.K.
                    Rowling</p>
                <p style="font-size: 12px" class="mb-1">Harry Potter and Fantastic Beasts characters, names and related
                    indicia and trademarks of and © Warner Bros. Entertainment Inc. All Rights Reserved.</p>
                <p style="font-size: 12px">J.K. ROWLING’S WIZARDING WORLD is a trademark of J.K. Rowling and Warner
                    Bros. Entertainment Inc.</p>
            </div>
        </div>
    </div>
</body>

</html>
