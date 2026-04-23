<?php

namespace App\Modules\GestionUsuario\Controllers;

use App\Http\Controllers\Controller;
use App\Models\MER\Reserva;
use Illuminate\Http\Request;

class AdminPanelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $user = auth()->user();

        if ($user->hasRole('Administrador') || $user->hasRole('Soporte')) {
            $perPage = (int) $request->get('per_page', 10);

            if (!in_array($perPage, [5, 10, 15, 20, 30, 50])) {
                $perPage = 10;
            }

            $reservas = Reserva::with([
                'user',
                'estado_reserva',
                'vehiculo.marca',
                'vehiculo.linea',
                'vehiculo.clase',
                'vehiculo.combustible',
                'vehiculo.ciudad',
                'vehiculo.fotos',
            ])
                ->orderByDesc('cod')
                ->paginate($perPage)
                ->withQueryString();

            return view('modules.GestionUsuario.admin.index', compact('reservas'));
        } else {
            $pagos = $user->pagos()
                ->with(['reserva.vehiculo.marca', 'reserva.vehiculo.linea'])
                ->latest()
                ->get();

            return view('modules.GestionUsuario.breeze.dashboard', compact('pagos'));
        }
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
