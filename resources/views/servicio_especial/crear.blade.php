@extends('layouts.app')

@section('title') Servicio Especial @endsection
@section('title_content') Servicio Especial @endsection

@section('content')

<div class="section-body">

    @if (session()->has('ruta') && session('ruta') == 1)
        <div class="alert alert-icon alert-success col-12" role="alert">
            <i class="fe fe-check mr-2" aria-hidden="true"></i> Ruta creada correctamente
        </div>
    @endif

    <div class="row mb-2">
        <div class="row gutters-xs col-6">
            <a href="/servicio-especial" class="btn btn-primary ml-2" >Atras</a>
        </div>

        <form action="/servicio-especial/crear-ruta" method="post" class="col-6 float-right">
            @csrf

            <div class="row gutters-xs">
                <div class="col">
                    <input type="text" class="form-control" name="rutaNombre" placeholder="Nueva Ruta" required>
                </div>
                <span class="col-auto"><button class="btn btn-success" type="submit"><i class="fe fe-save"></i></button></span>
            </div>
        </form>
    </div>

    <form class="card" method="POST" action="/servicio-especial/create">
        @csrf

        <div class="card-body">
            <h3 class="card-title">Crear Contrato </h3>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="form-label">Contratado por</label>
                        <select class="form-control custom-select" name="txtcontacto" required>
                            <option value="">Seleccione...</option>
                            <option value="Empleado">Empleado</option>
                            <option value="Empresa">Empresa</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="form-label">No.</label>
                        <input type="text" class="form-control" name="contratoNumeroUno" value="441025001" readonly="" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="form-label">Año</label>
                        <input type="text" class="form-control" name="contratoAno" value="{{ \Carbon\Carbon::now()->isoFormat('Y') }}" readonly="" required>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="form-group">
                        <label class="form-label">Empresa transportadora</label>
                        <input type="text" class="form-control" value="COOPERATIVA DE TRANSPORTADORES DEL HUILA LTDA" name="contratoEmpresa" readonly="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="form-label">Nit</label>
                        <div class="form-group d-flex">
                            <input type="text" class="form-control col-10 mr-2" value="891100299" name="contratoNit1" readonly="">
                            <input type="text" class="form-control col-2" value="7" name="contratoNit2" readonly="">
                        </div>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="form-group">
                        <label class="form-label">Contratante</label>
                        <input type="text" class="form-control" placeholder="Nombre del contratante" name="contratoContratante" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="form-label">Nit</label>
                        <div class="form-group d-flex">
                            <input type="number" class="form-control col-10 mr-2" placeholder="Escriba el Nit" name="contratoNit3" required>
                            <input type="number" class="form-control col-2" name="contratoNit4" required>
                        </div>
                    </div>
                </div>

                <hr class="w-100">

                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label text-center">Objeto contrato</label>
                        <textarea rows="2" class="form-control" name="contratoObjetivo" placeholder="Escriba el objeto del contrato"></textarea>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Origen</label>
                        <select class="form-control custom-select" name="contratoOrigen" required>
                            <option value="">Seleccione...</option>
                            @foreach (\DB::select('select * from rutas group by rutaNombre order by rutaNombre asc') as $item)
                                <option value="{{ $item->rutaNombre }}">{{ $item->rutaNombre }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Destino</label>
                        <select class="form-control custom-select" name="contratoDestino" required>
                            <option value="">Seleccione...</option>
                            @foreach (\DB::select('select * from rutas group by rutaNombre order by rutaNombre asc') as $item)
                                <option value="{{ $item->rutaNombre }}">{{ $item->rutaNombre }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label text-center">Recorrido</label>
                        <textarea rows="2" class="form-control" name="contratoRecorrido" placeholder="Escriba el recorrido" required></textarea>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Forma de Pago</label>
                        <select class="form-control custom-select" name="PagoForma" required>
                            <option value="">Seleccione...</option>
                            <option value="Efectivo">Efectivo</option>
                            <option value="Contado">Contado</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Valor</label>
                        <input type="text" class="form-control" placeholder="Escriba el valor" name="contratoValor" required>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label text-center">Valor en letras</label>
                        <textarea rows="2" class="form-control" name="contratoValorLetra" placeholder="Escriba el valor en letras"></textarea>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label class="form-label">Hora de Salida</label>
                        <input type="time" class="form-control" placeholder="Escriba la hora de salida" name="contratoHoraSalida" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="form-label">Numero de pasajeros.</label>
                        <input type="number" class="form-control" name="contratoPasajeros" placeholder="Escriba el numero de pasajeros" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Convenio</label>
                        <input type="text" class="form-control" name="contratoConvenio" placeholder="Escriba el convenio" >
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label class="form-label">Consorcio</label>
                        <input type="text" class="form-control" placeholder="Escriba el Consorcio" name="contratoConsorcio" >
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Unidad temporal</label>
                        <input type="text" class="form-control" name="contratoUnion" placeholder="Escriba la Unidad temporal" >
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="form-label">Con</label>
                        <input type="text" class="form-control" name="contratoCon" placeholder="Escriba el Con" >
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label text-center"><b>Vigencia del contrato</b></label>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group d-flex">
                        <label class="form-label col-3">Fecha inicio</label>
                        <input type="number" class="form-control col-3 mr-2" placeholder="Dia" name="contratoDiaInicio" required>
                        <input type="text" class="form-control col-3 mr-2" placeholder="Mes" name="contratoMesInicio" required>
                        <input type="number" class="form-control col-3 mr-2" placeholder="Año" name="contratoAnoInicio" required>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group d-flex">
                        <label class="form-label col-3">Fecha Fin</label>
                        <input type="number" class="form-control col-3 mr-2" placeholder="Dia" name="contratoDiaFin" required>
                        <input type="text" class="form-control col-3 mr-2" placeholder="Mes" name="contratoMesFin" required>
                        <input type="number" class="form-control col-3 mr-2" placeholder="Año" name="contratoAnoFin" required>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label text-center"><b>Características y datos del vehículo</b></label>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label text-center">Caracteristicas</label>
                        <textarea rows="2" class="form-control" name="contratoCarateVehiculo" placeholder="Escriba las caracteristicas del vehiculo" required></textarea>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label class="form-label">Placa</label>
                        <input type="text" class="form-control" placeholder="Escriba la Placa" name="contratoPlaca" required />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="form-label">Modelo</label>
                        <input type="text" class="form-control" name="contratoModelo" placeholder="Escriba el Modelo" required />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="form-label">Marca</label>
                        <input type="text" class="form-control" name="contratoMarca" placeholder="Escriba la Marca" required />
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label class="form-label">Clase</label>
                        <input type="text" class="form-control" placeholder="Escriba la clase" name="contratoClase" required />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="form-label">Numero interno</label>
                        <input type="text" class="form-control" name="contratoNumeroInterno" placeholder="Escriba el numero interno" required />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="form-label">Numero tarjeta operacion</label>
                        <input type="text" class="form-control" name="contratoTarOperacion" placeholder="Escriba la tarjeta de operacion" required />
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label text-center"><b>Datos primer conductor</b></label>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label class="form-label">Nombre completo</label>
                        <input type="text" class="form-control" placeholder="Escriba el nombre" name="contratoConduc1Nombre" required />
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="form-label">Cedula</label>
                        <input type="number" class="form-control" name="contratoConduc1Cedula" placeholder="Escriba la cedula" required />
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="form-label">N° Licencia</label>
                        <input type="text" class="form-control" name="contratoConduc1Licencia" placeholder="Escriba la licencia" required />
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="form-label">Vigencia</label>
                        <input type="date" class="form-control" name="contratoConduc1Vigencia" placeholder="Escriba la vigencia" required />
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label text-center"><b>Datos segundo conductor</b></label>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label class="form-label">Nombre completo</label>
                        <input type="text" class="form-control" name="contratoConduc2Nombre" placeholder="Escriba el nombre"  />
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="form-label">Cedula</label>
                        <input type="number" class="form-control" name="contratoConduc2Cedula" placeholder="Escriba la cedula"  />
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="form-label">N° Licencia</label>
                        <input type="text" class="form-control" name="contratoConduc2Licencia" placeholder="Escriba la licencia"  />
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="form-label">Vigencia</label>
                        <input type="date" class="form-control" name="contratoConduc2Vigencia" placeholder="Escriba la vigencia" />
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label text-center"><b>Datos tercer conductor</b></label>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label class="form-label">Nombre completo</label>
                        <input type="text" class="form-control" name="contratoConduc3Nombre" placeholder="Escriba el nombre"  />
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="form-label">Cedula</label>
                        <input type="number" class="form-control" name="contratoConduc3Cedula" placeholder="Escriba la cedula"  />
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="form-label">N° Licencia</label>
                        <input type="text" class="form-control" name="contratoConduc3Licencia" placeholder="Escriba la licencia"  />
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="form-label">Vigencia</label>
                        <input type="date" class="form-control" name="contratoConduc3Vigencia" placeholder="Escriba la vigencia" />
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label text-center"><b>Responsable del contrato</b></label>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label class="form-label">Nombre completo</label>
                        <input type="text" class="form-control" name="contratoRespoNombre" placeholder="Escriba el nombre" required/>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="form-label">Cedula</label>
                        <input type="number" class="form-control" name="contratoRespoCedula" placeholder="Escriba la cedula" required/>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="form-label">Telefono</label>
                        <input type="text" class="form-control" name="contratoRespoTelefono" placeholder="Escriba el telefono" required/>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="form-label">Dirección</label>
                        <input type="text" class="form-control" name="contratoRespoDireccion" placeholder="Escriba la direccin" required/>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label text-center">Observaciones</label>
                        <textarea rows="2" class="form-control" name="contratoObservaciones" placeholder="Escriba las observaciones"></textarea>
                    </div>
                </div>

            </div>
        </div>
        <div class="card-footer text-center">
            <button type="submit" class="btn btn-primary btn-lg">Crear</button>
        </div>
    </form>

</div>

@endsection





