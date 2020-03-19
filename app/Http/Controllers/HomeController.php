<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Auth;

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
    public function index()
    {
        $usuario = Auth::user();
        if ($usuario->tipo === 'cliente') {
            return redirect()->route('cliente.index');
        }
        elseif ($usuario->tipo === 'proveedor') {
            return redirect()->route('proveedor.index');
        }
        else{
            dd('error');
        }
        return view('home');
    }
}
