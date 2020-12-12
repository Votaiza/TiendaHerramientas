@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        @forelse ($productos as $producto)
            <div class="col-sm-9 border p-5 text-center mt-5">
                <div class="">
                    <a href="#" target="_blank"> <img class="img-thumbnail" src="{{asset('storage').'/'.$producto->imagen}}" alt="imagens"></a>
                </div>

                <div class="mt-2">
                    <div class="">
                        <h3 class="">{{$producto->nombre}}</h3>
                        <p class=""><strong>$</strong> {{$producto->precio}}</p>
                    </div>


                    <div class="">

                        <a href="{{url('carrito-addCart/'.$producto->id)}}" class="btn btn-success">Agregar</a>

                    </div>
                </div>

            </div>

        @empty

        @endforelse
    </div>


    {{ $productos->links() }}


</div>





@endsection
