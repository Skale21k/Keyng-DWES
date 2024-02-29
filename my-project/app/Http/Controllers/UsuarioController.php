<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Redirect;


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

    public function login(){
        return view('usuarios.login');
    }


    public function auth(Request $request){
        //Se puede editar el tiempo que dura la sesion en el archivo .env

        $credenciales = $request->only('email', 'password');

        $remember = $request->filled('remember');

        if(Auth::attempt($credenciales, $remember)){
            //Medida de seguridad.
            $request->session()->regenerate();
            session()->flash('error', "");
            return redirect()->intended(route('usuarios.index'))->with('success', "Logeado correctamente.");
        }

        $errors = new MessageBag(['password' => ['Email y/o contraseña incorrectos.']]); // if Auth::attempt fails (wrong credentials) create a new message bag instance.

        return Redirect::back()->withErrors($errors)->withInput($request->except('password'));
    }

    public function logout(Request $request){
        Auth::logout();

        //Invalida la sesion por seguridad.
        $request->session()->invalidate();

        //Regenera el toker csrf
        $request->session()->regenerateToken();

        return redirect()->route('home')->with('status', "Sesión cerrada.");
    }

    public function verUsuarios(){
        $users = User::paginate(15);
        return view('admin.users', compact('users'));
    }

    public function destroy(User $usuario){
        $usuario->delete();
        return redirect()->back()->with('success', "Usuario eliminado.");
    }

    public function edit(User $usuario)
    {
        if(Auth::id() == $usuario->id || Auth::user()->rol == "admin"){
            return view('usuarios.edit', compact('usuario'));
        }else{
            return redirect()->route('usuarios.index')->with('error', "No puedes editar a otro usuario.");
        }

    }

    public function update(User $usuario, Request $request){
        $usuario->nombre = request('nombre');
        $usuario->email = request('email');
        $usuario->direccion = request('direccion');
        if(isset(request()->rol)){
            $usuario->rol = request('rol');
        }
        if(isset(request()->imagen)){
            if($usuario->imagen != "usuario.png"){
                Storage::delete('public/img/' . $usuario->imagen);
            }
            $imagen = request()->file('imagen');
            $nombreImagen = time() . '_' . $imagen->getClientOriginalName();
            $imagen->move(storage_path('app/public/img'), $nombreImagen);
            $usuario->imagen = $nombreImagen;
        }
        if($request->filled('password')){
            $usuario->password = request('password');
        }
        $usuario->save();
        if(Auth::user()->rol == "admin"){
            return redirect()->route('admin.users')->with('success', "Usuario actualizado.");
        }
        return redirect()->route('usuarios.index')->with('success', "Usuario actualizado.");
    }

}
