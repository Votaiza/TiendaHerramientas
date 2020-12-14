<?php

namespace App\Http\Controllers;

use App\Models\CarritoDetalle;
use App\Models\Producto;
use App\Models\Carrito;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarritoDetalleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = Auth::user();
        $carrito = Carrito::where('user_id', $user->id)->where('estado', 'A')->first();

        $productos['productos'] = CarritoDetalle::where('id_Carritos', $carrito->id)
                                                ->leftJoin('Productos', 'Productos.id', '=', 'CarritosDetalle.id_Productos')
                                                ->paginate(0);

        $mensaje = 'No se agrego ningun articulo';

        if($carrito == null){

            $this->newCart($user->id);

            $carrito = Carrito::where('user_id', $user->id)->where('estado', 'A')->first();

        }


        return view('carrito.index', $productos)->with('carrito', $carrito)->with('mensaje', $mensaje);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    public function newCart($id){

        $carrito = [
            'user_id' => $id,
            'precio_total' => 0,
            'estado' => 'A',
        ];

        Carrito::insert($carrito);

        return $carrito;
    }

    public function addCart($id)
    {
        $producto = Producto::findOrFail($id);
        $user = Auth::user();
        $carritoUsuario = Carrito::where('user_id', $user->id)->where('estado', 'A')->first();
        //$carritoUsuario = carrito::findOrFail($id, 'carrito->estad'=='A');


        if($carritoUsuario == null){
            $this->newCart($user->id);

            $carritoUsuario = Carrito::where('user_id', $user->id)->where('estado', 'A')->first();

        }
        //dd($carritoUsuario);

        $productoCarrito = CarritoDetalle::where('id_Carritos', $carritoUsuario->id)
                                         ->where('id_Productos', $id)
                                         ->first();


        if($productoCarrito == null){

            $carritoDetalle = [
                'id_Carritos' => $carritoUsuario->id,
                'id_Productos' => $producto->id,
                'cantidad' => 1,
                'importe' => $producto->precio,
            ];

            CarritoDetalle::insert($carritoDetalle);
            $carritoUsuario->precio_total += $producto->precio;
            $carritoUsuario->save();


        }else{

            $productoCarrito->cantidad ++;
            $productoCarrito->save();

            $carritoUsuario->precio_total += $producto->precio;
            $carritoUsuario->save();

        }

        return back()->with('success',"$producto->nombre ¡se ha agregado con éxito al carrito!");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //



    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CarritoDetalle  $carritoDetalle
     * @return \Illuminate\Http\Response
     */
    public function show(CarritoDetalle $carritoDetalle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CarritoDetalle  $carritoDetalle
     * @return \Illuminate\Http\Response
     */
    public function edit(CarritoDetalle $carritoDetalle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CarritoDetalle  $carritoDetalle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CarritoDetalle $carritoDetalle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CarritoDetalle  $carritoDetalle
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        dd($id);
        /*
        $producto = CarritoDetalle::findOrFail($id);

        $producto->delete();

        return back();
        */

    }

    public function confirmarCompra($id)
    {

        $carrito = Carrito::findOrFail($id);
        $carritoDetalle = CarritoDetalle::where('id_Carritos', $id);

        $carrito->estado = "C";
        $carrito->save();

        foreach ($carritoDetalle as $detalle) {
            $this->actualizarStock($detalle->id_Productos, $detalle->cantidad);
        }

        $datos['productos'] = Producto::paginate(8);

        return view('tienda.index', $datos);
    }

    public function actualizarStock($id, $cantidad){
        $producto = Producto::findOrFail($id);

        $producto->disponibilidad -= $cantidad;

        $producto->save();

    }
}
