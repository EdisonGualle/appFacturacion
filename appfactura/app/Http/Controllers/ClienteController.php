<?php
// app/Http/Controllers/ClienteController.php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
    

        return Cliente::all();
    }
    /* 
    // Show the form for creating a new resource.
    public function create()
    {
        return view('clientes.create');
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $request->validate([
            'cedulaRuc' => 'required|unique:acuaticos.cliente',
            'nombre' => 'nullable|string',
            'direccion' => 'nullable|string',
            'email' => 'nullable|email',
            'telefono' => 'nullable|string',
        ]);

        Cliente::create($request->all());

        return redirect()->route('clientes.index')
            ->with('success', 'Cliente created successfully');
    }

    // Display the specified resource.
    public function show(Cliente $cliente)
    {
        return view('clientes.show', compact('cliente'));
    }

    // Show the form for editing the specified resource.
    public function edit(Cliente $cliente)
    {
        return view('clientes.edit', compact('cliente'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, Cliente $cliente)
    {
        $request->validate([
            'nombre' => 'nullable|string',
            'direccion' => 'nullable|string',
            'email' => 'nullable|email',
            'telefono' => 'nullable|string',
        ]);

        $cliente->update($request->all());

        return redirect()->route('clientes.index')
            ->with('success', 'Cliente updated successfully');
    }

    // Remove the specified resource from storage.
    public function destroy(Cliente $cliente)
    {
        $cliente->delete();

        return redirect()->route('clientes.index')
            ->with('success', 'Cliente deleted successfully');
    } */
}
