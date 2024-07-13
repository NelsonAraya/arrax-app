<?php

namespace App\Http\Controllers;

use App\Models\TipoDocumento;
use Illuminate\Http\Request;

class TipoDocumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('finanzas.mantenedores.tipo_doc.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('finanzas.mantenedores.tipo_doc.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre_dcto' => 'required'
        ]);
        
        $x = new TipoDocumento();
        $x->nombre = ucwords(strtolower($request->nombre_dcto));
        $x->save();

        session()->flash('success', 'TIPO DE DOCUMENTO guardado Correctamente');
        return redirect()->route('tipo_doc.index');
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
        $row = TipoDocumento::all();
        $response = array(
            "aaData" => $row
         );
        return response()->json($response);
    }
}
