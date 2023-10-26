<?php

namespace App\Http\Controllers;

use App\Models\usuario;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class usuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        #REGLAS DEL FORMULARIO
        $rules =
            [
                'username'          => 'required|string|min:5|max:50',
                'password'          => 'required|string|min:8|max:255',
                'correo'             => 'required|string|min:1|max:255',
                'RUT'               => 'required|string|max:50|regex:(\d{1,2}(?:\.\d{1,3}){2}-[\dkK])',
                'Nombre'            => 'required|string|max:50',
                'primerApellido'    => 'required|string|max:50',
                'segundoApellido'   => '',
                'tipoUsuario'       => 'required|string'
            ];

        #MENSAJES PERSONALIZADOS 
        $mensaje =
            [
                'required' => 'El campo :attribute es requerido',
                'string' => 'El campo :attribute no puede estar vacio',
                'min' => 'El campo :attribute debe ser al menos :min',
                'max' => 'El campo :attribute debe ser como máximo :max',
                'regex' => 'El campo :attribute debe ser como mel ejemplo dado'
            ];

        #VALIDAMOS EL FORMULARIO ANTES DE INTENTAR HACER LA INSERCION
        $this->validate($request, $rules, $mensaje);

        $sendRUT = str_replace(".","",substr($request->RUT,0,-2));
        $sendDigito = substr($request->RUT,-1);
        
        $data = $request->all();
        $data['RUT'] = $sendRUT;
        $data['digVer'] = $sendDigito;

        #INTENTAMOS INSERTAR TOMANDO LOS DATOS DEL REQUEST
        try {
            usuario::create($data);
            $mensaje = "Usuario registrado con éxito";
            return view('/login', compact('mensaje'));
        }
        #ATRAPAMOS UN QUERY EXCEPTION EN CASO QUE OCURRA Y DEVOLVEMOS EL ERROR A LA VISTA
        catch (\Illuminate\Database\QueryException $e) {
            //dd($e);
            $errorCode = $e->errorInfo[1];
            if ($errorCode == 1062) {
                $mensaje = "Error al crear nuevo usuario, entrada duplicada [Error Code: 1062]";
                return view('/register', compact('mensaje'));
            } else {
                $mensaje = "Ha ocurrido un error al insertar [Error Code: " . $e->errorInfo[1] . "]";
                return view('/register', compact('mensaje'));
            }
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(usuario $usuario)
    {
        //
    }

    /**
     * Search for the existence of an Usuario for their username and password.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        try {
            $usuario = DB::table('usuarios')->where('username', $request->username)->where('password', $request->password)->get()->last();
            return view('login', compact('usuario', 'request'));
        } catch (\Illuminate\Database\QueryException $e) {
            $errorCode = $e->errorInfo[1];
            //dd($e->errorInfo);

            if (false) {
                $mensaje = '';
                return view('/login', compact('mensaje'));
            }else {
                $mensaje = "Ha ocurrido un error al iniciar sesion [Error Code: " . $e->errorInfo[1] . "]";
                return view('/login', compact('mensaje'));
            }
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, usuario $usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(usuario $usuario)
    {
        //
    }

    /**
     * Controller to disconnect an acount from $_SESSION.
     *
     * @return \Illuminate\Http\Response
     */
    public function logOut()
    {
        session_start();
        session_unset();
        session_destroy();

        return view('login');
    }
}
