<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container border mt-5" style="background-color: rgb(248, 235, 178)">
        <h1 class="text-center mt-5">COMENTARIOS</h1>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('mensaje'))
            <div class="alert alert-success">
                <p>{{session('mensaje')}}</p>
            </div>
        @endif
        <form class="text-center mt-5" action="{{url('/crear')}}" method="post">
            @csrf
            <div class="row form-group">
                <label class="col-3 h4">Titulo:</label>
                <input class="col-8" type="text" name="titulo" placeholder="Titulo:">
            </div>
            <div class="row form-group">
                <label class="col-3 mt-5 h4">Comentario:</label>
                <textarea class="col-8" name="comentario" cols="30" rows="10" placeholder="Comentario:"></textarea>
            </div>
            <div class="form-group text-center">
                <button class="btn btn-primary" type="submit" name="enviar" value="enviar">Comentar</button>
            </div>
        </form> 
        <div class="text-center mb-3">
            <a href="{{url('/inicio')}}">Pagina de inicio del blog</a>
        </div>
    </div>
</body>
</html>