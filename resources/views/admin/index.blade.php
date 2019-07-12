@extends('layout.home');

@section('content')
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css')}}">
    <title>Plantilla básica de Bootstrap</title>

    <!-- CSS de Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">

  </head>
  <body>
    <h1>¡Hola mundo!</h1>
 
    <ul>
    	<li><a href="{route('users.listas')}"> sección de listado</a></li>
    	<a class="btn btn-success" href="{ route('users.create') }">
    Añadir usuario
</a>
    	
    	
    </ul> 


    <!-- Librería jQuery requerida por los plugins de JavaScript -->
    <script src="http://code.jquery.com/jquery.js"></script>

    <script src="js/bootstrap.min.js"></script>
    <script src="{{asset('js/app.js')}}"></script>
  </body>
</html>


@endsection