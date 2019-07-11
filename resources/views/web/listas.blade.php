<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css')}}">
    {{!!Html::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css')!!}}
 
	<title>Lista de personas en la base de datos</title>
</head>
<body>
	
	<table class="table table-responsive table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>

        @foreach($datos as $persona)
        <tr>
            <td>{$persona->id}</td>
            <td>{$persona->nombre}</td>
            <td>{$persona->edad}</td>
            <td>{$persona->email}</td>
        </tr>
       @endforeach
    </tbody>
</table>



	 <!-- Librería jQuery requerida por los plugins de JavaScript -->
    <script src="http://code.jquery.com/jquery.js"></script>

    <script src="js/bootstrap.min.js"></script>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>