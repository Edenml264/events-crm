<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StorePaqueteRequest;
use App\Http\Requests\UpdatePaqueteRequest;
use App\Models\Paquete;

class PaqueteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $paquetes = Paquete::all();
        return response()->json(['data' => $paquetes], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'articulos' => 'nullable|string',
        ]);
        $paquete = Paquete::create([
            'nombre' => $validated['nombre'],
            'descripcion' => $validated['descripcion'] ?? null,
            'articulos' => $validated['articulos'] ?? null,
        ]);
        return response()->json(['data' => $paquete], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $paquete = Paquete::findOrFail($id);
        return response()->json(['data' => $paquete], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $paquete = Paquete::findOrFail($id);
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'articulos' => 'nullable|string',
        ]);
        $paquete->update([
            'nombre' => $validated['nombre'],
            'descripcion' => $validated['descripcion'] ?? null,
            'articulos' => $validated['articulos'] ?? null,
        ]);
        return response()->json(['data' => $paquete], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $paquete = Paquete::findOrFail($id);
        $paquete->delete();
        return response()->json(['message' => 'Paquete eliminado'], 200);
    }
}
