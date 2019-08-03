<?php

namespace App\Http\Controllers;

use App\Ubicacion;
use Illuminate\Http\Request;

class UbicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return array(
            array(
                "latitud" => 40.7127837,
                "longitud" => -74.0059413,
                "radio" => 40,
            ),
            array(
                "latitud" => -33.4377968,
                "longitud" => -70.6504451,
                "radio" => 33,
            ),
            array(
                "latitud" => -34.6075682,
                "longitud" => -58.4370894,
                "radio" => 58,
            )
        )
        ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return 'hola';
        // return array(
        //     "rut" => "4567891",
        //     "nombre" => "ANDRES",
        //     "apellido" => "ALMECIJA",
        //     "direccion" => "CIUDAD EMPRESARIAL",
        //     "fechaNacimiento" => "Apr 24, 1984 8:52:21 PM"
        // );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ubicacion  $ubicacion
     * @return \Illuminate\Http\Response
     */
    public function show(Ubicacion $ubicacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ubicacion  $ubicacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Ubicacion $ubicacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ubicacion  $ubicacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ubicacion $ubicacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ubicacion  $ubicacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ubicacion $ubicacion)
    {
        //
    }
}
