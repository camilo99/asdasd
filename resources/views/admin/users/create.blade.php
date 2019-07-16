<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>añadir personas</title>
	<style>
		input[type=text]:focus {
  background-color: lightblue;
}
		.header {
    color: #36A0FF;
    font-size: 27px;
    padding: 10px;
}

.bigicon {
    font-size: 35px;
    color: #36A0FF;
}
	</style>
</head>
 <body> 

    {!! Form::open(['route' => 'users.store', 'method' => 'POST']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre completo', 'required'])!!}
        </div>
        <div class="form-group">
            {!! Form::label('email', 'Correo electronico') !!}
            {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'example@gmail.com', 'required'])!!}
        </div>
         <div class="form-group">
            {!! Form::label('age', 'edad')!!}
            {!! Form::text('age', null, ['class' => 'form-control', 'placeholder' => 'escriba su edad'])!!}
        </div> 
        <div class="form-group">
            {!! Form::submit('Registrar', ['class'=>'btn btn-primary'])!!}
            <input type=button class="btn btn-info btn-md" value=atras onclick="history.go(-1)">
        </div>
        
    {!! Form::close() !!}
</body>
</html>