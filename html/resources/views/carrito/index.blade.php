@extends('layouts.app')

@section('content')



    <div class="shadow p-4 mb-4 mr-5 ml-5 d-flex justify-content-between bg-white">
        <div>
            <h1>Carrito de Compra</h1>
        </div>

        <div class="">
            <h2><Strong>Importe total: $</Strong> {{$carrito->precio_total}}</h2>
        </div>
    </div>


    <div class="container">
        @forelse ($productos as $producto)

            <div class="jumbotron mb-2 d-flex">

                    <img class="img-thumbnail card-img-top" style="width: 300px" src="{{asset('storage').'/'.$producto->imagen}}" alt="">

                <div class="card-body">
                        <h3 class="card-title">{{$producto->nombre}}</h3>
                        <ul>
                            <li><strong>Cantidad:</strong> {{$producto->cantidad}}</li>
                            <li><strong>Precio:</strong> $ {{$producto->precio}}</li>
                        </ul>
                </div>

            </div>

        @empty
            <div class="text-center mt-5">
                <h2>{{$mensaje}}</h2>
            </div>
        @endforelse
    </div>

    @if ($productos->count() > 0)
        <div class="text-center m-2">
            <a href="{{url('carrito-confirmar/'.$carrito->id)}}" class="btn btn-success pl-5 pr-5 pt-2 pb-2">
                Confirmar Compra
            </a>
        </div>
    @endif





@endsection

