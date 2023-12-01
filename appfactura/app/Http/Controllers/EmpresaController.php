<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Models\Factura;
use App\Models\DetalleVenta;

class EmpresaController extends Controller
{
    public function getInvoicesForClient($cliente): JsonResponse
    {
        $invoices = Factura::where('cliente', $cliente)->get();

        return response()->json(['data' => $invoices], 200);
    }

    public function getSaleDetailsForInvoice($numFactura): JsonResponse
    {
        $saleDetails = DetalleVenta::where('num_factura', $numFactura)->get();

        return response()->json(['data' => $saleDetails], 200);
    }


    public function getSalesForClient($cliente): JsonResponse
    {
        $sales = Factura::where('cliente', $cliente)->with('detalleVentas')->get();

        return response()->json(['data' => $sales], 200);
    }
}
