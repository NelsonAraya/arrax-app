<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EstadoUsuario;

class EstadoUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('mantenedores.estados.usuarios.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mantenedores.estados.usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre_estado' => 'required'
        ]);
        
        $x = new EstadoUsuario();
        $x->nombre = ucwords(strtolower($request->nombre_estado));
        $x->save();

        session()->flash('success', 'ESTADO DE USUARIO guardado Correctamente');
        return redirect()->route('est.index');
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
        $row = EstadoUsuario::all();
        $response = array(
            "aaData" => $row
         );
        return response()->json($response);
    }
}