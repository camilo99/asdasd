 

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    {!! Html::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css') !!}
 
    <title>Lista de usuarios</title>
    <style>
        .w-auto {
     width: 100%!important;
}
.row {
    display: flex;
     flex-wrap: wrap;
    margin-right: 0;
     margin-left: 0; 
}
    a{
        margin-left:2%;
    }
    .btn-info
    {
        margin-top:2%;
    }
    </style>

</head>
<body>
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-offset">
               <a class="btn btn-info" href="{{ route('users.create') }}"> Registrar nuevo usuario</a>
            </div>
        </div>
    </div>
    <hr>    
    <table class="table table-striped w-auto">
    <thead>
         <tr class="table-info">
             <th scope="row">ID</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Email</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        
        @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->age }}</td>
            <td>{{ $user->email }}</td>
            <td><a href="{{route('users.edit', $user->id)}}" class="btn btn-warning"><i class="fa fa-cog fa-spin"></i></a><a href="{{route('users.destroy', $user->id)}}" onclick="return confirm('¿Seguro que desea eliminarlo?');" class="btn btn-danger separed"><i class="fa fa-trash"></i></a></td>
        </tr>
    
       @endforeach
    
    </tbody>
</table>
{{ $users->links() }}
    <div class="row">
        <div class="col-md-12">
          <div class="col-md-offset-5">
            <input type=button class="btn btn-info btn-md" value=atras onclick="history.go(-1)">
    <!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal">Información</button>
        </div>  
        </div>
        
    </div>
    

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Algoritmo JS</h4>
      </div>
      <div class="modal-body">
        


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>




     <!-- Librería jQuery requerida por los plugins de JavaScript -->
    <script src="http://code.jquery.com/jquery.js"></script>

    <script src="js/bootstrap.min.js"></script>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>