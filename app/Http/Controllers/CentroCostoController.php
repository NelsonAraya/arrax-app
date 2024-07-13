<?php

namespace App\Http\Controllers;

use App\Models\CentroCosto;
use Illuminate\Http\Request;

class CentroCostoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('finanzas.mantenedores.costo');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('finanzas.mantenedores.costoCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre_ccosto' => 'required',
            'nombre_codigo' => 'required'
        ]);
        
        $x = new CentroCosto();
        $x->nombre = ucwords(strtolower($request->nombre_ccosto));
        $x->codigo = strtoupper($request->nombre_codigo);
        $x->save();

        session()->flash('success', 'CENTRO DE COSTO guardado Correctamente');
        return redirect()->route('ccosto.index');
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
        $row = CentroCosto::all();
        $response = array(
            "aaData" => $row
         );
        return response()->json($response);
    }
}
