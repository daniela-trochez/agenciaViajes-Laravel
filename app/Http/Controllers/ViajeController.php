<?php

namespace App\Http\Controllers;

use App\Models\Destino;
use App\Models\Origen;
use App\Models\Viaje;
use App\Models\Viajero;
use Illuminate\Http\Request;

class ViajeController extends Controller
{
    
    public function index()
    {
        $viajes= Viaje::with('viajero','destino','origen')->get();
        return view('viajes.index', compact('viajes'));
    }

    public function create()
    {
        $viajeros= Viajero::all();
        $destinos= Destino::all();
        $origens= Origen::all();
        return view('viajes.create', compact('viajeros','destinos','origens'));
    }

   
    public function store(Request $request)
    {
        Viaje::create($request->all());
        return redirect()->route('viajeros.index');
    }

   
    public function show(Viaje $viaje)
    {
        return view('viajes.show', compact('viaje'));
    }

    
    public function edit(Viaje $viaje)
    {
        $viaje->update();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Viaje $viaje)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Viaje $viaje)
    {
        //
    }
}
