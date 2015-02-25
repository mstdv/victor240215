@extends('body')
@section('web')
<div style="padding: 10px; background: #F5F5F5; margin-left: 5px;">
<h3>Gestion y control de ordenes</h3>

<a>Crear nueva orden</a>
<br/>
    @if(Session::has('error_message'))

            {{ Session::get('error_message') }}

    @endif
    <ul>
    @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
     @endforeach
     </ul>
{{Form::open(['url'=>'/ordens', 'method'=>'post'])}}
<table width="100%" border="1">
      <tr>
        <td>Código Gerencia/Dpto:</td>
        <td>
          <label for="textfield"></label>
          {{Form::text('coddepartamento', Input::old('coddepartamento'))}}
     </td>
      </tr>
      <tr>
        <td>Gerencia/Dpto:</td>
        <td>
          <label for="textfield2"></label>
          {{Form::text('departamento', Input::old('departamento'))}}
       </td>
      </tr>
      <tr>
        <td>Quien Reporta:</td>
        <td>
          <label for="textfield3"></label>
          {{Form::text('quienreporta', Input::old('quienreporta'))}}
       </td>
      </tr>
      <tr>
        <td>Ficha Trabajador:</td>
        <td>
          <label for="textfield4"></label>
          {{Form::text('fichatrabajador', Input::old('fichatrabajador'))}}
      </td>
      </tr>
      <tr>
        <td>Correo:</td>
        <td>
          <label for="textfield5"></label>
          {{Form::text('correo', Input::old('correo'))}}
       </td>
      </tr>
      <tr>
        <td>Telefóno:</td>
        <td>
          <label for="textfield6"></label>
          {{Form::text('telefono', Input::old('telefono'))}}
      </td>
      </tr>
    </table>

    <table width="100%" border="1">
      <tr>
        <td width="213">Marca:<label for="textfield7"></label>
            {{Form::text('marca', Input::old('marca'))}}
          </td>
        <td width="286">Tipo de Equipo:<label for="textfield8"></label>
          {{Form::text('tipoequipo', Input::old('tipoequipo'))}}
          </td>
        <td width="224">Modelo:<label for="textfield9"></label>
            {{Form::text('modelo', Input::old('modelo'))}}
          </td>
        <td width="281">Servicio:<label for="textfield10"></label>
            {{Form::text('servicio', Input::old('servicio'))}}
      </tr>
    </table>
    <table width="100%" border="1">
      <tr>
        <td>Problema reportado:<label for="textfield11"></label>
            {{Form::text('problema', Input::old('problema'))}}
          </td>
        <td>Observaciones:<label for="textfield12"></label>
            {{Form::text('observaciones', Input::old('observaciones'))}}
          </td>
      </tr>
    </table>
    {{Form::submit('Guardar datos')}}
{{Form::close()}}
</div>
@stop