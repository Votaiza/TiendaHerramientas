Inicio (Despliegue de datos)
<table class="table">
    <thead>
        <tr>
            <th>id</th>
            <th>Imagen</th>
            <th>Rubro</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>SKU</th>
            <th>Precio</th>
            <th>Disponibilidad</th>
            <th>Acción</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($productos as $producto)
        <tr>
            <td> {{$producto->id}} </td>
            <td> {{$producto->imagen}} </td>
            <td> {{$producto->id_Rubro}} </td>
            <td> {{$producto->nombre}} </td>
            <td> {{$producto->descripcion}} </td>
            <td> {{$producto->sku}} </td>
            <td> {{$producto->precio}} </td>
            <td> {{$producto->disponibilidad}} </td>
            <td> Editar | Borrar </td>
        </tr>
        @endforeach
    </tbody>
</table>
