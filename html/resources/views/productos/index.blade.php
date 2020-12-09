@extends('layouts.app')

@section('content')
    <div class="container">

        @if (Session::has('Mensaje'))
            {{Session::get('Mensaje')}}
        @endif


        <a href="{{url('/productos/create')}}" class="btn btn-dark">Cargar Producto</a>
        <a href="{{url('/rubros/create')}}" class="btn btn-dark">Cargar Rubro</a>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Imagen</th>
                    <th>Rubro</th>
                    <th>Nombre</th>
                    <th>SKU</th>
                    <th>Precio</th>
                    <th>Disponibilidad</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productos as $producto)
                <tr>
                    <td> {{$loop->iteration}} </td>
                    <td><img src="{{asset('storage').'/'.$producto->imagen}}" alt="Imagen Producto" width="100" class="img-thumbnail img-fluid"></td>
                    <td> {{$producto->rubro}} </td>
                    <td> {{$producto->nombre}} </td>
                    <td> {{$producto->sku}} </td>
                    <td> {{$producto->precio}} </td>
                    <td> {{$producto->disponibilidad}} </td>
                    <td>
                        <div class="d-flex justify-content-between">
                            <a href="{{'/productos/'.$producto->id.'/edit'}}" class="btn btn-outline-success">Editar</a>
                            <form method="post" action="{{url('/productos/'.$producto->id)}}">
                                <!--Generar Token por seguridad-->
                                {{ csrf_field() }}

                                <!--Identifica el tipo de solicitud que se desea enviar-->
                                {{method_field('DELETE')}}

                                <button type="submit" onclick="return confirm('Desea eliminar el producto?')" class="btn btn-outline-danger">Borrar</button>

                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
