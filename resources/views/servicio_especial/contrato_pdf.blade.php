<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contrato Servicio Especial PDF</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            font-size: 12px;
            font-family:Arial, Helvetica, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 10px;
            margin-top: 10px;
        }
        table th, table td {
            text-align: center;
            border: 1px solid;
        }
        table th {
            padding: 5px 20px;
            color: #5D6975;
            border-bottom: 1px solid #C1CED9;
            white-space: nowrap;
            font-weight: normal;
        }
        .saltopagina{
            page-break-after:always;
        }
    </style>

</head>
<body>

    <br><br>

    <p style="text-align: center;font-weight: bold;">CONTRATO DE PRESTACION DE SERVICIOS DE TRANSPORTE TERRESTRE SUSCRITO ENTRE:</p>
    <p style="text-align: center;font-weight: bold;">No. {{ $contrato[0]->id }}</p>

    <br>
    <br>

    <p style="font-weight: bold;">CONTRATANTE: {{ $contrato[0]->contratoContratante }}</p>
    <p style="font-weight: bold;">CONTRATISTA: COOPERATIVA DE TRANSPORTADORES DEL HUILA LIMITADA "COOTRANSHUILA"</p>

    <br>

    <p style="text-align: justify;">
        Entre los suscritos entre saber <b>MARINO CASTRO CARVAJAL</b>, mayor de edad, vecino del Municipio de Neiva (Huila), identificado con cedula de ciudadanía número 83.029.098 de Saldo Blanco (Huila) en condición de Representante Legal de la Empresa de Transporte <b>COOPERATIVA DE TRANSPORTADORES DEL HUILA LIMITADA “COOTRANSHUILA”</b>, ente social dedicado al transporte especial, turismo y escolar, sociedad legalmente construida con Nit: 891.100.299-7 domiciliada en la ciudad de Neiva (Huila), quien para los efectos del presente CONTRATO se denominara el CONTRATISTA, y de otra parte {{ $contrato[0]->contratoRespoNombre }}, mayor de edad con C.C {{ $contrato[0]->contratoRespoCedula }}, en condición de Representante Legal de la Empresa o representante de {{ $contrato[0]->contratoContratante }} identificado con Nit. {{ $contrato[0]->contratoNit3 }} - {{ $contrato[0]->contratoNit4 }} direccion {{ $contrato[0]->contratoRespoDireccion }}, se denominara el CONTRATANTE, hemos celebrado el presente contrato de Prestación de Servicios de Transporte de acuerdo a lo señalado en la normativa vigente, el cual se regirá por las siguientes cláusulas: <b>PRIMERA:</b> El CONTRATISTA se obliga para el contratante a prestar el servicio de Transporte Especial para TRANSPORTE PUBLICO ESPECIAL DE PERSONAS para el transporte de un grupo de personas de la siguiente forma:
    </p>

    <table>
        <thead>
            <tr>
              <th colspan="4"><b>RUTA</b></th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <td colspan="4" id="recorrido" style="padding: 15px"> {{ $contrato[0]->contratoRecorrido }} </td>
            </tr>

            <tr>
                <td colspan="1" width="30%"><b>Placa</b></td>
                <td colspan="1" width="20%">{{ $contrato[0]->contratoPlaca }}</td>
                <td colspan="1" width="30%"><b>Numero interno</b></td>
                <td colspan="1" width="20%">{{ $contrato[0]->contratoNumeroInterno }}</td>
            </tr>
        </tbody>
    </table>

    <p style="text-align: justify;">
        <b>SEGUNDA:</b> El CONTRATANTE especificara las rutas, horarios y destinos a fin de programar.
        <b>TERCERA:</b> Los vehículos del presente contrato debe cumplir con las siguientes condiciones, como: revisión tecnicomecanica, soat, pólizas de responsabilidad civil contractual y extracontractual, tarjeta de operación vigente, botiquín de primeros auxilios, herramientas básicas alistamiento excelente.
        <b>CUARTA:</b> FRECUENCIA Y HORARIO DE OPERACIÓN: el servicio se prestara desde el lugar de concentración al lugar donde desarrolle la actividad y la programación previamente suministrada diariamente para el desplazamiento.
        <b>QUINTA:</b> DURACION: El término de duración del contrato de transporte será a partir del {{ $contrato[0]->contratoDiaInicio }} de {{ $contrato[0]->contratoMesInicio }} de {{ $contrato[0]->contratoAnoInicio }} hasta {{ $contrato[0]->contratoDiaFin }} de {{ $contrato[0]->contratoMesFin }} de {{ $contrato[0]->contratoAnoFin }}.
        <b>SEXTA:</b> OBLIGACIONES DEL CONTRATANTE: el contratante deberá cancelar oportunamente los valores establecidos en el presente contrato, previa cuenta de cobro radicada por el contratista y visto bueno del interventor del contrato.
        <b>SEPTIMA:</b> OBLIGACIONES DEL CONTRATISTA: el contratista se obliga a cumplir con los recorridos autorizados y programados.
        <b>OCTAVA:</b> Los conductores deberán estar debidamente afiliados a la Seguridad Social y con experiencia en la operación de los vehículos.
        <b>NOVENA:</b> Dentro los términos de este contrato queda terminantemente prohibido transportar personas ajenas o diferentes a los mencionados.
        <b>DECIMA:</b> Las partes convienen como cláusula Penal de conformidad con las normas legales. Esta cláusula se aplicara en todos los casos en que haya incumplido y podrá ser cobrada sin notificación para constituir en mora y sin requerimiento alguno mediante un proceso ejecutivo. <br><br>
        En constancia se firma el presente contrato por las partes, en dos ejemplares del mismo contenido, en la ciudad de Neiva, a las de de del . VALOR DEL SERVICIO: {{ $contrato[0]->contratoValor }}, {{ $contrato[0]->contratoValorLetra }}, FORMA DE PAGO: {{ $contrato[0]->PagoForma }} ANTES DE INICIAR EL VIAJE.
    </p>

    <table style="border: none; margin-top:60px;">
        <thead style="border: none">
            <tr style="border: none">
                <th style="border: none;font-size: 12px;font-family:Arial, Helvetica, sans-serif;color: #000 !important;text-align: rigth;padding:0;">
                    <b>CONTRATANTE</b>
                </th>
                <th style="border: none;font-size: 12px;font-family:Arial, Helvetica, sans-serif;color: #000 !important;text-align: rigth;padding:0;">
                    <b>CONTRATISTA</b>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr style="border: none;">
                <td style="border: none;text-align:rigth;">
                    <br><br><br><br>
                    <b>{{ $contrato[0]->contratoRespoNombre }}</b><br>
                    <b>CC.</b> {{ $contrato[0]->contratoRespoCedula }}<br>
                    <b>Representante legal</b><br>
                    {{ $contrato[0]->contratoContratante }}<br>
                    <b>Nit.</b> {{ $contrato[0]->contratoNit3 }} - {{ $contrato[0]->contratoNit4 }}
                </td>
                <td style="border: none;text-align:rigth;">
                    <br><br><br><br>
                    <b>MARINO CASTRO CARVAJAL</b><br>
                    <b>CC.</b> 83.029.098 <br>
                    <b>Representante legal</b><br>
                    COOTRANSHUILA LTDA<br>
                    <b>Nit.</b> 891100299 - 7
                </td>
            </tr>
        </tbody>
    </table>

    <div clas='saltopagina'></div>

    <table class="table">
        <tbody>
            <tr>
                <td style="border: none"><img width="230" src="{{ public_path() }}/assets/images/servicio-especial/logo1.png" alt=""></td>
                <td style="border: none"><img width="90" src="{{ public_path() }}/assets/images/servicio-especial/logo1aux.jpg" alt=""></td>
                <td style="border: none"><img width="190" src="{{ public_path() }}/assets/images/servicio-especial/logo.jpg" alt=""></td>
            </tr>
        </tbody>
    </table>

    <p style="text-align: center;font-weight: bold;">FORMATO ÚNICO DE EXTRACTO DEL CONTRATO DEL SERVICIO PÚBLICO DE TRANSPORTE TERRESTRE AUTOMOTOR ESPECIAL</p>
    <p style="text-align: center;font-weight: bold;">No: 441025001 {{ $contrato[0]->contratoAno }} {{ $contrato[0]->id }} 0001</p>

    <br>

    <p style="font-size: 11.5px !important;"><b>RAZÓN SOCIAL DE LA EMPRESA DE TRANSPORTE ESPECIAL: COOPERATIVA DE TRANSPORTADORES DEL HUILA LTDA</b></p>
	<p><b>Nit: 891100299 - 7</b></p>
	<p><b>CONTRATO Nº: {{ $contrato[0]->id }}</b></p>
	<p><b>CONTRATANTE: {{ $contrato[0]->contratoContratante }}</b></p>
	<p><b>NIT/CC: {{ $contrato[0]->contratoNit3 }} - {{ $contrato[0]->contratoNit4 }}</b></p>
	<p><b>OBJETO CONTRATO: {{ $contrato[0]->contratoObjetivo }}</b></p>
	<p><b>ORIGEN-DESTINO: {{ $contrato[0]->contratoOrigen }} - {{ $contrato[0]->contratoDestino }}</b></p>
    <p><b>CONVENIO DE COLABORACIÓN: </b></p>

    <br>

    <p style="text-align: center;font-weight: bold;">VIGENCIA DEL CONTRATO</p>

    <table class="table">
        <tbody>
            <tr>
                <td style="padding: 5px;"><b>FECHA INICIAL</b></td>
                <td style="padding: 5px;"><b>DIA: </b>{{ $contrato[0]->contratoDiaInicio }}</td>
                <td style="padding: 5px;"><b>MES: </b>{{ $contrato[0]->contratoMesInicio }}</td>
                <td style="padding: 5px;"><b>AÑO: </b>{{ $contrato[0]->contratoAnoInicio }}</td>
            </tr>
            <tr>
                <td style="padding: 5px;"><b>FECHA DE VENCIMIENTO</b></td>
                <td style="padding: 5px;"><b>DIA: </b>{{ $contrato[0]->contratoDiaFin }}</td>
                <td style="padding: 5px;"><b>MES: </b>{{ $contrato[0]->contratoMesFin }}</td>
                <td style="padding: 5px;"><b>AÑO: </b>{{ $contrato[0]->contratoAnoFin }}</td>
            </tr>
        </tbody>
    </table>

    <p style="text-align: center;font-weight: bold;">CARACTERÍSTICAS DEL VEHÍCULO</p>

    <table class="table">
        <tbody>
            <tr>
                <td style="padding: 3px;" colspan="1"><b>PLACA: </b>{{ $contrato[0]->contratoPlaca }}</td>
                <td style="padding: 3px;" colspan="1"><b>MODELO: </b>{{ $contrato[0]->contratoModelo }}</td>
                <td style="padding: 3px;" colspan="2"><b>MARCA: </b>{{ $contrato[0]->contratoMarca }}</td>
                <td style="padding: 3px;" colspan="2"><b>CLASE: </b>{{ $contrato[0]->contratoClase }}</td>
            </tr>
            <tr>
                <td style="padding: 3px;" colspan="3"><b>NÚMERO INTERNO: </b><br>{{ $contrato[0]->contratoNumeroInterno }}</td>
                <td style="padding: 3px;" colspan="3"><b>NÚMERO TARJETA DE OPERACIÓN: </b><br>{{ $contrato[0]->contratoTarOperacion }}</td>
            </tr>
            <tr>
                <td style="padding: 3px; background:#ccc;" colspan="1"><b>DATOS DEL CONDUCTOR 1 </b></td>
                <td style="padding: 3px;" colspan="2"><b>NOMBRES Y APELLIDOS </b><br>{{ $contrato[0]->contratoConduc1Nombre }}</td>
                <td style="padding: 3px;" colspan="1"><b>Nº DE IDENTIFICACIÓN </b><br>{{ $contrato[0]->contratoConduc1Cedula }}</td>
                <td style="padding: 3px;" colspan="1"><b>NºLICENCIA CONDUCCIÓN </b><br>{{ $contrato[0]->contratoConduc1Licencia }}</td>
                <td style="padding: 3px;" colspan="1"><b>VIGENCIA </b><br>{{ $contrato[0]->contratoConduc1Vigencia }}</td>
            </tr>
            <tr>
                <td style="padding: 3px; background:#ccc;" colspan="1"><b>DATOS DEL CONDUCTOR 2 </b></td>
                <td style="padding: 3px;" colspan="2"><b>NOMBRES Y APELLIDOS </b><br>{{ $contrato[0]->contratoConduc2Nombre }}</td>
                <td style="padding: 3px;" colspan="1"><b>Nº DE IDENTIFICACIÓN </b><br>{{ $contrato[0]->contratoConduc2Cedula }}</td>
                <td style="padding: 3px;" colspan="1"><b>NºLICENCIA CONDUCCIÓN </b><br>{{ $contrato[0]->contratoConduc2Licencia }}</td>
                <td style="padding: 3px;" colspan="1"><b>VIGENCIA </b><br>{{ $contrato[0]->contratoConduc2Vigencia }}</td>
            </tr>
            <tr>
                <td style="padding: 3px; background:#ccc;" colspan="1"><b>DATOS DEL CONDUCTOR 3 </b></td>
                <td style="padding: 3px;" colspan="2"><b>NOMBRES Y APELLIDOS </b><br>{{ $contrato[0]->contratoConduc3Nombre }}</td>
                <td style="padding: 3px;" colspan="1"><b>Nº DE IDENTIFICACIÓN </b><br>{{ $contrato[0]->contratoConduc3Cedula }}</td>
                <td style="padding: 3px;" colspan="1"><b>NºLICENCIA CONDUCCIÓN </b><br>{{ $contrato[0]->contratoConduc3Licencia }}</td>
                <td style="padding: 3px;" colspan="1"><b>VIGENCIA </b><br>{{ $contrato[0]->contratoConduc3Vigencia }}</td>
            </tr>
            <tr>
                <td style="padding: 3px; background:#ccc;" colspan="1"><b>RESPONSABLE DEL CONTRATANTE </b></td>
                <td style="padding: 3px;" colspan="2"><b>NOMBRES Y APELLIDOS </b><br>{{ $contrato[0]->contratoRespoNombre }}</td>
                <td style="padding: 3px;" colspan="1"><b>Nº DE IDENTIFICACIÓN </b><br>{{ $contrato[0]->contratoRespoCedula }}</td>
                <td style="padding: 3px;" colspan="1"><b>DIRECCIÓN </b><br>{{ $contrato[0]->contratoRespoDireccion }}</td>
                <td style="padding: 3px;" colspan="1"><b>TELÉFONO </b><br>{{ $contrato[0]->contratoRespoTelefono }}</td>
            </tr>
            <tr>
                <td style="padding: 3px;" colspan="2"><b>VIGILAGO </b><br><br><img width="180px" height="70px" src="{{ public_path() }}/assets/images/servicio-especial/logo3.jpg" alt=""></td>
                <td style="padding: 3px;" colspan="2"><b>NEIVA,  AVENIDA 26 Nº 4 - 82<br>TELÉFONO: (057) 8756368 - 8756365<br><br><u>gerencia@cootranshuila.com</u><br><u>turismo@cootranshuila.com</u><br><u>www.cootranshuila.com</u></b></td>
                <td style="padding: 3px;" colspan="2"><b><br><br><br><br><br><br><br>FIRMA Y SELLO</b></td>
            </tr>
        </tbody>
    </table>

    <div clas='saltopagina' style="page-break-after:always !important;"></div>

    <br><br>

    <p style="text-align: center;font-weight: bold;">INSTRUCTIVO PARA LA DETERMINACIÓN DEL NÚMERO CONSECUTIVO DEL FORMATO ÚNICO DE EXTRACTO DEL CONTRATO - FUEC</p>

    <br><br>

    <p style="text-align: justify;">El Formato Único de Extracto del Contrato - FUEC estará constituido por los siguientes números:</p>

    <p style="text-align: justify;">a) Los tres primeros dígitos de izquierda a derecha corresponderán al código de la Dirección Territorial que otorgó la habilitación o de aquella a la cual se hubiese trasladado la empresa de Servicio Público de Transporte Terrestre Automotor Especial;
    </p>

    <br>

    <table class="table">
        <tbody>
            <tr>
                <td style="padding: 5px; text-align: left" colspan="2">Antioquia-Chocó</td>
                <td style="padding: 5px;" align="center" colspan="1">305</td>
                <td style="padding: 5px; text-align: left" colspan="2">Huila-Caquetá </td>
                <td style="padding: 5px;" align="center" colspan="1">441</td>
            </tr>
            <tr>
                <td style="padding: 5px; text-align: left" colspan="2">Atlántico</td>
                <td style="padding: 5px;" align="center" colspan="1">208</td>
                <td style="padding: 5px; text-align: left" colspan="2">Magdalena</td>
                <td style="padding: 5px;" align="center" colspan="1">247</td>
            </tr>
            <tr>
                <td style="padding: 5px; text-align: left" colspan="2">Bolívar-San Andrés y Providencia</td>
                <td style="padding: 5px;" align="center" colspan="1">213</td>
                <td style="padding: 5px; text-align: left" colspan="2">Meta-Vaupés-Vichada</td>
                <td style="padding: 5px;" align="center" colspan="1">550</td>
            </tr>
            <tr>
                <td style="padding: 5px; text-align: left" colspan="2">Boyacá-Casanare </td>
                <td style="padding: 5px;" align="center" colspan="1">415</td>
                <td style="padding: 5px; text-align: left" colspan="2">Nariño-Putumayo </td>
                <td style="padding: 5px;" align="center" colspan="1">352</td>
            </tr>
            <tr>
                <td style="padding: 5px; text-align: left" colspan="2">Caldas</td>
                <td style="padding: 5px;" align="center" colspan="1">317</td>
                <td style="padding: 5px; text-align: left" colspan="2">N/Santander-Arauca </td>
                <td style="padding: 5px;" align="center" colspan="1">454</td>
            </tr>
            <tr>
                <td style="padding: 5px; text-align: left" colspan="2">Cauca</td>
                <td style="padding: 5px;" align="center" colspan="1">319</td>
                <td style="padding: 5px; text-align: left" colspan="2">Quindío</td>
                <td style="padding: 5px;" align="center" colspan="1">363</td>
            </tr>
            <tr>
                <td style="padding: 5px; text-align: left" colspan="2">Cesar</td>
                <td style="padding: 5px;" align="center" colspan="1">220</td>
                <td style="padding: 5px; text-align: left" colspan="2">Risaralda</td>
                <td style="padding: 5px;" align="center" colspan="1">366</td>
            </tr>
            <tr>
                <td style="padding: 5px; text-align: left" colspan="2">Córdoba-Sucre</td>
                <td style="padding: 5px;" align="center" colspan="1">223</td>
                <td style="padding: 5px; text-align: left" colspan="2">Santander</td>
                <td style="padding: 5px;" align="center" colspan="1">468</td>
            </tr>
            <tr>
                <td style="padding: 5px; text-align: left" colspan="2">Cundinamarca</td>
                <td style="padding: 5px;" align="center" colspan="1">425</td>
                <td style="padding: 5px; text-align: left" colspan="2">Tolima</td>
                <td style="padding: 5px;" align="center" colspan="1">473</td>
            </tr>
            <tr>
                <td style="padding: 5px; text-align: left" colspan="2">Guajira</td>
                <td style="padding: 5px;" align="center" colspan="1">241</td>
                <td style="padding: 5px; text-align: left" colspan="2">Valle del Cauca</td>
                <td style="padding: 5px;" align="center" colspan="1">376</td>
            </tr>
        </tbody>
    </table>

    <br>

    <p style="text-align: justify;">b) Los cuatro dígitos siguientes señalarán el número de resolución mediante la cual se otorgó la habilitación de la Empresa. En caso que la resolución no tenga estos dígitos, los faltantes serán completados con ceros a la izquierda;
    </p>

    <p style="text-align: justify;">c) Los dos siguientes dígitos, corresponderán a los dos últimos del año en que la empresa fue habilitada;</p>

    <p style="text-align: justify;">d) A continuación, cuatro dígitos que corresponderán al año en el que se expide el extracto del contrato;</p>

    <p style="text-align: justify;">e) Posteriormente, cuatro dígitos que identifican el número del contrato. La numeración debe ser consecutiva, establecida por cada empresa y continuará con la numeración dada a los contratos de prestación del servicio celebrados con anterioridad a la expedición de la presente Resolución para el transporte de estudiantes, empleados, turistas, usuarios del servicio de salud y grupo específico de usuarios.
    </p>

    <p style="text-align: justify;">f) Finalmente, los cuatro últimos dígitos corresponderán a los cuatro dígitos del número consecutivo del extracto de contrato de la empresa que se expida para la ejecución de cada contrato. En el evento, que el numero consecutivo del extracto de contrato de la empresa supere los cuatro dígitos, se tomarán los últimos cuatro dígitos del consecutivo.
    </p>

    <br><br><br><br><br><br><br>

    @if (isset($contrato[0]->codeQR))
        <div style="width:100%;text-align:center !important;">
            <img src="{{ public_path('assets/images/qr/'.$contrato[0]->codeQR) }}"  style="text-align: justify;margin-bottom:0;" width="100px" />
            <p style="text-align: justify;color:#cccccc;font-size:10px;margin-top:0;"><b>Escanea el codigo QR</b></p>
        </div>
    @endif

</body>
</html>
