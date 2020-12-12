@extends('layouts.app')

@section('content')



<div class="shadow p-4 mb-4 mr-5 ml-5 d-flex justify-content-between bg-white">
    <div>
        <h1>Lista de Productos</h1>
    </div>

    <div class="">
        <h2><Strong>Importe total:</Strong> $10.000</h2>
    </div>
</div>


<div class="container">
    @foreach ($productos as $producto)

        <div class="card mb-4 d-flex" style="width: 400px">

                <img class="img-thumbnail card-img-top" src="{{asset('storage').'/'.$producto->imagen}}" alt="">

            <div class="card-body">
                    <h3 class="card-title"><strong>Nombre: </strong> {{$producto->nombre}}</h3>
                    <h3 class="card-text"><strong>Cantidad: </strong> {{$producto->Cantidad}}</h3>
                    <h1 class="card-text"><strong>Precio: $</strong> {{$producto->precio}}</h1>
            </div>
        </div>
        @endforeach

        <button id="Comprar" class="btn btn-outline-success my-2 my-sm-0" type="submit">Comprar</button>
</div>

@endsection

