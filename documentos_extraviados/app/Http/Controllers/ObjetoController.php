<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Objeto;
use App\Models\Cliente;
//use Illuminate\Suport\Facade\DB;
use DB;
class ObjetoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $texto=trim($request->get('texto'));
       $objetos=DB::table('objeto')
            -> select('id','nombre_objeto','descripcion','lugar_extravio','fecha','descripcion_echos')
            ->paginate(10);
       return view('objeto.index',compact('objetos','texto'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('objeto.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $objeto = new Objeto;
        $objeto->nombre_objeto=$request->input('nombre_objeto');
        $objeto->descripcion=$request->input('descripcion');
        $objeto->lugar_extravio=$request->input('lugar_extravio');
        $objeto->fecha=$request->input('fecha');
        $objeto->descripcion_echos=$request->input('descripcion_echos');
       
        $objeto->save();
        $cliente = new Cliente;
        return redirect()->route('cliente.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
