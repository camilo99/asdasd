<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonaController extends Controller
{
    public function index(){
    	 $datos = User::all();
    }
    public function create(){
    		return view('web.create');  
    }
    public function store(Request $request){
    	
    	        $datos = new User();
       
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->age = $request->get('age');
     
        if($user->save()) {
            return redirect('persona')->with('status', 'El usuario fue adicionado con exito!');            
        }

    	return "usuario registrado";
    }
    public function show($id){

    }
    public function edit($id){

    }
}
