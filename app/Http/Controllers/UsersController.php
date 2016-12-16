<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Laracasts\Flash\Flash;
use App\Http\Requests\UserRequest;

class UsersController extends Controller
{
    public function index(){

    	$users = User::orderBy('id','ASC')->paginate(5);
    	return view('admin.users.index')->with('users',$users);
    }

    public function create(){

    	return view('admin.users.create');
    }

    public function store(UserRequest $request){
    	
    	$user = new User($request->all());
    	$user->password = bcrypt($request->password);
    	$user->save();
    	
    	Flash::success("Usuario ". $user->name." registrado");
    	return redirect()->route('admin.users.index');


    }

    public function show($id){

    }

    public function edit($id){

    	$user = User::find($id);
    	return view('admin.users.edit')->with('user',$user);
    }

    public function update(Request $request, $id){

    	$user = User::find($id);
    	$user->name = $request->name;
    	$user->email = $request->email;
    	$user->type = $request->type;
    	$user->save();

    	Flash::warning('El usuario '.$user->name.' ha sido editado con éxito');
    	return redirect()->route('admin.users.index');
    }

    public function destroy($id){
    	$user = User::find($id);
    	$user->delete();

    	flash('Se ha eliminado a: '.$user->name,'danger');
    	return redirect()->route('admin.users.index');
    }
}

