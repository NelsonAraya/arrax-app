<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fondo;

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
        return view('finanzas.mantenedores.fondos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        $row = Fondo::all();
        $response = array(
            "aaData" => $row
         );
        return response()->json($response);
    }
}