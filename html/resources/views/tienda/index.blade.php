@extends('layouts.app')

@section('content')




<div class="container">

        @forelse ($productos as $producto)

            <div class="card row flex-row mb-2 row-cols-1 row-cols-sm-2 row-cols-md-4" >
                <div class="p-2 col-12 col-sm-6 col-md-4" >
                    <img class="img-thumbnail card-img" width="304" height="236" src="{{asset('storage').'/'.$producto->imagen}}" alt="imagens">
                </div>

                <div class="col-12 col-sm-6 col-md-8 d-flex flex-column">
                    <div class="AtributosdeImagen card-body col-sm-12 col-md-12">
                        <h3 class="card-title text-left"><strong>Producto: </strong>{{$producto->nombre}}</h3>
                        <p class="card-text text-left"><strong>Rubro: </strong>{{$producto->rubro}}</p>
                        <p class="card-text text-left"><strong>Precio: </strong>${{$producto->precio}}</p>

                    </div>
                    @guest

                    @else
                        <div class="card-footer flex-column d-flex">

                            <a href="{{url('carrito-addCart/'.$producto->id)}}" class="btn btn-success">Agregar</a>
                        </div>
                    @endguest
                </div>


            </div>
        @empty

        @endforelse

    </div>


    {{ $productos->links() }}

@endsection
