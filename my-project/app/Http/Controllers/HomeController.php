<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(){
        //return "Página de inicio";
        $productos = Producto::paginate(9);
        return view('home', compact('productos'));
    }
}
