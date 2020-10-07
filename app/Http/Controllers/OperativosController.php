<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Operativo;

class OperativosController extends Controller
{
    public function index() {
        $operativos = Operativo::paginate(10);

        return view('operativos.index', ['operativos' => $operativos]);
    }

    public function agregar() {
        return view('operativos.agregar');
    }

    public function create(Request $request) {
        $data = $request->all();

        $data['user_id'] = auth()->user()->id;

        if (Operativo::create($data)->save()) {
            return redirect()->back()->with(['create' => 1]);
        }

        return redirect()->back()->with(['create' => 0]);
    }
}
