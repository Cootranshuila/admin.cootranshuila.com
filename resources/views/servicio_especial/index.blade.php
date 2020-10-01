@extends('layouts.app')

@section('title') Servicio Especial @endsection
@section('title_content') Servicio Especial @endsection

@section('MyScripts') <script src="{{ asset('assets/js/servicio_especial.js') }}"></script> @endsection

@section('content')

<div class="section-body">

    <div class="col-lg-12">

        @if (session()->has('creado') && session('creado') == 1)
            <div class="alert alert-icon alert-success col-12" role="alert">
                <i class="fe fe-check mr-2" aria-hidden="true"></i> Contrato creado correctamente
            </div>
            <script> window.open("/servicio-especial/ver/{{ session('contrato_id') }}", "_blank"); </script>
        @endif

        <div class="card bg-none p-3">
            <div class="card-header">
                <h3 class="card-title">Contratos servicio especial</h3>
                <div class="card-options">
                    <a href="/servicio-especial/crear"><button type="button" class="btn btn-primary"> Agregar + </button></a>
                </div>
            </div>
            <div class="card-body pt-0">
                <div class="table-responsive table_e2">
                    <table class="table table-hover table-vcenter table_custom spacing5 text-nowrap mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>NOMBRE</th>
                                <th>CEDULA</th>
                                <th>NOMBRE CONTRATANTE</th>
                                <th>FECHA</th>
                                <th>No. INTERNO</th>
                                <th>PLACA</th>
                                <th class="text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contratos as $contrato)
                                <tr>
                                    <td>{{ $contrato->id }}</td>
                                    <td>{{ $contrato->user->name ?? '' }}</td>
                                    <td>{{ $contrato->identificacion }}</td>
                                    <td>{{ $contrato->contratoRespoNombre }}</td>
                                    <td>{{ $contrato->contratoFechaRealizado }}</td>
                                    <td>{{ $contrato->contratoNumeroInterno }}</td>
                                    <td>{{ $contrato->contratoPlaca }}</td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-primary btn-sm" title="Ver"><i class="fa fa-eye"></i></button>
                                        <button type="button" class="btn btn-info btn-sm" title="Imprimir"><i class="fa fa-print"></i></button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{ $contratos->onEachSide(5)->links() }}

                </div>
            </div>
        </div>
    </div>

</div>

@endsection
