<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException; 
use App\Models\Moneda;

class MonedaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('finanzas.mantenedores.moneda.index');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('finanzas.mantenedores.moneda.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'nombre_moneda' => 'required',
                'codigo' => ['required', function ($attribute, $value, $fail) {
                    // Verificar si el codigo ya existe en la base de datos
                    if (Moneda::where('codigo', strtoupper($value))->exists()) {
                        throw ValidationException::withMessages([
                            'codigo' => 'El Codigo de Moneda ya esta registrado.'
                        ]);
                    }
                }],
            ]);

            // Procesar los datos del formulario si la validación pasa
            
            $x = new Moneda();
            $x->nombre = ucwords(strtolower($request->nombre_moneda));
            $x->codigo = strtoupper($request->codigo);
            $x->save();

            session()->flash('success', 'MONEDA guardada Correctamente');
            return redirect()->route('monedas.index');

        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->validator->errors())->withInput();
        }
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
        $row = Moneda::all();
        $response = array(
            "aaData" => $row
         );
        return response()->json($response);
    }
}
