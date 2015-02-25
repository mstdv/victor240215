<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Document</title>
</head>
<body>

<h3>Reporte detallada de informe de entrada de equipos</h3>
<table cellpadding="5px" cellspacing="0px" border="1" width="100%">
<tr style="text-transform: uppercase; font-size: 13px;">
    <td>Código Dpto</td>
    <td>Dpto</td>
    <td>Quien Reporta</td>
    <td>Ficha Trabajador</td>
    <td>Correo</td>
    <td>Telefóno</td>
</tr>
<tr style="font-size: 13px;">

    <td>{{$orden->cod_departamento}}</td>
    <td>{{$orden->departamento}}</td>
    <td>{{$orden->quien_reporta}}</td>
    <td>{{$orden->ficha_trabajador}}</td>
    <td>{{$orden->correo}}</td>
    <td>{{$orden->telefono}}</td>
</tr>


<tr style="text-transform: uppercase; font-size: 13px;">
    <td>Marca</td>
    <td>Equipo</td>
    <td>Modelo</td>
    <td>Servicio</td>
    <td>Problema reportado</td>
    <td>Observaciones</td>
</tr>

<tr style="font-size: 13px;">
    <td>{{$orden->marca}}</td>
    <td>{{$orden->tipo_equipo}}</td>
    <td>{{$orden->modelo}}</td>
    <td>{{$orden->servicio}}</td>
    <td>{{$orden->problema}}</td>
    <td>{{$orden->observaciones}}</td>
</tr>

</table>

<h4>Emitido para la fecha: {{\Carbon\Carbon::now('America/Caracas')->format('Y-m-d h:m:s')}}</h4>
</body>
</html>
