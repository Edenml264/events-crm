<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreArticuloRequest;
use App\Http\Requests\UpdateArticuloRequest;
use App\Models\Articulo;

class ArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articulos = Articulo::all();
        return response()->json(['data' => $articulos], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'tipo' => 'required|string|max:100',
            'cantidad' => 'required|integer|min:0',
            'estado' => 'nullable|string|max:100',
            'notas' => 'nullable|string',
        ]);
        $articulo = Articulo::create([
            'nombre' => $validated['nombre'],
            'descripcion' => $validated['descripcion'] ?? null,
            'tipo' => $validated['tipo'],
            'stock_disponible' => $validated['cantidad'],
            'estado' => $validated['estado'] ?? null,
            'notas' => $validated['notas'] ?? null,
            'precio' => 0,
            'unidad_medida' => '',
            'activo' => true,
        ]);
        return response()->json(['data' => $articulo], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $articulo = Articulo::findOrFail($id);
        return response()->json(['data' => $articulo], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $articulo = Articulo::findOrFail($id);
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'tipo' => 'required|string|max:100',
            'cantidad' => 'required|integer|min:0',
            'estado' => 'nullable|string|max:100',
            'notas' => 'nullable|string',
        ]);
        $articulo->update([
            'nombre' => $validated['nombre'],
            'descripcion' => $validated['descripcion'] ?? null,
            'tipo' => $validated['tipo'],
            'stock_disponible' => $validated['cantidad'],
            'estado' => $validated['estado'] ?? null,
            'notas' => $validated['notas'] ?? null,
        ]);
        return response()->json(['data' => $articulo], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $articulo = Articulo::findOrFail($id);
        $articulo->delete();
        return response()->json(['message' => 'Artículo eliminado'], 200);
    }
}
