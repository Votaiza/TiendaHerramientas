
@if (Session::has('Mensaje'))
    {{Session::get('Mensaje')}}
@endif

<a href="{{url('/productos/create')}}">Cargar Producto</a>
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Imagen</th>
            <th>id</th>
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
            <td><img src="{{asset('storage').'/'.$producto->imagen}}" alt="Imagen Producto" width="200"></td>
            <td> {{$producto->id}} </td>
            <td> {{$producto->rubro}} </td>
            <td> {{$producto->nombre}} </td>
            <td> {{$producto->sku}} </td>
            <td> {{$producto->precio}} </td>
            <td> {{$producto->disponibilidad}} </td>
            <td> <a href="{{'/productos/'.$producto->id.'/edit'}}">Editar</a> |
                <form method="post" action="{{url('/productos/'.$producto->id)}}">
                    <!--Generar Token por seguridad-->
                    {{ csrf_field() }}

                    <!--Identifica el tipo de solicitud que se desea enviar-->
                    {{method_field('DELETE')}}

                    <button type="submit" onclick="return confirm('Desea eliminar el producto?')">Borrar</button>

                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
