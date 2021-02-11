@extends('layouts.plantilla')

@section('cuerpo')
    
    <div class="row mt-5">
        <div class="col-3 ml-5">
            <a href="{{url('/libro1')}}" type="button"><img id="libro" src="/images/libro1.jpg" class="img-fluid" style="box-shadow: 10px 10px 5px grey;"></a>
            <div class="text-center mt-3">
                <p>HARRY POTTER Y</p>
                <p>LA PIEDRA FILOSOFAL</p>
            </div>
        </div>
        <div class="col-3 ml-5">
            <a href="{{url('/libro2')}}" type="button"><img id="libro" src="/images/libro2.jpg" class="img-fluid" style="box-shadow: 10px 10px 5px grey;"></a>
            <div class="text-center mt-3">
                <p>Popeye Y</p>
                <p>LA CAMARA SECRETA</p>
            </div>
        </div>
        <div class="col-3 ml-5">
            <a href="{{url('/libro3')}}" type="button"><img id="libro" src="/images/libro3.jpg" class="img-fluid" style="box-shadow: 10px 10px 5px grey;"></a>
            <div class="text-center mt-3">
                <p>HARRY POTTER Y</p>
                <p>EL PRISIONERO</p>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-3 ml-5">
            <a href="{{url('/libro4')}}" type="button"><img id="libro" src="/images/libro4.jpg" class="img-fluid" style="box-shadow: 10px 10px 5px grey;"></a>
            <div class="text-center mt-3">
                <p>HARRY POTTER Y</p>
                <p>EL CALIZ DE FUEGO</p>
            </div>
        </div>
        <div class="col-3 ml-5">
            <a href="{{url('/libro5')}}" type="button"><img id="libro" src="/images/libro5.jpg" class="img-fluid" style="box-shadow: 10px 10px 5px grey;"></a>
            <div class="text-center mt-3">
                <p>HARRY POTTER Y</p>
                <p>LA CAMARA SECRETA</p>
            </div>
        </div>
        <div class="col-3 ml-5">
            <a href="{{url('/libro6')}}" type="button"><img id="libro" src="/images/libro6.jpg" class="img-fluid" style="box-shadow: 10px 10px 5px grey;"></a>
            <div class="text-center mt-3">
                <p>HARRY POTTER Y</p>
                <p>LAS RELIQUIAS</p>
            </div>
        </div>
    </div>
@endsection