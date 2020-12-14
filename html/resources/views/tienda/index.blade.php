@extends('layouts.app')

@section('content')




<div class="container">

        @forelse ($productos as $producto)

            <div class="card d-sm-flex flex-row mb-2" >
                <div class="p-2" >
                    <a href="#" target="_blank"> <img class="img-thumbnail" width="304" height="236" src="{{asset('storage').'/'.$producto->imagen}}" alt="imagens"></a>
                </div>

                <div class="AtributosdeImagen card-body">
                    <h3 class="card-title"><strong>Nombre: </strong>{{$producto->nombre}}</h3>
                    <p class="card-text"><strong>Precio: </strong>${{$producto->precio}}</p>
                    @guest

                    @else
                        <a href="{{url('carrito-addCart/'.$producto->id)}}" class="btn btn-success">Agregar</a>
                    @endguest
                </div>
            </div>
        @empty

        @endforelse

    </div>


    {{ $productos->links() }}

@endsection
