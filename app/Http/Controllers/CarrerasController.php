<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCarrerasRequest;
use App\Http\Requests\UpdateCarrerasRequest;
use App\Models\Carreras;

class CarrerasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carreras = Carreras::all();
        return $carreras;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($request)
    {
        $carrera = new Carreras;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCarrerasRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCarrerasRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Carreras  $carreras
     * @return \Illuminate\Http\Response
     */
    public function show(Carreras $carreras)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Carreras  $carreras
     * @return \Illuminate\Http\Response
     */
    public function edit(Carreras $carreras)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCarrerasRequest  $request
     * @param  \App\Models\Carreras  $carreras
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCarrerasRequest $request, Carreras $carreras)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Carreras  $carreras
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carreras $carreras)
    {
        //
    }
}
