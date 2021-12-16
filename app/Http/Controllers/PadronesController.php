<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Schema;
use App\Models\Padron;
use Illuminate\Http\Request;

class PadronesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $padrones = Padron::select('padrones.id_padron','padrones.Nombre','padrones.Puesto')
        ->orberby('padrones.id_padron','ASC')
        ->simplePaginate(5);
        return view("Autorizaciones.index",compact('padrones'));
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
        Padron::create($request->all());
        return redirect() -> route('Autorizaciones.index')
        -> with('info','¡¡¡¡Registro Exitoso del Padron!!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Padron  $padron
     * @return \Illuminate\Http\Response
     */
    public function show(Padron $padron)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Padron  $padron
     * @return \Illuminate\Http\Response
     */
    public function edit(Padron $id_padron)
    {
        $padrones=Padron::findorFail($id_padron);
        return view("Autorizaciones.edit",compact('padrones'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Padron  $padron
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id_padron)
    {
        $request->validate([
            'id_padron'=>'required',
            'Nombre'=>'required',
            'Puesto'=>'required'
        ]);
        $padrones= Padron::find($id_padron);
        $padrones->Nombre=$request->input('Nombre');
        $padrones->Puesto=$request->input('Puesto');
        $padrones->save();
        return redirect() -> route('Autorizaciones.index')
        ->with('primary','¡¡¡¡Actualizacion Exitosa del Padron!!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Padron  $padron
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_padron)
    {
        $padrones= Padron::find($id_padron);
        $padrones->delete();
        return redirect()-> route("Autorizaciones.index")
        ->with('primary','¡¡¡¡Eliminacion Exitosa del Padron!!!!');
    }
}
