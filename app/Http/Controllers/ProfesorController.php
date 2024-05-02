<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profesores=Profesor::all();
        return view('profesores.index', compact('profesores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $profesores=new Profesor();
        $profesores->id=$request->input('id');
        $profesores->nombre=$request->input('nombre');
        $profesores->apellido=$request->input('apellido');
        $profesores->curso=$request->input('curso');
        $profesores->edad=$request->input('edad');
        $profesores->telefono=$request->input('telefono');
        $profesores->email=$request->input('email');
        $profesores->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Profesor $profesor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profesor $profesor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $profesores=Profesor::find($id);
        $profesores->id=$request->input('id');
        $profesores->nombre=$request->input('nombre');
        $profesores->apellido=$request->input('apellido');
        $profesores->curso=$request->input('curso');
        $profesores->edad=$request->input('edad');
        $profesores->telefono=$request->input('telefono');
        $profesores->email=$request->input('email');
        $profesores->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $profesores=Profesor::find($id);
        $profesores->delete();
        return redirect()->back();
    }
}
