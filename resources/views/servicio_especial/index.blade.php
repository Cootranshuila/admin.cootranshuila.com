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

        @if (session()->has('ruta') && session('ruta') == 1)
            <div class="alert alert-icon alert-success col-12" role="alert">
                <i class="fe fe-check mr-2" aria-hidden="true"></i> Ruta creada correctamente
            </div>
        @endif

        <div class="row">
            <div class="form-group col-6">
                <form action="/servicio-especial/search" method="get">
                    @csrf

                    <div class="row gutters-xs col-6">
                        <div class="col">
                            <input type="text" name="search" class="form-control" placeholder="Buscar..." required>
                        </div>
                        <span class="col-auto"><button class="btn btn-success" type="submit"><i class="fe fe-search"></i></button></span>
                    </div>
                </form>
            </div>

            <div class="form-group col-6">
                <form action="/servicio-especial/crear-ruta" method="post">
                    @csrf

                    <div class="row gutters-xs col-6 float-right">
                        <div class="col">
                            <input type="text" class="form-control" name="rutaNombre" placeholder="Nueva Ruta" required>
                        </div>
                        <span class="col-auto"><button class="btn btn-success" type="submit"><i class="fe fe-save"></i></button></span>
                    </div>
                </form>
            </div>
        </div>

        @if ( isset($_GET['search']) )
            <span class="px-2"><b>Resultados de busqueda: "{{ $_GET['search'] }}"</b></span>
        @endif


        <div class="card bg-none p-3 mt-2">
            <div class="card-header">
                <h3 class="card-title">Contratos servicio especial</h3>
                <div class="card-options">
                    <a href="/servicio-especial/crear"><button type="button" class="btn btn-primary"> Agregar + </button></a>
                </div>
            </div>
            <div class="card-body pt-0">
                <div class="table-responsive table_e2">
                    <table class="table table-hover table-vcenter table_custom spacing5 text-nowrap mb-3">
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
                                    <td>{{ $contrato->contratoContratante }}</td>
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

                    <div class="row justify-content-center">
                        {{ $contratos->onEachSide(1)->links() }}
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>

@endsection
