<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\escuela;

class EscuelaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $escuela = Esculea::all();
        return $escuela;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $escuela = new Escuela();
        $escuela->nombre = $request->nombre;
        $escuela->codigo = $request->codigo;
        $escuela->topolicencia = $request->topolicencia;
        $escuela->uso = $request->uso;
        $escuela->precio = $request->precio;
        $escuela->incremento = $request->incremento;
        $escuela->total = $request->total;

        $escuela->save();

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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $escuela = Escuela::findOrFail($request->id);
        $escuela->nombre = $request->nombre;
        $escuela->codigo = $request->codigo;
        $escuela->topolicencia = $request->topolicencia;
        $escuela->uso = $request->uso;
        $escuela->precio = $request->precio;
        $escuela->incremento = $request->incremento;
        $escuela->total = $request->total;

        $escuela->save();

        return $escuela;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $escuela = Escuela::destroy($request->id);
        return $escuela;
    }
}
