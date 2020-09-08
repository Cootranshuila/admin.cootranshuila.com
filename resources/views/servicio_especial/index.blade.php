@extends('layouts.app')

@section('title') Servicio Especial @endsection
@section('title_content') Servicio Especial @endsection

@section('content')

<div class="section-body">
    
    <div class="col-lg-12">
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
                                <th>Nombre</th>                                    
                                <th>Telefono</th>                                    
                                <th>Tipo</th>                                    
                                <th>Sub Tipo</th>                                    
                                <th>Estado</th>
                                <th class="text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <img src="../assets/images/xs/avatar1.jpg" class="rounded" alt="">
                                    <span class="c_name">John Smith</span>
                                </td>
                                <td>
                                    <span class="phone"><i class="fa fa-phone mr-2"></i>264-625-2583</span>
                                </td>                                   
                                <td>
                                    <span><i class="fa fa-map-marker"></i>123 6th St. Melbourne, FL 32904</span>
                                </td>
                                <td class="text-center">                                            
                                    <button type="button" class="btn btn-primary btn-sm" title="Edit"><i class="fa fa-edit"></i></button>
                                    <button type="button" class="btn btn-danger btn-sm" title="Delete"><i class="fa fa-trash-o"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="../assets/images/xs/avatar3.jpg" class="rounded" alt="">
                                    <span class="c_name">Hossein Shams</span>
                                </td>
                                <td>
                                    <span class="phone"><i class="fa fa-phone mr-2"></i>264-625-5689</span>
                                </td>                                    
                                <td>
                                    <address><i class="fa fa-map-marker"></i>44 Shirley Ave. West Chicago, IL 60185</address>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-sm" title="Edit"><i class="fa fa-edit"></i></button>
                                    <button type="button" class="btn btn-danger btn-sm" title="Delete"><i class="fa fa-trash-o"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="../assets/images/xs/avatar9.jpg" class="rounded" alt="">
                                    <span class="c_name">Frank Camly</span>
                                </td>
                                <td>
                                    <span class="phone"><i class="fa fa-phone mr-2"></i>264-625-9999</span>
                                </td>
                                <td>
                                    <address><i class="fa fa-map-marker"></i>123 6th St. Melbourne, FL 32904</address>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-sm" title="Edit"><i class="fa fa-edit"></i></button>
                                    <button type="button" class="btn btn-danger btn-sm" title="Delete"><i class="fa fa-trash-o"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="../assets/images/xs/avatar10.jpg" class="rounded" alt="">
                                    <span class="c_name">Tim Hank</span>
                                </td>
                                <td>
                                    <span class="phone"><i class="fa fa-phone mr-2"></i>264-625-1212</span>
                                </td>
                                <td>
                                    <address><i class="fa fa-map-marker"></i>70 Bowman St. South Windsor, CT 06074</address>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-sm" title="Edit"><i class="fa fa-edit"></i></button>
                                    <button type="button" class="btn btn-danger btn-sm" title="Delete"><i class="fa fa-trash-o"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
    
@endsection