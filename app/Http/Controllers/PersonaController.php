<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Laracasts\Flash\Flash;


class PersonaController extends Controller
{
    public $timestaps = false;
    public function index(){
    	$users = User::orderBy('id','ASC')->paginate(10);
         return view('admin.users.listas')->with('users', $users);
    }
    public function create(){
            return view('admin.users.create'); 
    }
    public function store(Request $request){
        $user = new User($request->all());
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->age = $request->get('age');
        $user->save();


          return view('admin.users.create');
    }

    public function show($id){

    }
    public function edit($id){
          $user = User::find($id);
          return view('admin.users.edit')->with('user', $user);
    }
    public function update(Request $request, $id){

          // Creamos un nuevo objeto para nuestro nuevo usuario
        $user = User::find($id);
        
        // Si el usuario no existe entonces lanzamos un error 404 :(
        if (is_null ($user))
        {
            App::abort(404);
        }
        
        // Obtenemos la data enviada por el usuario
        $data = Input::all();
        
        // Revisamos si la data es válido
        if ($user->isValid($data))
        {
            // Si la data es valida se la asignamos al usuario
            $user->fill($data);
            // Guardamos el usuario
            $user->save();
            // Y Devolvemos una redirección a la acción show para mostrar el usuario
            return Redirect::route('admin.users.listas', array($user->id));



        }
        else
        {
            // En caso de error regresa a la acción edit con los datos y los errores encontrados
            return Redirect::route('admin.users.edit', $user->id)->withInput()->withErrors($user->errors);
        }
            // $user = User::find($id);
        // $user->name = $request('name');
        // $user->email = $request('email');
        // $user->age = $request('age');
        // $user->save();

        // Flash::warning('El usuario' .$user->name . 'ha sido creado con exito!');
        // return view('admin.users.listas');
    }
    public function destroy($id){
        $user = User::find($id);
        $user->delete();

        Flash::error('El usuario' .$user->name. 'ha sido borrado');
        return view('admin.users.listas');
    }
}
