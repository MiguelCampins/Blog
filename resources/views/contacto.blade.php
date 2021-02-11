@extends('layouts.plantilla')

@section('cuerpo')
    
<div class="container border mt-5" style="background-color:rgb(245, 232, 252)">
    <h1 class="text-center mt-5">SUGERENCIAS</h1>

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
    <form class="text-center mt-5" action="{{url('/contacto')}}" method="post">
        @csrf
        <div class="row form-group">
            <label class="col-3 h4">Pepino:</label>
            <input class="col-8" type="text" name="nombre" placeholder="Nombre:">
        </div>
        <div class="row form-group">
            <label class="col-3 h4">Email:</label>
            <input class="col-8" type="email" name="email" placeholder="Email:">
        </div>
        <div class="row form-group">
            <label class="col-3 mt-5 h4">Comentario:</label>
            <textarea class="col-8" name="comentario" cols="30" rows="10" placeholder="Comentario:"></textarea>
        </div>
        <div class="form-group text-center">
            <button class="btn btn-primary" type="submit" name="enviar" value="enviar">Enviar</button>
        </div>
    </form> 
    <div class="text-center mb-3">
        <a href="{{url('/inicio')}}">Pagina de inicio del blog</a>
    </div>
</div>

@endsection