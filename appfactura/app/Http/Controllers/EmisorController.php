<?php

namespace App\Http\Controllers;

use App\Models\Emisor;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class EmisorController extends Controller
{
    public function index(): JsonResponse
    {
        $emisores = Emisor::all();
        return response()->json(['data' => $emisores], 200);
    }

    public function show(Emisor $emisor): JsonResponse
    {
        return response()->json(['data' => $emisor], 200);
    }

    public function store(Request $request): JsonResponse
    {
        $validatedData = $request->validate([
            'cedulaRuc' => 'required|string|max:15|unique:emisor,cedulaRuc',
            'nombreComercial' => 'nullable|string|max:145',
            'razonSocial' => 'nullable|string|max:45',
            'email' => 'nullable|email|max:45',
            'telefono' => 'nullable|string|max:10',
            'direccion' => 'nullable|string|max:145',
        ]);

        $emisor = Emisor::create($validatedData);

        return response()->json(['data' => $emisor], 201);
    }

    public function update(Request $request, Emisor $emisor): JsonResponse
    {
        $validatedData = $request->validate([
            'cedulaRuc' => 'required|string|max:15|unique:emisor,cedulaRuc,' . $emisor->cedulaRuc,
            'nombreComercial' => 'nullable|string|max:145',
            'razonSocial' => 'nullable|string|max:45',
            'email' => 'nullable|email|max:45',
            'telefono' => 'nullable|string|max:10',
            'direccion' => 'nullable|string|max:145',
        ]);

        $emisor->update($validatedData);

        return response()->json(['data' => $emisor], 200);
    }

    public function destroy(Emisor $emisor): JsonResponse
    {
        $emisor->delete();

        return response()->json(null, 204);
    }
}