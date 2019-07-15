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
        $user = User::find($id);
        $user->name = $request('name');
        $user->email = $request('email');
        $user->age = $request('age');
        $user->save();

        Flash::warning('El usuario' .$user->name . 'ha sido creado con exito!');
        return view('admin.users.listas');
    }
    public function destroy($id){
        $user = User::find($id);
        $user->delete();

        Flash::error('El usuario' .$user->name. 'ha sido borrado');
        return view('admin.users.listas');
    }
}
