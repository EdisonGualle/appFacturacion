<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class ProductoController extends Controller
{
    public function index(): JsonResponse
    {
        $productos = Producto::all();
        return response()->json(['data' => $productos], 200);
    }

    public function show(Producto $producto): JsonResponse
    {
        return response()->json(['data' => $producto], 200);
    }

    public function store(Request $request): JsonResponse
    {
        $validatedData = $request->validate([
            'codigo' => 'required|string',
            'nombre' => 'required|string',
            'precio' => 'nullable|numeric',
            'precioMasIva' => 'nullable|string',
            'descripcion' => 'nullable|string',
            'porcentajeIva' => 'nullable|integer',
        ]);

        $producto = Producto::create($validatedData);

        return response()->json(['data' => $producto], 201);
    }

    public function update(Request $request, Producto $producto): JsonResponse
    {
        $validatedData = $request->validate([
            'codigo' => 'required|string',
            'nombre' => 'required|string',
            'precio' => 'nullable|numeric',
            'precioMasIva' => 'nullable|string',
            'descripcion' => 'nullable|string',
            'porcentajeIva' => 'nullable|integer',
        ]);

        $producto->update($validatedData);

        return response()->json(['data' => $producto], 200);
    }

    public function destroy(Producto $producto): JsonResponse
    {
        $producto->delete();

        return response()->json(null, 204);
    }
}