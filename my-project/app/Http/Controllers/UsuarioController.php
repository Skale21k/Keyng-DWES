<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class UsuarioController extends Controller
{

    public function index(){
        return view('usuarios.store');
    }

    public function create(){
        return view('usuarios.create');
    }

    public function store(Request $request){
        $p = new User();
        $p->nombre = $request->nombre;
        $p->email = $request->email;
        $p->password = $request->password;
        $p->direccion = $request->direccion;

        $p->save();

        return view('usuarios.create');
    }

    public function login(){

        $credenciales = request()->only('email','password');
        if(Auth::attempt($credenciales)){
            return view('welcome');
        }

        return view('usuarios.login');
    }

}
