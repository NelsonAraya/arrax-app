<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException; 
use App\Models\Banco;
use App\Models\BancoCuentaTipo;
use App\Models\Proveedor;

class ProveedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('finanzas.mantenedores.proveedores.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $banco = Banco::all();
        $cuenta = BancoCuentaTipo::all();
        return view('finanzas.mantenedores.proveedores.create')
                ->with('banco',$banco)
                ->with('cuenta',$cuenta);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'nombre_proveedor' => 'required',
                'direccion' => 'required',
                'ciudad' => 'required',
                'contacto' => 'required',
                'telefono' => 'required',
                'mail_contacto' => 'required',
                'mail_pago' => 'required',
                'cb_banco' => 'required',
                'cb_tipo_cuenta' => 'required',
                'numero_cuenta' => 'required',
                'rut_proveedor' => ['required', function ($attribute, $value, $fail) {
                    $cleanRut = preg_replace('/[\.\-]/', '', $value);
                    $id = substr($cleanRut, 0, -1);
                    if (!$this->validarRut($value)) {
                        throw ValidationException::withMessages([
                            'rut_proveedor' => 'El RUT no es válido.'
                        ]);
                    }
                    // Verificar si el RUT ya existe en la base de datos
                    if (Proveedor::where('id', $id)->exists()) {
                        throw ValidationException::withMessages([
                            'rut_proveedor' => 'El RUT ya está registrado.'
                        ]);
                    }
                }],
            ]);

            // Procesar los datos del formulario si la validación pasa
            $cleanRut = preg_replace('/[\.\-]/', '', $request->rut_proveedor);
            $dv = substr($cleanRut, -1);
            $id = substr($cleanRut, 0, -1);

            $x = new Proveedor();
            $x->id = $id;
            $x->dv = $dv;
            $x->nombre = ucwords(strtolower($request->nombre_proveedor));
            $x->direccion = ucwords(strtolower($request->direccion));
            $x->ciudad = ucwords(strtolower($request->ciudad));
            $x->contacto = ucwords(strtolower($request->contacto));
            $x->telefono = $request->telefono;
            $x->mail_pagos = strtolower($request->mail_pago);
            $x->mail_contacto = strtolower($request->mail_contacto);
            $x->banco_id = $request->cb_banco;
            $x->banco_cuenta_tipo_id = $request->cb_tipo_cuenta;
            $x->numero_cuenta = $request->numero_cuenta;
            $x->save();

            session()->flash('success', 'PROVEEDOR guardado Correctamente');
            return redirect()->route('proveedores.index');

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

    private function validarRut($rut)
    {
        $cleanRut = preg_replace('/[\.\-]/', '', $rut);
        if (strlen($cleanRut) < 2) {
            return false;
        }

        $dv = substr($cleanRut, -1);
        $id = substr($cleanRut, 0, -1);

        $factor = 2;
        $suma = 0;

        for ($i = strlen($id) - 1; $i >= 0; $i--) {
            $suma += $id[$i] * $factor;
            $factor = $factor % 7 == 0 ? 2 : $factor + 1;
        }

        $dvEsperado = 11 - ($suma % 11);
        $dvEsperado = $dvEsperado == 10 ? 'K' : ($dvEsperado == 11 ? '0' : $dvEsperado);

        return strtoupper($dv) == $dvEsperado;
    }

    public function showAll(){

        // Cargar los datos
        $x = Proveedor::all();
        // Transformar los datos 
        $row = $x->map(function($x) {
            return [
                'id' => $x->runCompleto(),
                'nombre' => $x->nombre,
                'direccion' => $x->direccion,
                'ciudad' => $x->ciudad
            ];
        });

        // Preparar la respuesta
        $response = [
            "aaData" => $row
        ];

        // Retornar la respuesta en formato JSON
        return response()->json($response);
}
}
