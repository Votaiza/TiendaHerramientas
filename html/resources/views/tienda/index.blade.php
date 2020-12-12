@extends('layouts.app')

@section('content')




<div class="container">

        @forelse ($productos as $producto)

             <div class="imagenindex card" style="width: 400px">
                 <a href="#" target="_blank"> <img class="img-thumbnail card-img-top" src="{{asset('storage').'/'.$producto->imagen}}" alt="imagens"></a>

                 <div class="AtributosdeImagen card-body">
                     <h3 class="card-title"><strong>Nombre: </strong>{{$producto->nombre}}</h3>
                     <p class="card-text"><strong>Precio: </strong>${{$producto->precio}}</p>
                     <a href="{{url('carrito-addCart/'.$producto->id)}}" class="btn btn-success">Agregar</a>
                 </div>
            </div>
        @empty

        @endforelse

    </div>


    {{ $productos->links() }}

@endsection
