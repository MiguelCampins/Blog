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
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-ligth p-0 opacity-5 ">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-md-center" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a style=" font-size: 18px" class="nav-link ml-2" href="{{ url('/inicio') }}">Inicio</a>
                    <a style=" font-size: 18px" class="nav-link ml-2" href="{{ url('/biografia') }}">Biografia</a>
                    <a style=" font-size: 18px" class="nav-link ml-2" href="{{ url('/libros') }}">Libros</a>
                    <a style=" font-size: 18px" class="nav-link ml-2" href="{{ url('/contacto') }}">Contacto</a>
                </div>
            </div>
        </div>
    </nav>
    <img class="w-100 img-fluid" style="height:280px" src="https://www.jkrowling.com/wp-content/uploads/2016/10/JKR_Banner_WRITING_Final.jpg">
    <section style="height: 300px; background-color:rgb(202, 202, 202)">
        <div class="container">
            <div class="row justify-content-md-center text-center">
                <div class="col-1" style="margin-top: 200px">
                    <a href="@yield('anterior')"><img src="/images/chevron-left.svg" width="40" height="40"></a>
                </div>
                <div class="col-3 mt-4">
                    <img id="foto" src="@yield('foto')" class="img-fluid" style="box-shadow: 15px 15px 5px grey;">

                    <p class="mt-3 h4"><strong>@yield('name')</strong></p>
                    <hr>
                    <p>@yield('texto')</p>
                    <button class="btn btn-primary mb-5" type="button" data-toggle="modal"
                        data-target="#myModal3">Comprar</button>
                        
                    <div class="modal fade" id="myModal3">
                        <div class="modal-dialog modal-md">
                            <div class="modal-content">
                                <form action="{{ url('/reserva') }}" method="post">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title" name="libro">@yield('libro')</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    @csrf
                                    <!-- Modal body -->
                                    <div class="modal-body text-justify">

                                        <div class="form-group">
                                            <label for="nombre">Nombre</label>
                                            <input type="text" class="form-control" name="nombre">
                                        </div>
                                        <div class="form-group">
                                            <label for="apellido">Apellidos</label>
                                            <input type="text" class="form-control" name="apellido">
                                        </div>
                                        <div class="form-group">
                                            <label for="dni">Dni</label>
                                            <input type="text" class="form-control" name="dni">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Direccion correo</label>
                                            <input type="email" class="form-control" name="email">
                                        </div>
                                    </div>
                                    <!-- Modal footer -->
                                    <input type="text" value="@yield('titulo')" name="libro" hidden>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Enviar</button>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-1" style="margin-top: 200px">
                    <a href="@yield('siguiente')"><img src="/images/chevron-right.svg" width="40" height="40"></a>
                </div>
            </div>
        </div>
    </section>

</body>

</html>
