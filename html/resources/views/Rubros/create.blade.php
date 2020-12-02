Seccion para crear Rubros
<form action="{{url('/rubros')}}" method="post">
    {{ csrf_field() }}

    <label for="Nombre">{{'Nombre'}}</label>
    <input type="text" id="Nombre" name="Nombre" value="">

    <input type="submit" value="Agregar">

</form>
