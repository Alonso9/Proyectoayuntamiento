<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Programa, Evidencias};
use Illuminate\Support\Facades\DB;
use DateTime;
use Illuminate\Support\Facades\Storage;


class ProgramaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $nombre = trim($request->get('nombre'));
        //return view('programa.index');
        //$programas = Programa::all();
        $programas = DB::table('programas')->select('id','nombre','fecha')
                        ->where('nombre', 'LIKE', '%'.$nombre.'%')
                        ->orWhere('fecha', 'LIKE', '%'.$nombre.'%')
                        ->orderBy('nombre', 'asc')
                        ->paginate(10);
        //dd( $programas);
        //return $programas;
        return view('programa.index', compact('programas', 'nombre'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('programa.create');
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
        $programa = new Programa;
        $programa->nombre = $request->input('nombre_programa');
        $programa->usuario_id = 2;
        $programa->fecha = $dt->format('Y-m-d H:i:s');
        $programa->save();
        return redirect()->route('programa.index');
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
        $programa = Programa::findOrFail($id); //obtenemos los datos del programa
        return view('programa.edit',compact('programa'));
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
        $programa = Programa::findOrFail($id);
        $programa->nombre = $request->input('nombre_programa');
        $programa->save();
        return redirect()->route('programa.index');
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

    public function eleminarPrograma($id)
    {
        $programa = Programa::findOrFail($id);
        $programa->delete();
        return redirect()->route('programa.index');
    }

    public function detallesPrograma($id)
    {
        $programa = Programa::findOrFail($id);
        $actividades = DB::table('actividades')->join('departamentos','departamentos.id','actividades.responsable')
                                    // ->join('evidencias', 'actividades.id', 'evidencias.actividad_id')
                                    ->select('actividades.*','departamentos.departamentos')
                                    ->where('programa_id','=', $id)
                                    ->orderBy('actividad', 'asc')
                                    ->paginate(10);

        $actividades2 = DB::table('actividades')->join('evidencias', 'actividades.id', 'evidencias.actividad_id')
                                    ->select('actividades.*','evidencias.*')
                                    ->where('programa_id','=', $id)
                                    ->orderBy('actividad', 'asc')
                                    ->paginate(10);

        // $archivos = Storage::setVisibility($actividades2->archivo, '/'.$actividades->id.'/');

        return view('programa.detalles', compact('programa', 'actividades','actividades2'));
        //  return $actividades;
    }
}
