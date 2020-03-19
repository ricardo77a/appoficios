<?php

namespace App\Http\Controllers\Proveedor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use Auth;
use App\Proveedor;
use App\Oficio;

class ProveedorController extends Controller
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
        $proveedor = Proveedor::where('user_id', $usuario->id)->first();
        if (is_null($proveedor)) {
            return redirect()->route('proveedor.create');
        }
        return view('proveedor.index', compact('proveedor'));
    }

    public function create()
    {
        $oficios = Oficio::get();
        return view('proveedor.create', compact('oficios'));
    }

    public function store(Request $request)
    {
        $proveedor = new Proveedor($request->all());
        $proveedor->user_id = Auth::id();
        $proveedor->save();
        return redirect()->route('proveedor.index');
    }
}
