<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fondo;
use App\Models\Departamento;

class FondoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('finanzas.mantenedores.fondos.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dpto = Departamento::all();
        return view('finanzas.mantenedores.fondos.create')->with('dpto',$dpto);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre_fondo' => 'required',
            'nombre_monto' => 'required',
            'nombre_completo' => 'required',
            'anio_fondo' => 'required',
            'cb_dpto' => 'required',
        ]);
        
        $x = new Fondo();
        $x->nombre = ucwords(strtolower($request->nombre_fondo));
        $x->monto = $request->nombre_monto;
        $x->nombre_completo = ucwords(strtolower($request->nombre_completo));
        $x->anio = $request->anio_fondo;
        $x->departamento_id = $request->cb_dpto;
        $x->save();

        session()->flash('success', 'FONDO guardado Correctamente');
        return redirect()->route('fondos.index');
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

            // Cargar los fondos con su relación de departamento utilizando eager loading
            $fondos = Fondo::with('departamento')->get();

            // Transformar los datos para incluir el nombre del departamento
            $fondos = $fondos->map(function($fondo) {
                return [
                    'id' => $fondo->id,
                    'nombre' => $fondo->nombre,
                    'anio' => $fondo->anio,
                    'nom_dpto' => $fondo->departamento ? $fondo->departamento->nombre : null, // Manejar caso de null
                ];
            });

            // Preparar la respuesta
            $response = [
                "aaData" => $fondos
            ];

            // Retornar la respuesta en formato JSON
            return response()->json($response);
    }
}
