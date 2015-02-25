@extends('body')
@section('web')
<div style="padding: 10px; background: #F5F5F5; margin-left: 5px;">


@foreach(Orden::get() as $orden)
{{Form::open(['url'=>'/ordens/'.$orden->id, 'method'=>'put'])}}
    @if(Session::has('error_message'))

            {{ Session::get('error_message') }}

    @endif
    <ul>
    @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
     @endforeach
     </ul>

<table border="1" width="100%">
<tr style="font-size: 9px; text-transform: uppercase">
    <td>Código Dpto</td>
    <td>Dpto</td>
    <td>Quien Reporta</td>
    <td>Ficha Trabajador</td>
    <td>Correo</td>
    <td>Telefóno</td>
<tr>
<tr style="font-size: 9px; text-transform: uppercase; color: #1b5989">

    <td>{{Form::text('cod_departamento', Input::old('cod_departamento', $orden->cod_departamento))}}</td>
    <td>{{Form::text('departamento', Input::old('departamento', $orden->departamento))}}</td>
    <td>{{Form::text('quien_reporta', Input::old('quien_reporta', $orden->quien_reporta))}}</td>
    <td>{{Form::text('ficha_trabajador', Input::old('ficha_trabajador', $orden->ficha_trabajador))}}</td>
    <td>{{Form::text('correo', Input::old('correo', $orden->correo))}}</td>
    <td>{{Form::text('telefono', Input::old('telefono', $orden->telefono))}}</td>
<tr>

<tr style="font-size: 9px; text-transform: uppercase">
    <td>Marca</td>
    <td>Equipo</td>
    <td>Modelo</td>
    <td>Servicio</td>
    <td>Problema reportado</td>
    <td>Observaciones</td>
</tr>

</tr>
    <td>{{Form::text('marca', Input::old('marca', $orden->marca))}}</td>
    <td>{{Form::text('tipo_equipo', Input::old('tipo_equipo', $orden->tipo_equipo))}}</td>
    <td>{{Form::text('modelo', Input::old('modelo', $orden->modelo))}}</td>
    <td>{{Form::text('servicio', Input::old('servicio', $orden->servicio))}}</td>
    <td>{{Form::text('problema', Input::old('problema', $orden->problema))}}</td>
    <td>{{Form::text('observaciones', Input::old('observaciones', $orden->observaciones))}}</td>

</tr>

<tr style="font-size: 9px; text-transform: uppercase;">
    <td colspan="6">
    Aperturado para la fecha
    </td>
</tr>
<tr style="font-size: 9px; text-transform: uppercase;">
    <td colspan="6">
    {{$orden->created_at}}
    </td>
</tr>

<tr>
    <td colspan="12">{{Form::submit('Guardar cambios', ['style'=>'float: left; '])}}
{{Form::close()}}
        {{Form::open(['method'=>'delete', 'url'=>'/ordens/'.$orden->id])}}
            {{Form::submit('Eliminar', ['style'=>'float: left; '])}}
        {{Form::close()}}
        {{Form::open(['method'=>'get', 'url'=>'/ordens/printrepor/'.$orden->id])}}
            {{Form::submit('Imprimir', ['style'=>'float: left; '])}}
        {{Form::close()}}
</td>
</tr>
</table>

@endforeach




</div>
@stop