<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Usuariooperador;

class UsuariooperadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Usuariooperador::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'dea_gps' => 'required',
            'dea_fecha' => 'required',
            'dea_documentopersonalcertificado' => 'required',
            'dea_nombresapellidospersonalcertificado' => 'required',
            'dea_entidadcertificadora' => 'required',
            'dea_fechacertificacion' => 'required',
            'dea_firma' => 'required',
            'dea_ciudadpersonal' => 'required',
            'dea_fechapersonal' => 'required',
        ]);

        $usuariooperador = Usuariooperador::create($validatedData);
        return response()->json($usuariooperador, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return Usuariooperador::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $item = Usuariooperador::find($id);
        $item->update($request->all());
        return $item;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        return Usuariooperador::destroy($id);
    }
}
