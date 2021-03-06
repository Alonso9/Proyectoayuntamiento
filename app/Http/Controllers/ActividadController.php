<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Actividad,Programa,Departamentos,Evidencias};
use Illuminate\Support\Facades\DB;
use DateTime;
use Illuminate\Support\Facades\Storage;

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
        $programa_id = 1;
        // dd($programa_id);
        $nombre = Programa::findOrFail($programa_id);

        $actividades = DB::table('actividades')->join('departamentos','departamentos.id','actividades.responsable')
                                    ->select('actividades.*','departamentos.departamentos')
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
     * Update the specified resource in sto````rage.
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
    public function destroy(Request $request)
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

    public function actividadesPrueba($programa_id)
    {
        // $actividades = Actividad::where('programa_id', $programa_id)->paginate(10);
        $actividades = DB::table('actividades')->join('departamentos','departamentos.id','actividades.responsable')
                                    ->select('actividades.*','departamentos.departamentos')
                                    ->where('programa_id','=', $programa_id)
                                    ->orderBy('actividad', 'asc')
                                    ->paginate(10);
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

    public function evidenciaActividad($id)
    {
        $actividad = Actividad::findOrFail($id);
        return view('actividad.evidenciaActividad', compact('actividad'));
    }

    public function subirEvidencia(Request $request)
    {
        $actividad = Actividad::findOrFail($request->input('actividad_id'));

        // dd($request);
        // $dt = new DateTime();
        $evidencia = new Evidencias();
        $evidencia->actividad_id = $request->input('actividad_id');
        $evidencia->nombre_archivo = $request->input('nombre');
        $evidencia->archivo = $request->file('evidencia')->getClientOriginalName();
        $evidencia->descripcion = $request->input('descripcion');
        $extension = $request->file('evidencia')->getClientOriginalExtension();
        $nombre = $evidencia->nombre_archivo;
        Storage::putFileAs('/'.$evidencia->actividad_id.'/', $request->file('evidencia'),$evidencia->nombre_archivo.'.'.$extension);

        // $evidencia->fecha = $dt->format('Y-m-d H:i:s');
        $evidencia->save();

        return redirect()->route('actividadesPrueba', $actividad->programa_id);
    }
}
