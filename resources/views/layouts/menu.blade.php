<div id="left-sidebar" class="sidebar">
    <div class="d-flex justify-content-between brand_name">
        <h3 class="brand-name"><b>Cootranshuila</b></h3>
    </div>
    <div class="input-icon">
        <span class="input-icon-addon">
            <i class="fe fe-search"></i>
        </span>
        <input type="text" class="form-control" placeholder="Buscar...">
    </div>
    <div class="tab-content">
        <div class="tab-pane fade active show" id="all-tab">
            <nav class="sidebar-nav">
                <ul class="metismenu ci-effect-1">

                    <li class="mt-4"><a href="/"><i class="icon-home"></i><span data-hover="Dashboard">Dashboard</span></a></li>
                    <hr style="border: px solid #2a2c35; width: 94%; margin-left: 0;">

                    @if (Request::is('/'))

                        <li class="g_heading mb-2">Modulos</li>

                        @canany(['universal', 'servicio especial'])
                            <li><a href="/servicio-especial"><i class="icon-speedometer"></i><span data-hover="ServicioEspecial">Servicio Especial</span></a></li>
                        @endcanany

                        @canany(['universal', 'sanciones', 'operativos'])
                            <li><a href="/operativos"><i class="icon-notebook"></i><span data-hover="Operativos">Operativos</span></a></li>
                        @endcanany

                    @endif

                    @if (Request::is('operativos') || Request::is('operativos/*'))

                        <li class="g_heading mb-2">Operativos</li>

                        @canany(['universal', 'sanciones'])
                            <li class="{{ Request::is('operativos') ? 'active' : '' }}"><a href="/operativos"><i class="icon-doc"></i><span data-hover="OperativosEnProceso">Operativos en proceso</span></a></li>
                        @endcanany

                        @canany(['universal', 'sanciones'])
                            <li><a href="/operativos/terminados"><i class="icon-docs"></i><span data-hover="OperativosTerminados">Operativos terminados</span></a></li>
                        @endcanany

                        <li class="{{ Request::is('operativos/agregar') ? 'active' : '' }}"><a href="/operativos/agregar"><i class="fa fa-plus-square-o" style="font-size: 1.2rem;"></i><span data-hover="AgregarOperativo">Agregar Operativo</span></a></li>

                    @endif

                    @role('admin')
                        <li class="g_heading mb-2">Administrador</li>
                        <li><a href="/administrador/usuarios"><i class="icon-users"></i><span data-hover="Usuarios">Usuarios</span></a></li>
                    @endrole

                </ul>
            </nav>
        </div>
    </div>
</div>
