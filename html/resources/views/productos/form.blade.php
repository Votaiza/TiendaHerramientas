Fomulario de datos de productos
<label for="id_Rubro">Rubro</label>
<select name="id_Rubro" id="id_Rubro">

    <div>

    </div>

    @if ($Modo=='edicion')
        <option selected="true" value="{{ $producto->id_Rubro }}"> {{$producto->rubro}} </option>

        @foreach ($rubros as $rubro)
            <option value="{{ $rubro->id }}"> {{ $rubro->Nombre }} </option>
        @endforeach

    @else
        <option selected="true" disabled="disabled" value=""> --Elija un Rubro-- </option>

        @foreach ($rubros as $rubro)
           <option value="{{ $rubro->id }}"> {{ $rubro->Nombre }} </option>
        @endforeach

    @endif

</select>

<br>
<label for="nombre">Nombre</label>
<input type="text" name="nombre" id="nombre" value="{{ isset($producto->nombre) ? $producto->nombre : '' }}">

<br>
<label for="sku">SKU</label>
<input type="text" name="sku" id="sku" value="{{ isset($producto->sku) ? $producto->sku : '' }}">

<br>
<label for="disponibilidad">Disponibilidad</label>
<input type="text" name="disponibilidad" id="disponibilidad" value="{{ isset($producto->disponibilidad) ? $producto->disponibilidad : '' }}">

<br>
<label for="precio">Precio</label>
<input type="text" name="precio" id="precio" value="{{ isset($producto->precio) ? $producto->precio : '' }}">

<br>
<label for="imagen">Imagen</label>
@if ( isset($producto->imagen))
    <img src="{{asset('storage').'/'.$producto->imagen}}" alt="Imagen Producto" width="200">
@endif
<input type="file" name="imagen" id="imagen" value="">

<br>
<label for="descripcion">Descripción</label>
<textarea name="descripcion" >
    {{ isset($producto->descripcion) ? $producto->descripcion : '' }}
</textarea>

<br>
<input type="submit" value="Confirmar">

<a href="{{url('/productos')}}">Cancelar</a>
