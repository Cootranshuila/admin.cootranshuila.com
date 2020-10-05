<?php

namespace App\Http\Controllers;

use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Storage;
use App\Models\Porcentaje_contrato;
use Illuminate\Support\Facades\DB;
use App\Models\Servicio_especial;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Ruta;
use PDF;

class ServicioEspecialController extends Controller
{
    public function index() {
        $contratos = Servicio_especial::orderBy('id', 'desc')->with('user')->paginate(10);

        return view('servicio_especial.index', ['contratos' => $contratos]);
    }

    public function crear() {
        return view('servicio_especial.crear');
    }

    public function search(Request $request) {
        $contratos = Servicio_especial::where('contratoContratante', 'like', '%'.$request['search'].'%')
                    ->orWhere('contratoFechaRealizado', 'like', '%'.$request['search'].'%')
                    ->orWhere('contratoNumeroInterno', 'like', '%'.$request['search'].'%')
                    ->orWhere('contratoPlaca', 'like', '%'.$request['search'].'%')
                    ->orderBy('id', 'desc')->with('user')->paginate(10);

        return view('servicio_especial.index', ['contratos' => $contratos]);
    }

    public function crear_ruta(Request $request) {
        Ruta::create($request->all())->save();

        return redirect()->back()->with(['ruta' => 1]);
    }

    public function create(Request $request) {

        $date = Carbon::now('America/Bogota');

        $data = $request->all();

        $data['contratoFechaRealizado'] = $date->isoFormat('Y-MM-D H:m:s');
        $data['user_id'] = auth()->user()->id;

        $qr_name = 'QR_'.$date->format('YmdHis');
        $data['codeQR'] = 'nombre_temporal';

        $contrato = Servicio_especial::create( $data );
        $contrato->save();

        $id_contrato = MD5($contrato->id);

        $qr = QrCode::size(100)->format('png')->generate(route('ver-contrato', $id_contrato), public_path('assets/images/qr/'.$qr_name.'.png'));

        $contrato['codeQR'] = $qr_name.'.png';

        if ($contrato->save()) {
            $porcentaje = Porcentaje_contrato::create([
                'total' => round(($request['contratoValor']*4.5) / 100),
                'user_id' => auth()->user()->id
            ]);

            if ($porcentaje->save()) {


                return redirect()->route('servicio-especial')->with(['creado' => 1, 'contrato_id' => $id_contrato]);
            }
        }

        return $contrato;
    }

    public function ver_contrato(Request $request) {
        $contrato = DB::select('SELECT * FROM `servicio_especial` WHERE MD5(id) = "'.$request['id'].'"');

        return PDF::loadView('servicio_especial.contrato_pdf', compact(['contrato']))->stream('contrato.pdf');;
    }
}
