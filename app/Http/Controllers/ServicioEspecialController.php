<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Porcentaje_contrato;
use App\Models\Servicio_especial;
use Carbon\Carbon;
use PDF;

class ServicioEspecialController extends Controller
{
    public function index() {
        return view('servicio_especial.index');
    }

    public function crear() {
        return view('servicio_especial.crear');
    }

    public function create(Request $request) {
        $date = Carbon::now('America/Bogota');
    
        $data = $request->all();

        $data['contratoFechaRealizado'] = $date->isoFormat('Y-MM-D H:m:s');
        $data['user_id'] = auth()->user()->id;

        $contrato = Servicio_especial::create( $data );

        if ($contrato->save()) {
            $porcentaje = Porcentaje_contrato::create([
                'total' => round(($request['contratoValor']*4.5) / 100),
                'user_id' => auth()->user()->id
            ]);

            if ($porcentaje->save()) {
                return PDF::loadView('servicio_especial.contrato_pdf', compact('contrato'))->stream('contrato.pdf');
            }
        }

        return $contrato;
    }
}
