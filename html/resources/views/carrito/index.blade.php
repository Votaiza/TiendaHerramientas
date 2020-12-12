@extends('layouts.app')

@section('content')



<div class="container">
    <h2>Lista de Productos</h1>
</div>

<div class="container">
    @forelse ($productos as $producto)
        <div class="row">
            <div>
                <img class="img-thumbnail" src="{{asset('storage').'/'.$producto->imagen}}" alt="">
            </div>

            <div class="">
                <div class="">
                    <h3 class="">{{$producto->nombre}}</h3>
                    <p class=""><strong>$</strong> {{$producto->precio}}</p>
                </div>

            </div>
        </div>
    @empty

    @endforelse
</div>

@endsection

