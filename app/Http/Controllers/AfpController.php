<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Afp;
class AfpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('mantenedores.afp.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mantenedores.afp.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre_afp' => 'required'
        ]);
        $afp = new Afp();
        $afp->nombre = strtoupper($request->nombre_afp);
        $afp->save();

        session()->flash('success', 'AFP guardada Correctamente');
        return redirect()->route('afps.index');
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
        $afp = Afp::all();
        $response = array(
            "aaData" => $afp
         );
        return response()->json($response);
    }
}
