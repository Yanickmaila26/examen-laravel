<?php

namespace App\Http\Controllers;

use App\Models\Mascota;
use Illuminate\Http\Request;

class MascotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mascotas = Mascota::getMascotas();
        return view('mascotas.index', compact('mascotas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mascotas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre_mascota' => 'required|string|max:100',
            'tipo_animal' => 'required|string|max:50',
            'nombre_dueño' => 'required|string|max:100',
            'telefono' => 'required|string|max:20',
            'fecha_salida' => 'required|date',
            'instrucciones_especiales' => 'nullable|string',
        ]);

        Mascota::createMascota($request->all());

        return redirect()->route('mascotas.index')->with('success', 'Mascota registrada exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mascota $mascota)
    {
        return view('mascotas.show', compact('mascota'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mascota $mascota)
    {
        return view('mascotas.edit', compact('mascota'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mascota $mascota)
    {
        $data = $request->validate([
            'nombre_mascota' => 'required|string|max:100',
            'tipo_animal' => 'required|string|max:50',
            'nombre_dueño' => 'required|string|max:100',
            'telefono' => 'required|string|max:20',
            'fecha_salida' => 'required|date',
            'instrucciones_especiales' => 'nullable|string',
            'estado' => 'required|in:hospedado,recogido',
        ]);

        $mascota->updateMascota($request->all());

        return redirect()->route('mascotas.index')->with('success', 'Mascota actualizada exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mascota $mascota)
    {
        Mascota::deleteMascota($mascota);
        return redirect()->route('mascotas.index')->with('success', 'Mascota eliminada exitosamente.');
    }

    public function recogida(Mascota $mascota)
    {
        Mascota::updateMascotaRecogida($mascota);
        return redirect()->route('mascotas.index')->with('success', 'Mascota actualizada exitosamente.');
    }
    public function hospedado(Mascota $mascota)
    {
        Mascota::updateMascotaHospedado($mascota);
        return redirect()->route('mascotas.index')->with('success', 'Mascota actualizada exitosamente.');
    }
}
