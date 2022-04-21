<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publicacion;
use App\Models\Negocio;

class PublicacionController extends Controller
{
    public function index(){
        $publicaciones = Publicacion::orderBy('id','ASC')->paginate(2);
        return view('publicaciones.index', compact('publicaciones'));
    }

    public function create(Negocio $negocio){
        return view('publicaciones.create', compact('negocio'));
    }

    public function store(Request $request, Negocio $negocio){
        $publicacion = Publicacion::create($request->only('title','description')+['business_id' => $negocio->id,]);
        return redirect()->route('negocios.show',$negocio->id)->with('success', '¡Publicación creada correctamente!');
    }

    public function show(Publicacion $publicacion){
        return view('publicaciones.show', compact('publicacion'));
    }
     
    public function edit(Publicacion $publicacion){
        return view('publicaciones.edit', compact('publicacion'));
    }

    public function update(Request $request, Publicacion $publicacion){
        $data = $request->only('title','description','busines_id');
        $publicacion->update($data);
        return redirect()->route('publicaciones.show', $publicacion->id)->with('success', 'Publicacion  actualizado correctamente');
    }

    public function destroy(Publicacion $publicacion){
        $publicacion->delete();
        return back()->with('success', 'Publicacion Eliminado Correctamente!');
    }
}
