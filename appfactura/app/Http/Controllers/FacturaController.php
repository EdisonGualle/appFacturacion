<?php

namespace App\Http\Controllers;

use App\Models\Factura;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class FacturaController extends Controller
{
    public function index(): JsonResponse
    {
        $facturas = Factura::all();
        return response()->json(['data' => $facturas], 200);
    }

    public function show(Factura $factura): JsonResponse
    {
        return response()->json(['data' => $factura], 200);
    }

    public function store(Request $request): JsonResponse
    {
        $validatedData = $request->validate([
            'num_factura' => 'required|string|max:100|unique:factura,num_factura',
            'fechaEmision' => 'nullable|date',
            'fechaAutorizacion' => 'nullable|date',
            'acutorizacionSRI' => 'nullable|string|max:45',
            'guiaRemision' => 'nullable|string|max:45',
            'formaPago' => 'required|integer',
            'cliente' => 'required|string',
            'emisor' => 'required|string',
        ]);

        $factura = Factura::create($validatedData);

        return response()->json(['data' => $factura], 201);
    }

    public function update(Request $request, Factura $factura): JsonResponse
    {
        $validatedData = $request->validate([
            'num_factura' => 'required|string|max:100|unique:factura,num_factura,' . $factura->num_factura,
            'fechaEmision' => 'nullable|date',
            'fechaAutorizacion' => 'nullable|date',
            'acutorizacionSRI' => 'nullable|string|max:45',
            'guiaRemision' => 'nullable|string|max:45',
            'formaPago' => 'required|integer',
            'cliente' => 'required|string',
            'emisor' => 'required|string',
        ]);

        $factura->update($validatedData);

        return response()->json(['data' => $factura], 200);
    }

    public function destroy(Factura $factura): JsonResponse
    {
        $factura->delete();

        return response()->json(null, 204);
    }
}
