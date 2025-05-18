<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCotizacionRequest;
use App\Http\Requests\UpdateCotizacionRequest;
use App\Models\Cotizacion;

class CotizacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cotizaciones = Cotizacion::all();
        return response()->json(['data' => $cotizaciones], 200);
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
            'total' => 'nullable|numeric',
            'notas' => 'nullable|string',
        ]);
        $cotizacion = Cotizacion::create([
            'cliente_id' => $validated['cliente_id'],
            'fecha' => $validated['fecha'],
            'paquetes' => $validated['paquetes'] ?? null,
            'articulos' => $validated['articulos'] ?? null,
            'total' => $validated['total'] ?? 0,
            'notas' => $validated['notas'] ?? null,
        ]);
        return response()->json(['data' => $cotizacion], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cotizacion = Cotizacion::findOrFail($id);
        return response()->json(['data' => $cotizacion], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cotizacion = Cotizacion::findOrFail($id);
        $validated = $request->validate([
            'cliente_id' => 'required|integer',
            'fecha' => 'required|date',
            'paquetes' => 'nullable|string',
            'articulos' => 'nullable|string',
            'total' => 'nullable|numeric',
            'notas' => 'nullable|string',
        ]);
        $cotizacion->update([
            'cliente_id' => $validated['cliente_id'],
            'fecha' => $validated['fecha'],
            'paquetes' => $validated['paquetes'] ?? null,
            'articulos' => $validated['articulos'] ?? null,
            'total' => $validated['total'] ?? 0,
            'notas' => $validated['notas'] ?? null,
        ]);
        return response()->json(['data' => $cotizacion], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cotizacion = Cotizacion::findOrFail($id);
        $cotizacion->delete();
        return response()->json(['message' => 'Cotización eliminada'], 200);
    }
}
