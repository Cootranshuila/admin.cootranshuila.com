@extends('layouts.app')

@section('title') Operativos @endsection
@section('title_content') Agregar operativo @endsection

@section('MyScripts') <script src="{{ asset('assets/js/operativos.js') }}"></script> @endsection

@section('content')

<div class="section-body">

    <div class="col-lg-12">

        @if (session()->has('create') && session('create') == 1)
            <div class="alert alert-icon alert-success col-12" role="alert">
                <i class="fe fe-check mr-2" aria-hidden="true"></i> Operativo agregado correctamente
            </div>
        @endif

        @if (session()->has('create') && session('create') == 0)
            <div class="alert alert-icon alert-danger col-12" role="alert">
                <i class="fe fe-check mr-2" aria-hidden="true"></i> Ocurrio un problema, intente nuevamente
            </div>
        @endif

        @if (session()->has('ruta') && session('ruta') == 1)
            <div class="alert alert-icon alert-success col-12" role="alert">
                <i class="fe fe-check mr-2" aria-hidden="true"></i> Ruta creada correctamente
            </div>
        @endif

        <div class="card bg-none p-sm-5 mt-2">
            <div class="card-header">
                <h3 class="card-title">Agregar operativo</h3>
            </div>
            <div class="card-body pt-0">
                <form action="/operativos/create" class="form-inline" method="post" style="background: #ffffff;">
                    @csrf

                    <table class="table table-bordered table-responsive">
                        <thead>
                            <tr align="center">
                                <th colspan="4">FORMATO OPERATIVO DE CARRETERA</th>
                                <th colspan="1">
                                    <div class="form-group">
                                        <label for="num_operativo" class="col-md-2">No.</label>
                                        <input type="number" class="form-control-plaintext col-md-10" placeholder="Numero de operativo" name="num_operativo" id="num_operativo" required="" />
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="5">
                                    <div class="form-group">
                                        <label for="nom_conductor" class="col-md-3">Nombre del conductor </label>
                                        <input type="text" class="form-control-plaintext col-md-8" placeholder="Escriba el nombre" name="nom_conductor" id="nom_conductor" required="" />
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td colspan="1">
                                    <div class="form-group">
                                        <label for="fecha_operativo" class="col-md">Fecha </label>
                                        <input type="date" class="form-control-plaintext" placeholder="Ponga la fecha" name="fecha_operativo" id="fecha_operativo" required="" />
                                    </div>
                                </td>
                                <td colspan="1">
                                    <div class="form-group">
                                        <label for="hora_operativo" class="col-md">Hora </label>
                                        <input type="time" class="form-control-plaintext" name="hora_operativo" id="hora_operativo" required="" />
                                    </div>
                                </td>
                                <td colspan="1">
                                    <div class="form-group">
                                        <label for="placa_vehiculo" class="col-md">Placa </label>
                                        <input type="text" class="form-control-plaintext" placeholder="Placa del vehiculo" name="placa_vehiculo" id="placa_vehiculo" required="" />
                                    </div>
                                </td>
                                <td colspan="1">
                                    <div class="form-group">
                                        <label for="modalidad" class="col-md">Modalidad </label>
                                        <!-- <input type="text" class="form-control-plaintext" placeholder="Modalidad del vehiculo" name="modalidad" id="modalidad" required> -->
                                        <select name="modalidad" id="modalidad" class="form-control-plaintext" required="">
                                            <option value="">Seleccione</option>
                                            <option value="Doble Yo">Doble Yo</option>
                                            <option value="VIP">VIP</option>
                                            <option value="Platino Expres">Platino Expres</option>
                                            <option value="Platino Jet">Platino Jet</option>
                                            <option value="Platino Especial">Platino Especial</option>
                                            <option value="Mixto">Mixto</option>
                                        </select>
                                    </div>
                                </td>
                                <td colspan="1">
                                    <div class="form-group">
                                        <label for="num_vehiculo" class="col-md">No. Vehiculo </label>
                                        <input type="number" class="form-control-plaintext" placeholder="Numero del vehiculo" name="num_vehiculo" id="num_vehiculo" required="" />
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td colspan="2">
                                    <div class="form-group">
                                        <label for="origen_ruta" class="col-md">Origen </label>
                                        <input type="text" class="form-control-plaintext" placeholder="Origen de ruta" name="origen_ruta" id="origen_ruta" required="" />
                                    </div>
                                </td>
                                <td colspan="1">
                                    <div class="form-group">
                                        <label for="hora_salida" class="col-md">Hora salida </label>
                                        <input type="time" class="form-control-plaintext" name="hora_salida" id="hora_salida" />
                                    </div>
                                </td>
                                <td colspan="2">
                                    <div class="form-group">
                                        <label for="destino_ruta" class="col-md">Destino </label>
                                        <input type="text" class="form-control-plaintext" placeholder="Destino de ruta" name="destino_ruta" id="destino_ruta" required="" />
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td colspan="5">
                                    <div class="form-group">
                                        <label for="sitio_operativo" class="col-md-3">Sitio del operativo </label>
                                        <input type="text" class="form-control-plaintext col-md-8" placeholder="Escriba el sitio del operativo" name="sitio_operativo" id="sitio_operativo" required="" />
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td colspan="3">
                                    <div class="form-group">
                                        <label for="pasajeros_con_tiquete" class="col-md-4">Pasajeros con tiquete </label>
                                        <input type="number" class="form-control-plaintext col-md-8" placeholder="Escriba el numero de pasajeros" name="pasajeros_con_tiquete" id="pasajeros_con_tiquete" required="" />
                                    </div>
                                </td>
                                <td colspan="2">
                                    <div class="form-group">
                                        <label for="pasajeros_sin_tiquete" class="col-md-5">Pasajeros sin tiquete </label>
                                        <input type="number" class="form-control-plaintext col-md-7" placeholder="Escriba el numero de pasajeros" name="pasajeros_sin_tiquete" id="pasajeros_sin_tiquete" required="" />
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td colspan="2">
                                    <div class="form-group">
                                        <label for="" class="col-md-10">Presentacion del conductor </label>
                                    </div>
                                </td>
                                <td colspan="1">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" id="rcBueno" name="presentacion_conductor" value="Bueno" required="" />
                                        <label class="custom-control-label" for="rcBueno">Bueno</label>
                                    </div>
                                </td>
                                <td colspan="1">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" id="rcRegular" name="presentacion_conductor" value="Regular" required="" />
                                        <label class="custom-control-label" for="rcRegular">Regular</label>
                                    </div>
                                </td>
                                <td colspan="1">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" id="rcMalo" name="presentacion_conductor" value="Malo" required="" />
                                        <label class="custom-control-label" for="rcMalo">Malo</label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td colspan="2">
                                    <div class="form-group">
                                        <label for="" class="col-md-10">Presentacion del auxiliar </label>
                                    </div>
                                </td>
                                <td colspan="1">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" id="raBueno" name="presentacion_auxiliar" value="Bueno" required="" />
                                        <label class="custom-control-label" for="raBueno">Bueno</label>
                                    </div>
                                </td>
                                <td colspan="1">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" id="raRegular" name="presentacion_auxiliar" value="Regular" required="" />
                                        <label class="custom-control-label" for="raRegular">Regular</label>
                                    </div>
                                </td>
                                <td colspan="1">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" id="raMalo" name="presentacion_auxiliar" value="Malo" required="" />
                                        <label class="custom-control-label" for="raMalo">Malo</label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td colspan="2">
                                    <div class="form-group">
                                        <label for="" class="col-md-10">Presentacion del vehiculo </label>
                                    </div>
                                </td>
                                <td colspan="1">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" id="rvBueno" name="presentacion_vehiculo" value="Bueno" required="" />
                                        <label class="custom-control-label" for="rvBueno">Bueno</label>
                                    </div>
                                </td>
                                <td colspan="1">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" id="rvRegular" name="presentacion_vehiculo" value="Regular" required="" />
                                        <label class="custom-control-label" for="rvRegular">Regular</label>
                                    </div>
                                </td>
                                <td colspan="1">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" id="rvMalo" name="presentacion_vehiculo" value="Malo" required="" />
                                        <label class="custom-control-label" for="rvMalo">Malo</label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td colspan="5">
                                    <div class="form-group">
                                        <h5 class="col-12">
                                            ¿El operativo tiene observaciones?
                                            <div class="custom-control custom-radio custom-control-inline ml-3">
                                                <input type="radio" class="custom-control-input" id="obs-si" name="check-obs" value="Si" required="" />
                                                <label class="custom-control-label" for="obs-si">Si</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" class="custom-control-input" id="obs-no" name="check-obs" value="No" required="" />
                                                <label class="custom-control-label" for="obs-no">No</label>
                                            </div>
                                        </h5>

                                        <label for="observaciones" class="mt-3 display-obs d-none">Observaciones:</label>
                                        <textarea class="form-control-plaintext display-obs d-none" placeholder="Escriba la observacion" rows="5" id="observaciones" name="observaciones"></textarea>
                                    </div>
                                </td>
                            </tr>

                            <tr align="center">
                                <td colspan="5">
                                    <button type="submit" id="enviar" class="btn btn-success btn-lg">ENVIAR</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>

</div>

@endsection
