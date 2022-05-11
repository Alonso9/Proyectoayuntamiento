<?php

namespace App\Http\Controllers;
use App\Models\{Actividad,Programa,Departamentos,Evidencias};


use Illuminate\Http\Request;

class EvidenciasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $actividad = Actividad::findOrFail($request->input('actividad_id'));

        // $dt = new DateTime();
        $evidencia = new Evidencias();
        $evidencia->actividad_id = $request->input('actividad_id');
        $evidencia->nombre_archivo = $request->input('nombre');
        $evidencia->archivo = $request->input('evidencia');
        $evidencia->descripcion = $request->input('descripcion');

        // $evidencia->fecha = $dt->format('Y-m-d H:i:s');
        $evidencia->save();

        return redirect()->route('actividadesPrueba', $actividad->programa_id);
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function subirEvidencia(Request $request, $id)
    {
        $actividad = Actividad::findOrFail($request->input('actividad_id'));

        // $dt = new DateTime();
        $evidencia = new Evidencias();
        $evidencia->actividad_id = $request->input('actividad_id');
        $evidencia->nombre_archivo = $request->input('nombre');
        $evidencia->archivo = $request->input('evidencia');
        $evidencia->descripcion = $request->input('descripcion');

        // $evidencia->fecha = $dt->format('Y-m-d H:i:s');
        $evidencia->save();

        return redirect()->route('actividadesPrueba', $actividad->programa_id);
    }
}
