
<div class="container">
    <div class="form-group">

        @if ( isset($producto->imagen))
            <img src="{{asset('storage').'/'.$producto->imagen}}" alt="Imagen Producto" class="img-thumbnail img-fluid">
        @endif

    </div>

    <div>
        <div>
            <div class="form-group">
                <label for="id_Rubro" class="control-label">Rubro</label>
                <select name="id_Rubro" id="id_Rubro" class="form-control">


                    @if ($Modo=='edicion')
                        <option selected="true" value="{{ $producto->id_Rubro }}"> {{$producto->rubro}} </option>

                        @foreach ($rubros as $rubro)
                            <option value="{{ $rubro->id }}"> {{ $rubro->Nombre }} </option>
                        @endforeach

                    @else
                        <option selected="true" disabled="disabled" value="" > --Elija un Rubro-- </option>

                        @foreach ($rubros as $rubro)
                        <option value="{{ $rubro->id }}"> {{ $rubro->Nombre }} </option>
                        @endforeach

                    @endif

                </select>
            </div>


            <div class="form-group">
                <label for="nombre" class="control-label">Nombre</label>
                <input type="text" class="form-control {{$errors->has('nombre') ? 'is-invalid':''}}" name="nombre" id="nombre" value="{{ isset($producto->nombre) ? $producto->nombre : old('nombre') }}">

                {!! $errors->first('nombre','<div class="invalid-feedback">:message</div>') !!}

            </div>

            <div class="form-group">
                <label for="sku" class="control-label">SKU</label>
                <input type="text" class="form-control {{$errors->has('sku')?'is-invalid':''}}" name="sku" id="sku" value="{{ isset($producto->sku) ? $producto->sku : old('sku') }}">

                {!! $errors->first('sku','<div class="invalid-feedback">:message</div>') !!}
            </div>


            <div class="form-group">
                <label for="disponibilidad" class="control-label">Disponibilidad</label>
                <input type="text" class="form-control {{$errors->has('disponibilidad')?'is-invalid':''}}" name="disponibilidad" id="disponibilidad" value="{{ isset($producto->disponibilidad) ? $producto->disponibilidad : old('disponibilidad') }}">

                {!! $errors->first('disponibilidad','<div class="invalid-feedback">:message</div>') !!}
            </div>


            <div class="form-group">
                <label for="precio" class="control-label">Precio</label>
                <input type="text" class="form-control {{$errors->has('precio')?'is-invalid':''}}" name="precio" id="precio" value="{{ isset($producto->precio) ? $producto->precio : old('precio') }}">

                {!! $errors->first('precio','<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="form-group">
                <label for="Imagen" class="control-label">Imagen</label>
                <input type="file" class="form-control {{$errors->has('imagen')?'is-invalid':''}}" id="imagen" name="imagen" value="">
            </div>

            <div class="form-group">
                <label for="descripcion" class="control-label">Descripción</label>
                <textarea name="descripcion" class="form-control {{$errors->has('descripcion')?'is-invalid':''}}">{{ isset($producto->descripcion) ? $producto->descripcion : old('descripcion') }}</textarea>

                {!! $errors->first('descripcion','<div class="invalid-feedback">:message</div>') !!}
            </div>

        </div>

        <div class="form-group">
            <input type="submit" value="Confirmar" class="btn btn-success">

            <a href="{{url('/productos')}}" class="btn btn-danger">Cancelar</a>
        </div>

    </div>
</div>


