<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $buscarpor = $request->buscarpor; 
 
        $datos['empleados']=Empleado::where('Nombre1','LIKE','%'.$buscarpor.'%') 
                        ->orWhere('Nombre2','LIKE','%'.$buscarpor.'%') 
                        ->orWhere('Apellido1','LIKE','%'.$buscarpor.'%')
                        ->orWhere('Apellido2','LIKE','%'.$buscarpor.'%')
                        ->orWhere('Correo','LIKE','%'.$buscarpor.'%')  
                        ->orWhere('id','LIKE','%'.$buscarpor.'%')  
                        ->orderBy('id') 
                        ->paginate(2); 

        //$datos['empleados']=Empleado::paginate(6);
        return view('empleado.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empleado.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $campos=[
            'Nombre1'=>'required|string|max:100',
            'Nombre2'=>'required|string|max:100',
            'Apellido1'=>'required|string|max:100',
            'Apellido2'=>'required|string|max:100',
            'Correo'=>'required|email',
            'Foto'=>'required|max:10000|mimes:jpg,png',
        ];

        $mensaje=[
            'Foto.required'=>'El archivo debe ser una imagen del formato png o jpg.'
        ];

        $this->validate($request, $campos, $mensaje);

        $datosEmpleados = request()->except('_token');

        if($request->hasFile('Foto')){
            $datosEmpleados['Foto']=$request->file('Foto')->store('uploads','public');
        };
        
        Empleado::insert($datosEmpleados);
        //return response()->json($datosEmpleados);
        return redirect('empleado')->with('mensaje','Usuario agregado con éxito.');
    } 

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empleado=Empleado::findOrFail($id);
        return view(('empleado.edit'), compact('empleado'));  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $campos=['Foto'=>'required|max:10000|mimes:jpg,png'];

        $mensaje=[
            'Foto.required'=>'El archivo debe ser una imagen del formato png o jpg.'
        ];

        $this->validate($request, $campos, $mensaje);

        $datosEmpleados = request()->except(['_token','_method']);

        if($request->hasFile('Foto')){
            $empleado=Empleado::findOrFail($id);
            Storage::delete('public/'.$empleado->Foto);
            $datosEmpleados['Foto']=$request->file('Foto')->store('uploads','public');
        };

        Empleado::where('id','=',$id)->update($datosEmpleados);

        $empleado=Empleado::findOrFail($id);
        return view(('empleado.edit'), compact('empleado')); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $empleado=Empleado::findOrFail($id);
        if(Storage::delete('public/'.$empleado->Foto)){
            Empleado::destroy($id);
        }
        return redirect('empleado')->with('eliminar','Usuario eliminado con éxito.');
    }
}