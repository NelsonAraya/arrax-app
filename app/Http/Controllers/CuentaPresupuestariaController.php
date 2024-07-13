<?php

namespace App\Http\Controllers;

use App\Models\CuentaPresupuestaria;
use Illuminate\Http\Request;

class CuentaPresupuestariaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('finanzas.mantenedores.cuenta');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('finanzas.mantenedores.cuentaCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'numero_cuenta' => 'required',
            'nombre_cuenta' => 'required'
        ]);
        
        $x = new CuentaPresupuestaria();
        $x->id = $request->numero_cuenta;
        $x->nombre = ucwords(strtolower($request->nombre_cuenta));
        $x->save();

        session()->flash('success', 'CUENTA PRESUPUESTARIA guardada Correctamente');
        return redirect()->route('cuentap.index');
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
        $row = CuentaPresupuestaria::all();
        $response = array(
            "aaData" => $row
         );
        return response()->json($response);
    }
}
