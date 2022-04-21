<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoNegocio;
use App\Http\Requests\NegocioCreateRequest;
use App\Http\Requests\NegocioEditRequest;
use App\Models\Negocio;
use App\Models\Publicacion;
class NegocioController extends Controller
{
    public function index(){
        $negocios = Negocio::orderBy('id','DESC')->paginate(8);
        $tipoNegocio = TipoNegocio::all();
        return view('negocios.index', compact('negocios','tipoNegocio'));
    }

    public function create(){
        $tipoNegocios = TipoNegocio::all();
        return view('negocios.create', compact('tipoNegocios'));
    }

    public function store(NegocioCreateRequest $request){
        $negocio = Negocio::create($request->only('name','description','nit','email','phone','cellphone','business_type_id')+['manager_id' => auth()->user()->id,]);
        return redirect()->route('negocios.show',$negocio->id)->with('success', '¡Usuario creado correctamente!');
    }

    public function show(Negocio $negocio){
        $tipoNegocio = TipoNegocio::where('id',$negocio->business_type_id)->first();
        if(Publicacion::where('business_id',$negocio->id)->exists()){
            $sw = true;
            $publicaciones = Publicacion::where('business_id',$negocio->id)->orderBy('id','DESC')->get();
        }else{
            $sw = false;
            $publicaciones = "Sin Publicaciones";
        }
        return view('negocios.show', compact('negocio','tipoNegocio','publicaciones','sw'));
    }
     
    public function edit(Negocio $negocio){
        $tipoNegocios = TipoNegocio::all();
        return view('negocios.edit', compact('negocio','tipoNegocios'));
    }

    public function update(NegocioEditRequest $request, Negocio $negocio){
        $data = $request->only('name','description','nit','email','phone','cellphone','business_type_id');
        $negocio->update($data);
        return redirect()->route('negocios.show', $negocio->id)->with('success', 'Usuario actualizado correctamente');
    }

    public function destroy(Negocio $negocio){
        $negocio->delete();
        return back()->with('success', '¡Usuario Eliminado Correctamente!');
    }
}
