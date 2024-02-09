<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;


class UsuarioController extends Controller
{

    public function index(){
        return view('usuarios.store');
    }

    public function create(){
        return view('usuarios.create');
    }

    public function store(Request $request){
        $p = new Usuario();
        $p->nombre = $request->nombre;
        $p->email = $request->email;
        $p->password = $request->password;
        $p->direccion = $request->direccion;

        $p->save();

        return view('usuarios.create');
    }

}
