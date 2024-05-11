<?php
namespace App\Http\Controllers;

use App\Models\Mesa;
use Illuminate\Http\Request;

class MesaController extends Controller
{
    public function crearMesa(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string',
        ]);

        $mesa = Mesa::create([
            'nombre' => $request->nombre,
        ]);

        return response()->json($mesa, 201);
    }
}
