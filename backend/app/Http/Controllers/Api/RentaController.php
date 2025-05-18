<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRentaRequest;
use App\Http\Requests\UpdateRentaRequest;
use App\Models\Renta;

class RentaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rentas = Renta::all();
        return response()->json(['data' => $rentas], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'cliente_id' => 'required|integer',
            'fecha' => 'required|date',
            'paquetes' => 'nullable|string',
            'articulos' => 'nullable|string',
            'notas' => 'nullable|string',
        ]);
        $renta = Renta::create([
            'cliente_id' => $validated['cliente_id'],
            'fecha' => $validated['fecha'],
            'paquetes' => $validated['paquetes'] ?? null,
            'articulos' => $validated['articulos'] ?? null,
            'notas' => $validated['notas'] ?? null,
        ]);
        return response()->json(['data' => $renta], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $renta = Renta::findOrFail($id);
        return response()->json(['data' => $renta], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $renta = Renta::findOrFail($id);
        $validated = $request->validate([
            'cliente_id' => 'required|integer',
            'fecha' => 'required|date',
            'paquetes' => 'nullable|string',
            'articulos' => 'nullable|string',
            'notas' => 'nullable|string',
        ]);
        $renta->update([
            'cliente_id' => $validated['cliente_id'],
            'fecha' => $validated['fecha'],
            'paquetes' => $validated['paquetes'] ?? null,
            'articulos' => $validated['articulos'] ?? null,
            'notas' => $validated['notas'] ?? null,
        ]);
        return response()->json(['data' => $renta], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $renta = Renta::findOrFail($id);
        $renta->delete();
        return response()->json(['message' => 'Renta eliminada'], 200);
    }
}
