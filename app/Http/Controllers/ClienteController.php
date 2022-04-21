<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publicacion;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\TipoUsuario;
use App\Models\Persona;

class ClienteController extends Controller
{
    
    public function cliente(Request $request){
        return(view('cliente.home'));
    }

    public function publicaciones(Request $request){
        $publicaciones = Publicacion::orderBy('id','DESC')->paginate(5);
        return view('cliente.publicaciones', compact('publicaciones'));
    }

    public function servicios(Request $request){
        return(view('cliente.servicios'));
    }

    public function hospedaje(Request $request){
        $hospedajes = DB::table('publication')->join('business','publication.business_id','=','business.id')
        ->orderBy('id','DESC')
        ->paginate(6)
        ->get();
        return(view('cliente.servicios.hospedaje', compact('hospedajes')));
    }

    public function transporte(Request $request){
        $transportes = Publicacion::where('business_id','2')->orderBy('id','desc')->paginate(6);
        return(view('cliente.servicios.transporte', compact('transportes')));
    }

    public function gastronomia(Request $request){
        $gastronomia = Publicacion::where('business_id','3')->orderBy('id','desc')->paginate(6);
        return(view('cliente.servicios.gastronomia', compact('gastronomia')));
    }

    public function atraccion(Request $request){
        $atraccion = Publicacion::where('business_id','4')->orderBy('id','desc')->paginate(6);
        return(view('cliente.servicios.atraccion', compact('atraccion')));
    }

    public function show_transporte(Request $request){
        $transporte = DB::select('select * from service s, transport t where s.id = t.id');
        return view('cliente.servicios.detalles.transporte', compact('transporte'));
    }

    public function perfil(){
        $usuario = User::where('id',auth()->user()->id)->first();
        $tipoUsuario = TipoUsuario::where('id',$usuario->user_type)->first();
        if(Persona::where('user_id',$usuario->id)->exists()){
            $persona = Persona::where('user_id',$usuario->id)->first();
            $sw = true;
        }else{
            $persona = "No se registro datos adicionales";
            $sw = false;
        }
        return view('cliente.perfil', compact('usuario','tipoUsuario','persona','sw'));
    }
}