<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException; 
use App\Models\Moneda;
use App\Models\MonedaValor;

class MonedaValorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('finanzas.mantenedores.moneda.index2');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $x=Moneda::all();
        return view('finanzas.mantenedores.moneda.create2')
                    ->with('moneda',$x);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'cb_moneda' => 'required',
                'valor' => 'required',
                'fecha' => ['required', function ($attribute, $value, $fail) use ($request) {
                    // Verificar si el codigo ya existe en la base de datos
                    if (MonedaValor::where('tipo_cambio_id',$request->cb_moneda)->where('fecha',$value)->exists()) {
                        throw ValidationException::withMessages([
                            'fecha' => 'Ya se Encuentra Registrado Un Valor de la Moneda en la Fecha '.$value
                        ]);
                    }
                }],
            ]);

            // Procesar los datos del formulario si la validación pasa
            
            $x = new MonedaValor();
            $x->tipo_cambio_id = $request->cb_moneda;
            $x->valor = $request->valor;
            $x->fecha = $request->fecha;
            $x->save();

            session()->flash('success', 'VALOR DE LA MONEDA guardada Correctamente');
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
}
