<?php

namespace App\Http\Controllers;

use App\Models\Autorizar;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AutorizarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $authorizations = DB:: select('select id_padron, Nombre, Puesto From padrones');    

        return view("Autorizaciones.index",compact('authorizations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Autorizaciones.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_padron'=>'required',
            'Nombre'=>'required',
            'Puesto'=>'required'
        ]);
        Autorizar::create($request->all());
        return redirect()->route('Autorizaciones.index')
        ->with('info','¡¡¡¡Registro Exitoso!!!!');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Autorizar  $authorizations
     * @return \Illuminate\Http\Response
     */
    public function show(Autorizar $authorizations)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Autorizar  $authorizations
     * @return \Illuminate\Http\Response
     */
    public function edit($id_padron)
    {
        $authorizations=Autorizar::findorFail($id_padron);
        return view('Autorizaciones.edit',compact('authorizations'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Autorizar  $authorizations
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id_padron)
    {
        $request->validate([
            'id_padron'=>'required',
            'Nombre'=>'required',
            'Puesto'=>'required'
        ]);
        $authorizations=Autorizar::find($id_padron);
        $authorizations->id_padron=$request->input('$id_padron');
        $authorizations->Nombre=$request->input('Nombre');
        $authorizations->Puesto=$request->input('puesto');
        $authorizations->save();

        return redirect()->route('Autorizaciones.index')
        ->with('primary','¡¡¡¡Actualizacion Exitosa!!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Autorizar  $authorizations
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_padron)
    {
        $authorizations=Autorizar::find($id_padron);
        $authorizations->delete();

        return redirect()->route("Autorizaciones.index")
        ->with('danger','¡¡¡¡Padron Eliminado!!!!');
    }
}
