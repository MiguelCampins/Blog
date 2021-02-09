@extends('layouts.plantilla')

<body style="background-color: rgb(201, 189, 223)">
    
</body>

@section('cuerpo')
    
        <div class="border border-5 p-4 mt-5" style="background-color: slateblue">
            <h1 id="publi" class="text-center my-3">Publicaciones</h1>
                <div class="row justify-content-center p-3">
                    <div class="col-12">
                        @foreach ($publicaciones as $publicacion)
                            <div class="card mt-3 ">
                                <div class="card-body border border-5 border-primary">
                                    <h2 class="card-title">{{$publicacion->titulo}} <span class="small ml-3" style="font-size: 18px">{{$publicacion->created_at->toDateString()}}</span></h2><label for=""></label>
                                    <p class="card-text">{{$publicacion->comentario}}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                {{$publicaciones->links()}}
        </div>
@endsection
    
@section('target')
    <img src="/images/foto2.jpg" class="img-fluid" style="width: 400px" height="300px">
        <div class="border border-5 mt-4 mx-5 p-4">
             <p style="font-size: 18px">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel exercitationem perferendis nemo similique beatae fugiat,
                quidem sequi consectetur esse, labore blanditiis, eos cupiditate consequuntur reprehenderit delectus minima maxime numquam temporibus.
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel exercitationem perferendis nemo similique beatae fugiat, quidem sequi consectetur esse, labore blanditiis,
                eos cupiditate consequuntur reprehenderit delectus minima maxime numquam temporibus.</p>
            <p style="font-size: 18px">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel exercitationem perferendis nemo similique beatae fugiat,
                quidem sequi consectetur esse, labore blanditiis, eos cupiditate consequuntur reprehenderit delectus minima maxime numquam temporibus.
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel exercitationem perferendis nemo similique beatae fugiat, quidem sequi consectetur esse, labore blanditiis,
                eos cupiditate consequuntur reprehenderit delectus minima maxime numquam temporibus.</p>
        </div>
@endsection        
 