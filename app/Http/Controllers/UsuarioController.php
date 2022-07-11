<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\GuardarUsuarioRequest;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    //holaa

    //LISTAR TODOS LOS REGISTROS 
    public function list()
    {
        $usuarios = Usuario::get();
        return $usuarios->toArray();
    }

    //LISTAR UN REGISTRO ESPECÍFICO 
    public function show(Usuario $usuario)
    {
        return response()->json($usuario);
    }
//hdhdhddh
    //CREAR UN NUEVO REGISTRO
    public function store(GuardarUsuarioRequest $request)
    {
        Usuario::create($request->all());
        return response()->json([
            'res' => true,
            'msg' => 'Usuario registrado correctamente'
        ], 200);
    }

    //ACTUALIZAR UN REGISTRO 
    public function update(GuardarUsuarioRequest $request, Usuario $usuario)
    {
        $usuario->update($request->all());
        return response()->json([
            'res' => true,
            'mensaje' => 'Usuario actualizado correctamente'
        ], 200);
    }
//dhdhdhdhd
    //ELIMINAR UN REGISTRO DE MANERA LÓGICA 
    public function destroy(Usuario $usuario)
    {
        $usuario->delete();
        return response()->json([
            'res' => true,
            'mensaje' => 'Usuario eliminado correctamente'
        ], 200);
    }
}