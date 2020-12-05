Seccion para editar productos
<form action="{{url('/productos/'.$producto->id)}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{method_field('PATCH')}}

    @include('productos.form', ['Modo' => 'edicion'])

    {{--
    /
    <label for="id_Rubro">Rubro</label>

    <select name="id_Rubro" id="id_Rubro" >

        <option selected="true" value="{{ $producto->id_Rubro }}"> {{$producto->rubro}} </option>
        @foreach ($datosRubros as $rubro)
            @if ($producto->id_Rubro != $rubro->id)

                <option value="{{$rubro->id}}"> {{$rubro->Nombre}} </option>
            @endif
        @endforeach
    </select>

    <br>
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre" value="{{ $producto->nombre }}">

    <br>
    <label for="sku">SKU</label>
    <input type="text" name="sku" id="sku" value="{{ $producto->sku }}">

    <br>
    <label for="disponibilidad">Disponibilidad</label>
    <input type="text" name="disponibilidad" id="disponibilidad" value="{{ $producto->disponibilidad }}">

    <br>
    <label for="precio">Precio</label>
    <input type="text" name="precio" id="precio" value="{{ $producto->precio }}">

    <br>
    <label for="imagen">Imagen</label>
    <img src="{{asset('storage').'/'.$producto->imagen}}" alt="Imagen Producto" width="200">
    <br>
    <input type="file" name="imagen" id="imagen" value="">

    <br>
    <label for="descripcion">Descripcion</label>
    <textarea name="descripcion" >{{ $producto->descripcion }}</textarea>

    <br>
    <input type="submit" value="Confirmar">

    <a href="{{url('/productos')}}">Cancelar</a>

    --}}


</form>
