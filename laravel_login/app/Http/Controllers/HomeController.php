<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        // Envia información por instancia request
        // $request->session()->put(['Juan'=>'Administrador']);

        // Envia informacion por instancia session
        // session(['Maria'=>'Estudiante']);

        // Borra una información especifica por formato clave-valor 
        // $request->session()->forget('Juan');

        // Borra toda la información almacenada de una session 
        // $request->session()->flush();

        // $request->session()->flash('Entrada7','Exito7');
        // Almacena más información 
        // $request->session()->reflash();

        // Almacena una informacion especifica por clave-valor
        // $request->session()->keep(['Alejandro','Administrador']);
        $request->session()->regenerate();
        return $request->session()->all();
        // $user=Auth::user();
        // return view('home',compact('user'));
    }
}
