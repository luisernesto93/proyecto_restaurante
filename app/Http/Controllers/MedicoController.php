<?php

namespace App\Http\Controllers;

use App\Models\Medico;
use Illuminate\Http\Request;

class MedicoController extends Controller
{
    public function index()
    {
        $medicos = Medico::all(); // Obtenemos todos los medicos
        
        return view('medicos.index', [
            'medicos' => $medicos
        ]);
    }

    public function create()
    {
        return view('medicos.create');
    }

    public function store(Request $request)
    {
        Medico::create($request->all()); // Creamos un nuevo medico

        return redirect()->route('medicos.index'); // Redireccionamos al listado de medicos
    }

    public function show(Medico $medico)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function edit(Medico $medico)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medico $medico)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medico $medico)
    {
        //
    }
}
