@extends('body')
@section('web')
<div style="padding: 10px; background: #F5F5F5; margin-left: 5px;">
<h3>Gestion y control de usuarios <br/>
<small>a continuacion se muestra una lista de los usuarios dentro del sistema y alli podra modificarla</small>
</h3>

<h3>Crear nuevo usuarios</h3>
<table border="1">
<tr>
    <td>Nombre de usuario</td>
    <td>Password</td>
</tr>
{{Form::open(['method'=>'post', 'url'=>'/users'])}}
    @if(Session::has('error_message'))
        <tr>
            <td colspan="2" style="background: red; color: #F5F5F5; text-align: center;">
            {{ Session::get('error_message') }}
            </td>
        </tr>
    @endif
<tr>
    <td>
    {{Form::text('usuario', Input::old('usuario'))}}
    </td>
    <td>
    {{Form::password('password')}}
    </td>
</tr>

<tr>
    <td colspan="2">
    {{Form::submit('Crear nuevo usuario ahora!')}}
    </td>
</tr>
</table>
{{Form::close()}}
<br/>
@foreach(User::get() as $user)
<table border="1">
<tr>
    <td>Nombre de usuario</td>
    <td>Password</td>
</tr>
{{Form::open(['method'=>'put', 'url'=>'/users/'.$user->id])}}
    @if(Session::has('error_message'.$user->id))
        <tr>
            <td colspan="2" style="background: red; color: #F5F5F5; text-align: center;">
            {{ Session::get('error_message'.$user->id) }}
            </td>
        </tr>
    @endif
<tr>
    <td>
    {{Form::text('usuario', Input::old('usuario', $user->usuario))}}
    </td>
    <td>
    {{Form::password('password')}}
    </td>
</tr>

<tr>
    <td colspan="2">
    {{Form::submit('Guardar: '.$user->usuario)}}


{{Form::close()}}

        {{Form::open(['method'=>'delete', 'url'=>'/users/'.$user->id])}}
            {{Form::submit('Eliminar')}}
        {{Form::close()}}
    </td>
</tr>
</table>
@endforeach


</div>
@stop