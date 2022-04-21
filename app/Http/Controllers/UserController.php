<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserPasswordRequest;
use App\Http\Requests\UserEditRequest;
use App\Http\Requests\UserPersonaRequest;
use App\Models\User;
use App\Models\Persona;
use App\Models\TipoUsuario;
use Carbon\Carbon;
use DB;
class UserController extends Controller
{
    public function index(){
        $users = User::orderBy('created_at','DESC')->paginate(6);
        return view('users.index', compact('users'));
    }

    public function create(){
        $tipoUsuario = DB::table('user_types')->get();
        return view('users.create', compact('tipoUsuario'));
    }

    public function store(Request $request){
        
        if($request->datos_adicionales == "1"){
            $request->validate([
                'username' => 'required | min:6 | max:50 | unique:users',
                'email' => 'required | email | unique:users',
                'password' => 'required | min:8 | confirmed',
                'user_type' => 'required',
                'ci' => 'numeric | required | unique:people',
                'name' => 'max:50 | required',
                'last_name' => 'max:20 | required',
                'mothers_last_name' => 'max:20 | required',
                'date_birth' => 'date | required',
                'cellphone' => 'numeric',
                'phone' => 'numeric',
            ]);
            $user = User::create($request->only('name','username','email','user_type')+['password' => bcrypt($request->input('password')),]);
            //$dateBirth = Carbon::parse
            $people = Persona::create($request->only('ci','name','last_name','mothers_last_name','date_birth','phone','cellphone')+['user_id' => $user->id,]);
        }else{
            $request->validate([
                'username' => 'required | min:6 | max:50 | unique:users',
                'email' => 'required | email | unique:users',
                'password' => 'required | min:8 | confirmed',
                'user_type' => 'required',
            ]);
            $user = User::create($request->only('name','username','email','user_type')+['password' => bcrypt($request->input('password')),]);
        }
        return redirect()->route('users.show',$user->id)->with('success', '¡Usuario creado correctamente!');
    }

    public function show(User $user){
        $sw = true;
        $user->user_type = TipoUsuario::select('name')->where('id',$user->user_type)->first();
        $user->created_at = Carbon::parse($user->created_at)->format('d-m-Y');
        if(Persona::where('user_id',$user->id)->exists()){
            $persona = DB::table('people')->where('user_id',$user->id)->first();
            $persona->date_birth = Carbon::parse($persona->date_birth)->format('d-m-Y');
        }else{
            $persona = "Sin Datos Adicionales";
            $sw = false;
        }
        return view('users.show', compact('user','persona','sw'));
    }

    public function edit(User $user){
        $tipoUsuario = DB::table('user_types')->get();
        if(Persona::where('user_id',$user->id)->exists()){
            $persona = DB::table('people')->where('user_id',$user->id)->first();
            $persona->date_birth = Carbon::parse($persona->date_birth)->format('d-m-Y');
            $exist = "0";
        }else{
            $persona = false;
            $exist = "1";
        }
        return view('users.edit', compact('user','tipoUsuario','persona','exist'));
    }

    public function update(Request $request, User $user, Persona $persona){
        $request->validate([
            'user_type' => ['required'],
            'username' => [
                'required', 'min:6', 'max:20', 'unique:users,username,' . request()->route('user')->id
            ],
            'email' => [
                'required', 'email', 'unique:users,email,' . request()->route('user')->id,
            ]
        ]);
        $data = $request->only('user_type','username','email');
        $user->update($data);
        if($request->datos_adicionales == "1"){
            $request->validate([
                'ci' => 'numeric | required',
                'name' => 'max:50 | required',
                'last_name' => 'max:20 | required',
                'mothers_last_name' => 'max:20 | required',
                'date_birth' => 'date | required',
                'cellphone' => 'exclude_if:cellphone,"" | numeric',
                'phone' => 'exclude_if:phone,"" | numeric',
            ]);
            $dataP = $request->only('ci','name','last_name','mothers_last_name','date_birth','cellphone','phone');
            if(Persona::where('user_id',$user->id)->exists()){
                $persona = Persona::findOrFail($user->id);
                $persona->update($dataP);
            }else{
                $persona = Persona::create($request->only('ci','name','last_name','mothers_last_name','date_birth','phone','cellphone')+['user_id' => $user->id,]);
            }
        }
        return redirect()->route('users.show',$user->id)->with('success', 'Usuario actualizado correctamente');
    }
    public function destroy(User $user){
        $user->delete();
        return back()->with('success', '¡Usuario Eliminado Correctamente!');
    }
}
