<?php
// app/Http/Controllers/ClienteController.php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class ClienteController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(['data' => Cliente::all()], 200);
    }

    public function show($id): JsonResponse
    {
        return response()->json(['data' => Cliente::findOrFail($id)], 200);
    }

    public function store(Request $request): JsonResponse
    {
        $request->validate([
            'cedulaRuc' => 'required|string|max:15',
            'nombre' => 'nullable|string|max:145',
            'direccion' => 'nullable|string|max:245',
            'email' => 'nullable|email|max:145',
            'telefono' => 'nullable|string|max:10',
        ]); 

        return response()->json(['data' => Cliente::create($request->all())], 201);
    }

    public function update(Request $request, $id): JsonResponse
    {
        $request->validate([
            'cedulaRuc' => 'required|string|max:15|unique:cedulaRuc,' . $id,
            'nombre' => 'nullable|string|max:145',
            'direccion' => 'nullable|string|max:245',
            'email' => 'nullable|email|max:145',
            'telefono' => 'nullable|string|max:10',
        ]);

        $cliente = Cliente::findOrFail($id);
        $cliente->update($request->all());

        return response()->json(['data' => $cliente], 200);
    }

    public function destroy($id): JsonResponse
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();

        return response()->json(null, 204);
    }
}
