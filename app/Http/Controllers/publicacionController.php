<?php

namespace App\Http\Controllers;

use App\Models\publicacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class publicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $data = DB::table('publicacion')
                    ->join('materias', 'publicacion.materia_ID', '=', 'materias.id')
                    ->join('usuarios', 'publicacion.profesor_ID', '=', 'usuarios.id')
                    ->select(   'publicacion.id',
                                'publicacion.nombrePublicacion',
                                'publicacion.descripcion',
                                'materias.nombre as nombremateria',
                                'usuarios.nombre',
                                'usuarios.username',)
                    ->get();
            // dd($data);
            return $data;
        } catch (\Throwable $e) {
            dd($e);
        }
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
        if (!isset($_SESSION)) {
            session_start();
        }
        $data = $request->all();
        // dd($_SESSION['UsuarioOBJ']->Nombre);
        $data['profesor_ID']= $_SESSION['UsuarioOBJ']->id;
        try {
            publicacion::create($data);
            $auxmsj = $data['nombrePublicacion'];
            $mensaje = "Publicacion $auxmsj fue creada con exito";
            return view('intranet.index', compact('mensaje'));
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(publicacion $publicacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(publicacion $publicacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, publicacion $publicacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(publicacion $publicacion)
    {
        //
    }
}
