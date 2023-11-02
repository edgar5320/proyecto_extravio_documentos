<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Objeto;
use App\Models\Reporte;
use App\Mail\ConfirmacionCorreoMailable;
use Illuminate\Support\Facades\Route ;
use Illuminate\Support\Facades\Mail;


use DB;


class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $texto=trim($request->get('texto'));
       $clientes=DB::table('cliente')
            -> select('id','apellidos','nombre','documento','telefono','email','objeto_id')
            ->where('apellidos','LIKE','%'.$texto.'%')
            ->orWhere('documento','LIKE','%'.$texto.'%')
            ->orderBy('apellidos','asc')
            ->paginate(10);
       return view('cliente.index',compact('clientes','texto'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cliente.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

       try{

        

        $objeto = new Objeto;
        $objeto->nombre_objeto=$request->input('nombre_objeto');
        $objeto->descripcion=$request->input('descripcion');
        $objeto->lugar_extravio=$request->input('lugar_extravio');
        $objeto->fecha=$request->input('fecha');
        $objeto->descripcion_echos=$request->input('descripcion_echos');
        $objeto->save();
        $objetoId = $objeto->id;
   

        $cliente = new Cliente;
        $cliente->apellidos=$request->input('apellidos');
        $cliente->nombre=$request->input('nombre');
        $cliente->documento=$request->input('documento');
        $cliente->telefono=$request->input('telefono');
        $cliente->email=$request->input('email');
        $cliente->objeto_id=$objetoId;        
        $cliente->save();
        $clienteId = $cliente->id;

        $reporte = new Reporte;
        $reporte->cliente_id=$clienteId;    
        $reporte->save();
 


        $nombreCorr= $cliente->nombre;
        $apellidosCorr= $cliente->apellidos;
        $correoConf = $cliente->email;
        $telefonoCorr= $cliente->telefono;

        $nombreObjetoCorr= $objeto->nombre_objeto;
        $descripcionOB= $objeto->descripcion;
        $lugarOB= $objeto->lugar_extravio;
        $fechaOB= $objeto->fecha;
        $descEchos= $objeto->descripcion_echos;
        
    
        
      
        Mail::to($correoConf) -> send(new ConfirmacionCorreoMailable($nombreCorr,$apellidosCorr,$correoConf,$telefonoCorr,$nombreObjetoCorr,$descripcionOB,$lugarOB,$fechaOB, $descEchos));
                
 
        


        return redirect()->route('cliente.index');
        
       }catch (\Exception $e) {
    // En caso de un error, puedes mostrar un mensaje de error o registrar el error

            return "!Algo salio mal ¡- Revisa bien tus datos" . $e->getMessage();
        }

        



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


    public function enviarCorreo(string $correo){

        Mail::to($correoConf) -> send(new ConfirmacionCorreoMailable);
    
        return "Mensaje enviado";
    
    }
}
