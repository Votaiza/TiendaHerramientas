<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Rubro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $datos['productos'] = Producto::leftJoin('Rubros', 'Rubros.id', '=', 'Productos.id_Rubro')
            ->select('Productos.*', 'Rubros.nombre as rubro')
            ->paginate(5);

        //Producto::paginate(5);


        return view('productos.index', $datos);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $datosRubros['rubros'] = Rubro::all();

        return view('productos.create', $datosRubros);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$datosProducto=request()->all();

        $datosProducto=request()->except('_token');
        dd($datosProducto);

        /*
        if($request->hasFile('imagen')){
            $datosProducto['imagen']=$request->file('imagen')->store('uploads', 'public');
        }

        Producto::insert($datosProducto);

        return redirect('productos')->with('Mensaje', 'Producto Cargado');
        */
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        //$producto = Producto::findOrFail($id);
        $producto = Producto::leftJoin('Rubros', 'Rubros.id', '=', 'Productos.id_Rubro')
                            ->select('Productos.*', 'Rubros.nombre as rubro')
                            ->findOrFail($id);
        //dd($producto);
        $datosRubro = Rubro::all();
        //$rubroProducto = null;

        return view('productos.edit', ['producto' => $producto, 'rubros' => $datosRubro]);

        //'rubroProducto' => $rubroProducto,
        //'datosRubros' => $datosRubro
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosProducto = request()->except(['_token', '_method']);

        if($request->hasFile('imagen')){

            $producto = Producto::findOrFail($id);

            Storage::delete('public/'.$producto->imagen);

            $datosProducto['imagen']=$request->file('imagen')->store('uploads', 'public');
        }

        Producto::where('id','=',$id)->update($datosProducto);

        return redirect('productos')->with('Mensaje', 'Producto actualizado');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = Producto::findOrFail($id);

        if(Storage::delete('public/'.$producto->imagen)){
            Producto::destroy($id);
        }

        return redirect('productos')->with('Mensaje', 'Producto eliminado');

    }
}
