<?php

namespace App\Http\Controllers\Cliente;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use Auth;
use App\Cliente;
use App\Oficio;

class ClienteController extends Controller
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
        if (is_null($cliente)) {
            return redirect()->route('cliente.create');
        }
        return view('cliente.index', compact('cliente'));
    }

    public function create()
    {
        return view('cliente.create');
    }

    public function store(Request $request)
    {
        $cliente = new Cliente($request->all());
        $cliente->user_id = Auth::id();
        $cliente->save();
        return redirect()->route('cliente.index');
    }
}
