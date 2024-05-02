<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cursos=Curso::all();
        return view('cursos.index', compact('cursos'));
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
        $cursos=new Curso();
        $cursos->id=$request->input('id');
        $cursos->nombre=$request->input('nombre');
        $cursos->descripcion=$request->input('descripcion');
        $cursos->fecha_inicio=$request->input('fecha_inicio');
        $cursos->fecha_fin=$request->input('fecha_fin');
        $cursos->inicio=$request->input('inicio');
        $cursos->fin=$request->input('fin');
        $cursos->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Curso $curso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Curso $curso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $cursos=Curso::find($id);
        $cursos->id=$request->input('id');
        $cursos->nombre=$request->input('nombre');
        $cursos->descripcion=$request->input('descripcion');
        $cursos->fecha_inicio=$request->input('fecha_inicio');
        $cursos->fecha_fin=$request->input('fecha_fin');
        $cursos->inicio=$request->input('inicio');
        $cursos->fin=$request->input('fin');
        $cursos->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $cursos=Curso::find($id);
        $cursos->delete();
        return redirect()->back();
    }
}
