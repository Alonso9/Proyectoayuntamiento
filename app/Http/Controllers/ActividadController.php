<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Actividad,Programa,Departamentos};
use Illuminate\Support\Facades\DB;
use DateTime;


class ActividadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $actividad = trim($request->get('actividad'));
        $programa_id = trim($request->get('programa_id'));
        $nombre = Programa::findOrFail($programa_id);

        $actividades = DB::table('actividades')->select('id','programa_id','actividad','descripcion','responsable','fecha')
                                    ->where('programa_id','=', $nombre->id)
                                    ->where('actividad', 'LIKE', '%'.$actividad . '%')
                                    ->orderBy('actividad', 'asc')
                                    ->paginate(100);
        // $responsable = Departamentos::findOrFail($actividades->responsable);
        // return view('actividad.index', compact('actividades', 'nombre','responsable'));
        return view('actividad.index', compact('actividades', 'nombre'));
        // dd($responsable);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('actvidad.create');
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
        $dt = new DateTime();
        $actividades = new Actividad;
        $actividades->actividad = $request->input('nombre_actividad');
        $actividades->responsable = $request->input('departamento');
        $actividades->programa_id = $request->input('programa_id');;
        $actividades->descripcion = $request->input('descripcion');
        $actividades->fecha = $dt->format('Y-m-d H:i:s');
        $actividades->save();
        return redirect()->route('actividadesPrueba', $request->input('programa_id'));
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
        $actividad = Actividad::findOrFail($id);
        $departamentos = Departamentos::all();
        $responsable = Departamentos::findOrFail($actividad->responsable);
        return view('actividad.edit', compact('actividad','departamentos','responsable'));    }

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
        $actividades = Actividad::findOrFail($id);
        
        $actividades->actividad = $request->input('nombre_actividad');
        $actividades->descripcion = $request->input('descripcion');
        $actividades->responsable = $request->input('departamento');
        $actividades->save();
        return redirect()->route('actividadesPrueba', $actividades->programa_id);
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

    public function actividadesPrueba($programa_id)
    {
        $actividades = Actividad::where('programa_id', $programa_id)->paginate(10);
        $nombre = Programa::findOrFail($programa_id);
        // $responsable = Departamentos::Where($actividades->responsable);

        // return view('actividad.index', compact('actividades', 'nombre','responsable'));
        return view('actividad.index', compact('actividades', 'nombre'));
        // return dd($responsable);
    }

    public function crearActividad($programa_id)
    {
        $programa = Programa::findOrFail($programa_id);
        $departamentos = Departamentos::all();
        return view('actividad.create', compact('programa','departamentos'));
    }

    public function eleminarActividad($id)
    {
        $actividad = Actividad::findOrFail($id);
        $actividad->delete();
        return redirect()->route('actividadesPrueba', $actividad->programa_id);
    }
}
