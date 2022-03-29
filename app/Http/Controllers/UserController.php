<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserEditRequest;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $users = User::orderBy('id','ASC')->paginate(5);
        return view('users.index', compact('users'));
    }

    public function create(){
        return view('users.create');
    }

    public function store(UserCreateRequest $request){
        $user = User::create($request->only('name','username','email')+['password' => bcrypt($request->input('password')),]);
        return redirect()->route('users.show',$user->id)->with('success', '¡Usuario creado correctamente!');
    }

    public function show(User $user){
        /* $user = User::findOrfail($id); */
        /* dd($user); */
        return view('users.show', compact('user'));
    }

    public function edit(User $user){
        return view('users.edit', compact('user'));
    }

    public function update(UserEditRequest $request, User $user){
        /*$user = User::findOrfail($id);*/
        $data = $request->only('name','username','email');
        $password = $request->input('password');
         if($password)
            $data['password']=bcrypt($password);
        $user->update($data);
        return redirect()->route('users.show', $user->id)->with('success', 'Usuario actualizado correctamente');
    }

    public function destroy(User $user){
        $user->delete();
        return back()->with('success', '¡Usuario Eliminado Correctamente!');
    }
}
