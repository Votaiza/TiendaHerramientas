Seccion para crear productos
<form action="{{url('/productos')}}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}

<label for="id_Rubro">{{'id_Rubro'}}</label>
<select name="id_Rubro" id="id_Rubro">
    <option value="1">Construccion</option>
    <option value="2">Jardineria</option>
</select>
<br>
<label for="nombre">{{'nombre'}}</label>
<input type="text" name="nombre" id="nombre" value="">
<br>
<label for="descripcion">{{'descripcion'}}</label>
<textarea name="descripcion" ></textarea>
<br>
<label for="sku">{{'sku'}}</label>
<input type="text" name="sku" id="sku" value="">
<br>
<label for="disponibilidad">{{'disponibilidad'}}</label>
<input type="text" name="disponibilidad" id="disponibilidad" value="">
<br>
<label for="imagen">{{'imagen'}}</label>
<input type="file" name="imagen" id="imagen" value="">
<br>
<label for="precio">{{'precio'}}</label>
<input type="text" name="precio" id="precio" value="">
<br>
<input type="submit" value="Agregar">

</form>
