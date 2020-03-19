<?php

namespace App\Http\Controllers\Cliente;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use Auth;
use App\Cliente;
use App\Proveedor;
use App\Cita;

class ServiciosController extends Controller
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
        $cliente = Cliente::where('user_id', $usuario->id)->first();
        $proveedores = Proveedor::get();
        return view('servicios.index', compact('cliente', 'proveedores'));
    }

    public function agendar(Request $request)
    {
        $cliente = Auth::user()->cliente;
        $cita = new Cita($request->all());
        $cita->cliente_id = $cliente->id;
        $cita->save();
        return redirect()->route('cliente.index');
    }

    public function store(Request $request)
    {
        $cliente = new Cliente($request->all());
        $cliente->user_id = Auth::id();
        $cliente->save();
        return redirect()->route('cliente.index');
    }
}
