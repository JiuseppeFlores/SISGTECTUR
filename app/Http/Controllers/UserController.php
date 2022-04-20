<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserPasswordRequest;
use App\Http\Requests\UserEditRequest;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $users = User::orderBy('created_at','DESC')->paginate(6);
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

    public function update(Request $request, User $user, $type){
        /*$user = User::findOrfail($id);*/
        if($type){
            $request->validate([
                'name' => ['required', 'min:6', 'max:255'],
                'username' => [
                    'required', 'min:6', 'max:20', 'unique:users,username,' . request()->route('user')->id
                ],
                'email' => [
                    'required', 'email', 'unique:users,email,' . request()->route('user')->id,
                ]
            ]);
            $data = $request->only('username','email');
            $user->update($data);
            return redirect()->route('users.show', $user->id)
                            ->with('success', 'Usuario actualizado correctamente');
        }else{
            $request->validate([
                'password' => [
                    'required', 'min:6', 'max:255', 'confirmed'
                ]
            ]);
            $data['password'] = Hash::make($request->input('password'));
            $user->update($data);
        }
    }

    public function password(Request $request, User $user){

        if(password_verify($request->password, $user->password)){
            $password = $request->only('password');
            $data['password'] = bcrypt($password);
            $user->update($data);
            return redirect()->route('users.show', $user->id)->with('success', 'Contraseña actualizada correctamente');
        }else{
            return redirect()->route('users.show', $user->id)->with('success', 'Contraseña Incorrecta'); 
        }
     
        $data = $request->only('password');
        $data['password'] = bcrypt($request->password);
        $user->update($data);
        return redirect()->route('users.show', $user->id)->with('success', 'Contraseña actualizada correctamente');
    }

    public function destroy(User $user){
        $user->delete();
        return back()->with('success', '¡Usuario Eliminado Correctamente!');
    }
}
