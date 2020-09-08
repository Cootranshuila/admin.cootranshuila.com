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
    </style>

</head>
<body>

    <p style="text-align: center;font-weight: bold;">CONTRATO DE PRESTACION DE SERVICIOS DE TRANSPORTE TERRESTRE SUSCRITO ENTRE:</p>
    <p style="text-align: center;font-weight: bold;">No. 447</p>

    <br>
    <br>

    <p style="font-weight: bold;">CONTRATANTE: {{ $contrato->contratoContratante }}</p>
    <p style="font-weight: bold;">CONTRATISTA: COOPERATIVA DE TRANSPORTADORES DEL HUILA LIMITADA "COOTRANSHUILA"</p>

    <br>

    <p style="text-align: justify;">
        Entre los suscritos entre saber <b>MARINO CASTRO CARVAJAL</b>, mayor de edad, vecino del Municipio de Neiva (Huila), identificado con cedula de ciudadanía número 83.029.098 de Saldo Blanco (Huila) en condición de Representante Legal de la Empresa de Transporte <b>COOPERATIVA DE TRANSPORTADORES DEL HUILA LIMITADA “COOTRANSHUILA”</b>, ente social dedicado al transporte especial, turismo y escolar, sociedad legalmente construida con Nit: 891.100.299-7 domiciliada en la ciudad de Neiva (Huila), quien para los efectos del presente CONTRATO se denominara el CONTRATISTA, y de otra parte {{ $contrato->contratoRespoNombre }}, mayor de edad con C.C {{ $contrato->contratoRespoCedula }}, en condición de Representante Legal de la Empresa o representante de {{ $contrato->contratoContratante }} identificado con Nit. {{ $contrato->contratoNit3 }} - {{ $contrato->contratoNit4 }} direccion {{ $contrato->contratoRespoDireccion }}, se denominara el CONTRATANTE, hemos celebrado el presente contrato de Prestación de Servicios de Transporte de acuerdo a lo señalado en la normativa vigente, el cual se regirá por las siguientes cláusulas: <b>PRIMERA:</b> El CONTRATISTA se obliga para el contratante a prestar el servicio de Transporte Especial para TRANSPORTE PUBLICO ESPECIAL DE PERSONAS para el transporte de un grupo de personas de la siguiente forma:
    </p>

    <table>
        <thead>
            <tr>
              <th colspan="4"><b>RUTA</b></th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <td colspan="4" id="recorrido" style="padding: 15px"> {{ $contrato->contratoRecorrido }} </td>
            </tr>

            <tr>
                <td colspan="1" width="30%"><b>Placa</b></td>
                <td colspan="1" width="20%">{{ $contrato->contratoPlaca }}</td>
                <td colspan="1" width="30%"><b>Numero interno</b></td>
                <td colspan="1" width="20%">{{ $contrato->contratoNumeroInterno }}</td>
            </tr>
        </tbody>
    </table>

    <p style="text-align: justify;">
        <b>SEGUNDA:</b> El CONTRATANTE especificara las rutas, horarios y destinos a fin de programar. 
        <b>TERCERA:</b> Los vehículos del presente contrato debe cumplir con las siguientes condiciones, como: revisión tecnicomecanica, soat, pólizas de responsabilidad civil contractual y extracontractual, tarjeta de operación vigente, botiquín de primeros auxilios, herramientas básicas alistamiento excelente. 
        <b>CUARTA:</b> FRECUENCIA Y HORARIO DE OPERACIÓN: el servicio se prestara desde el lugar de concentración al lugar donde desarrolle la actividad y la programación previamente suministrada diariamente para el desplazamiento. 
        <b>QUINTA:</b> DURACION: El término de duración del contrato de transporte será a partir del {{ $contrato->contratoDiaInicio }} de {{ $contrato->contratoMesInicio }} de {{ $contrato->contratoAnoInicio }} hasta {{ $contrato->contratoDiaFin }} de {{ $contrato->contratoMesFin }} de {{ $contrato->contratoAnoFin }}. 
        <b>SEXTA:</b> OBLIGACIONES DEL CONTRATANTE: el contratante deberá cancelar oportunamente los valores establecidos en el presente contrato, previa cuenta de cobro radicada por el contratista y visto bueno del interventor del contrato. 
        <b>SEPTIMA:</b> OBLIGACIONES DEL CONTRATISTA: el contratista se obliga a cumplir con los recorridos autorizados y programados. 
        <b>OCTAVA:</b> Los conductores deberán estar debidamente afiliados a la Seguridad Social y con experiencia en la operación de los vehículos. 
        <b>NOVENA:</b> Dentro los términos de este contrato queda terminantemente prohibido transportar personas ajenas o diferentes a los mencionados. 
        <b>DECIMA:</b> Las partes convienen como cláusula Penal de conformidad con las normas legales. Esta cláusula se aplicara en todos los casos en que haya incumplido y podrá ser cobrada sin notificación para constituir en mora y sin requerimiento alguno mediante un proceso ejecutivo. <br><br>
        En constancia se firma el presente contrato por las partes, en dos ejemplares del mismo contenido, en la ciudad de Neiva, a las de de del . VALOR DEL SERVICIO: {{ $contrato->contratoValor }}, {{ $contrato->contratoValorLetra }}, FORMA DE PAGO: {{ $contrato->PagoForma }} ANTES DE INICIAR EL VIAJE.
    </p>

    <div style="display: flex;justify-content: space-around;">
        <div style="flex: 1; position: absolute;">
            <p><b>CONTRATANTE</b></p>
            <br>
            <br>

        </div>

        <div style="flex: 1; position: absolute;">
            <p><b>CONTRATISTA</b></p>
            <br>
            <br>
            
        </div>
    </div>
    
</body>
</html>