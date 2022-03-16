<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Fecades\Storage;


/**
 * Class ProductoController
 * @package App\Http\Controllers
 */
class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $texto=trim($request->get('texto'));
        $productos=DB::table('productos')->select('id', 'nombreProducto', 'descripcion', 'precio',  'imagen')->where('nombreProducto', 'LIKE','%'.$texto. '%')
        ->orWhere('codigo', 'LIKE','%'.$texto. '%')->orderBy('nombreProducto', 'asc')
        ->paginate();

        return view('producto.index', compact('productos','texto'))
            ->with('i', (request()->input('page', 1) - 1) * $productos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $producto = new Producto();
        return view('producto.create', compact('producto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Producto::$rules);

        $producto = new  Producto();

        if($request->hasFile('imagen')){
            $imagen = $request->file("imagen");
            $imagen->move('public/img', $imagen->getClientOriginalName());

            $producto->imagen = $imagen->getClientOriginalName();
        }

        $producto->nombreProducto = $request["nombreProducto"];
        $producto->descripcion = $request["descripcion"];
        $producto->precio = $request["precio"];
        $producto->save();


        return redirect()->route('productos.index')
            ->with('success', 'Producto created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto = Producto::find($id);


        return view('producto.show', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {

        if($request->hasFile('imagen')){
            $imagen = $request->file("imagen");
            $producto = Producto::find($id);
            $imagen->move('public/img', $imagen->getClientOriginalName());
    
            $producto->imagen = $imagen->getClientOriginalName();
        }
        $producto = Producto::find($id);




        return view('producto.edit', compact('producto'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Producto $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        request()->validate(Producto::$rules);

        

        $producto->update($request->all());



        return redirect()->route('productos.index')
            ->with('success', 'Producto updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $producto = Producto::find($id)->delete();

        return redirect()->route('productos.index')
            ->with('success', 'Producto deleted successfully');
    }
}
