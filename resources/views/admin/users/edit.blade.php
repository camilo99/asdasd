<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>editar persona</title>
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

       {!! Form::open(['route' => 'users.update', 'method' => 'PUT']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name', $user->name, ['class' => 'form-control', 'placeholder' => 'Nombre completo', 'required'])!!}
        </div>
        <div class="form-group">
            {!! Form::label('email', 'Correo electronico') !!}
            {!! Form::email('email', $user->email, ['class' => 'form-control', 'placeholder' => 'example@gmail.com', 'required'])!!}
        </div>
         <div class="form-group">
            {!! Form::label('age', 'edad')!!}
            {!! Form::text('age', $user->age, ['class' => 'form-control', 'placeholder' => 'escriba su edad'])!!}
        </div> 
        <div class="form-group">
            {!! Form::submit('Actualizar', ['class'=>'btn btn-primary'])!!}
        </div>
        
    {!! Form::close() !!}
</body>
</html>