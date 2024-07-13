<?php

namespace App\Http\Controllers;

use App\Models\Banco;
use App\Models\BancoCuentaTipo;
use Illuminate\Http\Request;

class BancoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('mantenedores.banco.index');
    }

    public function indexCuenta()
    {
        return view('mantenedores.banco.index2');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mantenedores.banco.create');
    }

    public function createCuenta()
    {
        return view('mantenedores.banco.create2');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre_banco' => 'required'
        ]);
        $banco = new Banco();
        $banco->nombre = ucwords(strtolower($request->nombre_banco));
        $banco->save();

        session()->flash('success', 'BANCO guardado Correctamente');
        return redirect()->route('bancos.index');
    }

    public function storeCuenta(Request $request)
    {
        $request->validate([
            'nombre_cuenta' => 'required'
        ]);
        
        $x = new BancoCuentaTipo();
        $x->nombre = ucwords(strtolower($request->nombre_cuenta));
        $x->save();

        session()->flash('success', 'CUENTA BANCARIA guardado Correctamente');
        return redirect()->route('bancos.cuentas');
        
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function showAll(){
        $row = Banco::all();
        $response = array(
            "aaData" => $row
         );
        return response()->json($response);
    }
    public function showAll2(){
        $row = BancoCuentaTipo::all();
        $response = array(
            "aaData" => $row
         );
        return response()->json($response);
    }
}
