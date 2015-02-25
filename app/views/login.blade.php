<!--
/*******************************************************************
**************     Medical Center Version 1.0.1    *****************
********************************************************************/-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bienvenido</title>

	<!--*********** cambio de hojas de estilo ***************-->
    <link rel="stylesheet" href="{{URL::to('/')}}/style.css" type="text/css">

	<link rel="shortcut icon" href={{URL::to('/')}}/esculapio.jpg">

    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" >
</head>
<html>
<body>

<table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="1"><div align="center"><img src="{{URL::to('/')}}/banner.png" alt="" width="932" height="78"></div></td>
      </tr>
    </table></td>
  </tr>
</table>
<div class="titulo">
    <div align="center" class="Estilo1"></div>
  </div>
  <br />
  <br />
  <div id="centercontent">
  {{Form::open(['method'=>'post', 'url'=>'/login'])}}
    <div align="center">
    @if(Session::has('error_message'))
        {{ Session::get('error_message') }}
    @endif
    {{Hash::make('123456')}}
      <table width="259" height="167" align="center">
        <tr>
          <td width="70" bordercolor="#333333"> <span class="Estilo10">Usuario:</span></td>
          <td width="177" bordercolor="#333333"><p>
            {{Form::text('usuario', Input::old('usuario'))}}
          </p></td>
        </tr>
        <tr>
          <td bordercolor="#F0F0F0">Clave:</td>
          <td><p>
            {{Form::password('password')}}
          </p></td>
        </tr>
        <tr>
          <td bordercolor="#F0F0F0"></td>
          <td><input name="submit" type="submit" value="Entrar" />
          <input name="Restablecer" type="reset" value="Limpiar" /></td>
        </tr>
      </table>
    </div>
  {{Form::close()}}
  <div align="center">
    <p>&nbsp;</p>
    <p>Si tienes problemas con tu usuario/clave, dirígete a un Supervisor</p>
  </div>
  </div>
    </div>
</div>
      </tr>
    </table>
    </td>
  </tr>
</table>
<body>
</html>


