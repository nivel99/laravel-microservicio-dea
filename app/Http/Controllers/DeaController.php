<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dea;

class DeaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Dea::all();
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
            'dea_nombrecompleto' => 'required',
            'dea_nombreubicacion' => 'required',
            'dea_direccionubicacion' => 'required',
            'dea_codigopostal' => 'required',
            'dea_ciudadmunicipio' => 'required',
            'dea_departamento' => 'required',
            'dea_tipoinstalacion' => 'required',
            'dea_tipodeclaracion' => 'required',
            'dea_tipoespacio' => 'required',
            'dea_numserie' => 'required',
            'dea_modelo' => 'required',
            'dea_marca' => 'required',
            'dea_importadordistribuidor' => 'required',
            'dea_desclugarubicacion' => 'required',
            'dea_gps' => 'required',
            'dea_otros' => 'required',
            'dea_fecha' => 'required',
            'dea_documentopersonalcertificado' => 'required',
            'dea_nombresapellidospersonalcertificado' => 'required',
            'dea_entidadcertificadora' => 'required',
            'dea_fechacertificacion' => 'required',
            'dea_firma' => 'required',
            'dea_ciudadpersonal' => 'required',
            'dea_fechapersonal' => 'required',
            'dea_cantidad' => 'required',
            'dea_docidentificacion' => 'required'
        ]);
        $dea = Dea::create($validatedData);
        return response()->json($dea, 201);
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
        return Dea::findOrFail($id);
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
    }
}
