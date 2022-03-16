<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{
    //
    public function index(Request $request)
    {

        $texto=trim($request->get('texto'));
        $productos=DB::table('productos')->select('id', 'nombreProducto', 'descripcion', 'precio', 'imagen')->where('nombreProducto', 'LIKE','%'.$texto. '%')
        ->orWhere('LIKE','%'.$texto. '%')->orderBy('nombreProducto', 'asc');

        $productos = Producto::simplePaginate(9);
         return view('welcome', compact('productos', 'texto'));
    }

    public function detailproductos($id=null){
        $producto = DB::table('productos')->where('id',$id)->first();
        //  return view ('detailbarberia',[
        //      'barberia'=> $barberia
        //  ]);
        return view ('detalle.detailproductos',compact('productos'));

    

    }

    public function store(Request $request){

        //$barberia = DB::table('barberia')->where('nombreProducto',$request['texto'])->first();

       

            //$barberia = DB::table('barberia')->where('nombreProducto',$request['texto'])->first();
    
            $texto=trim($request->get('texto'));
    
            $producto=DB::table('productos')->select('id', 'nombreProducto', 'descripcion', 'precio', 'imagen')->where('nombreProducto', 'LIKE','%'.$texto. '%')
            ->orWhere('LIKE','%'.$texto. '%')->get();
    
            // var_dump($barberia);
            // die();
    
    
            // return redirect()->route('barberia.index',array(
            //    'texto'=> $barberia,
            //    'buscar'=>'barberia',
            //    'texto'=> $barberia
            // ))->with('info','mensaje enviado');
    
         return  view ('welcome',compact('productos'));

}

}

