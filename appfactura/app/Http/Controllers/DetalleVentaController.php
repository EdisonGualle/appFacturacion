<?php

namespace App\Http\Controllers;

use App\Models\DetalleVenta;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class DetalleVentaController extends Controller
{
    public function index(): JsonResponse
    {
        $detallesVenta = DetalleVenta::all();
        return response()->json(['data' => $detallesVenta], 200);
    }

    public function show(DetalleVenta $detalleVenta): JsonResponse
    {
        return response()->json(['data' => $detalleVenta], 200);
    }

    public function store(Request $request): JsonResponse
    {
        $validatedData = $request->validate([
            'num_factura' => 'required|string',
            'codigo_producto' => 'required|string',
            'cantidad' => 'required|numeric',
            'precio_unitario' => 'required|numeric',
            'subtotal' => 'required|numeric',
        ]);

        $detalleVenta = DetalleVenta::create($validatedData);

        return response()->json(['data' => $detalleVenta], 201);
    }

    public function update(Request $request, DetalleVenta $detalleVenta): JsonResponse
    {
        $validatedData = $request->validate([
            'num_factura' => 'required|string',
            'codigo_producto' => 'required|string',
            'cantidad' => 'required|numeric',
            'precio_unitario' => 'required|numeric',
            'subtotal' => 'required|numeric',
        ]);

        $detalleVenta->update($validatedData);

        return response()->json(['data' => $detalleVenta], 200);
    }

    public function destroy(DetalleVenta $detalleVenta): JsonResponse
    {
        $detalleVenta->delete();

        return response()->json(null, 204);
    }
}
