<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class UsuarioController extends Controller
{

    public function index(){
        return view('usuarios.index');
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

        if(isset($request->imagen)){
            $imagen = $request->file('imagen');
            $nombreImagen = $imagen->getClientOriginalName();
            $imagen->move(storage_path('app/public/img'), $nombreImagen);
            $p->imagen = $nombreImagen;
        }

        $p->save();

        $credenciales = $request->only('email', 'password');

        $remember = $request->filled('remember');

        if(Auth::attempt($credenciales, $remember)){
            //Medida de seguridad.
            $request->session()->regenerate();

            return redirect()->intended(route('usuarios.index'))->with('status', "Logeado correctamente.");
        }

        return view('usuarios.index');
    }


    public function login(Request $request){
        //Se puede editar el tiempo que dura la sesion en el archivo .env

        $credenciales = $request->only('email', 'password');

        $remember = $request->filled('remember');

        if(Auth::attempt($credenciales, $remember)){
            //Medida de seguridad.
            $request->session()->regenerate();

            return redirect()->intended(route('usuarios.index'))->with('status', "Logeado correctamente.");
        }

        return view('usuarios.login');
    }

    public function logout(Request $request){
        Auth::logout();

        //Invalida la sesion por seguridad.
        $request->session()->invalidate();

        //Regenera el toker csrf
        $request->session()->regenerateToken();

        return redirect()->route('usuarios.index')->with('status', "Sesión cerrada.");
    }

    public function verUsuarios(){
        $users = User::all();
        return view('admin.users', compact('users'));
    }

    public function destroy(User $usuario){
        $usuario->delete();
        return redirect()->back()->with('success', "Usuario eliminado.");
    }

    public function edit(User $usuario)
    {
        return view('usuarios.edit', compact('usuario'));
    }

}
