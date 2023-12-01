<?php

namespace App\Http\Controllers;

use App\Models\FormasPago;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class FormasPagoController extends Controller
{
    public function index(): JsonResponse
    {
        $formasPago = FormasPago::all();
        return response()->json(['data' => $formasPago], 200);
    }

    public function show(FormasPago $formaPago): JsonResponse
    {
        return response()->json(['data' => $formaPago], 200);
    }

    public function store(Request $request): JsonResponse
    {
        $validatedData = $request->validate([
            'idFormasPago' => 'required|integer',
            'nombre' => 'nullable|string|max:45',
        ]);

        $formaPago = FormasPago::create($validatedData);

        return response()->json(['data' => $formaPago], 201);
    }

    public function update(Request $request, FormasPago $formaPago): JsonResponse
    {
        $validatedData = $request->validate([
            'idFormasPago' => 'required|integer',
            'nombre' => 'nullable|string|max:45',
        ]);

        $formaPago->update($validatedData);

        return response()->json(['data' => $formaPago], 200);
    }

    public function destroy(FormasPago $formaPago): JsonResponse
    {
        $formaPago->delete();

        return response()->json(null, 204);
    }
}
