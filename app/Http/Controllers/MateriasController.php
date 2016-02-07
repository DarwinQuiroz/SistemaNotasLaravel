<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Materia;
use App\Nivel;

class MateriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materias = Materia::orderBy('id', 'ASC')->paginate(5);
        $materias->each(function($materias){
            $materias->nivel;
        });
        return view('admin.materias.index')->with('materias', $materias);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $niveles = Nivel::orderBy('descripcion', 'ASC')->lists('descripcion', 'id');
        return view('admin.materias.crear')->with('niveles', $niveles);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $materia = new Materia($request->all());
        $materia->save();
        return redirect()->route('admin.materias.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $materia = Materia::find($id);
        return view('admin.materias.editar')->with('materias', $materias);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $materia = Materia::find($id);
        $materia->descripcion = $request->descripcion;
        $materia->credito = $request->credito;

        $materia->save();
        return redirect()->route('admin.materias.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $materia = Materia::find($id);
        $materia->delete();
        return redirect()->route('admin.materias.index');
    }
}
