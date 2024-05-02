<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumnos = Alumno::all();
        return view('alumnos.index', compact('alumnos'));
    }
       
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $alumnos=new Alumno();
        $alumnos->id=$request->input('id');
        $alumnos->nombre=$request->input('nombre');
        $alumnos->apellido=$request->input('apellido');
        $alumnos->edad=$request->input('edad');
        $alumnos->fecha_nacimiento=$request->input('fecha_nacimiento');
        $alumnos->telefono=$request->input('telefono');
        $alumnos->email=$request->input('email');
       
        $alumnos->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Alumno $alumno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alumno $alumno)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $alumnos=Alumno::find($id);
        $alumnos->id=$request->input('id');
        $alumnos->nombre=$request->input('nombre');
        $alumnos->apellido=$request->input('apellido');
        $alumnos->edad=$request->input('edad');
        $alumnos->fecha_nacimiento=$request->input('fecha_nacimiento');
        $alumnos->telefono=$request->input('telefono');
        $alumnos->email=$request->input('email');
       
        $alumnos->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $alumnos=Alumno::find($id);
    
       
        $alumnos->delete();
        return redirect()->back();
    }
}
