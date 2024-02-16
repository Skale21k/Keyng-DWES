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
        //Se puede editar el tiempo que dura la sesion en el archivo .env

        $credenciales = request()->only('email','password');
        $remember = request()->filled('remember');

        if(Auth::attempt($credenciales, $remember)){
            //Medida de seguridad.
            request()->session()->regenerate();
            return view('welcome');
        }

        return view('usuarios.login');
    }

}
