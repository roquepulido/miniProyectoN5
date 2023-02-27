<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCarrerasRequest;
use App\Http\Requests\UpdateCarrerasRequest;
use App\Models\Carreras;
use App\Models\Clases;
use Illuminate\Http\Request;

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
        return view("admin.carreras.index")->with("carreras", $carreras);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $materias = Clases::all();
        return view("admin.carreras.create")->with("materias", $materias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCarrerasRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Carreras::create([
            "name" => $request->name,
            "description" => $request->description,

        ]);
        return redirect('admin-carreras')->with('status', 'Carrera Creada!');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Carreras  $carreras
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $carrera = Carreras::find($id);
        return view("admin.carreras.update")->with('carrera', $carrera);
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
    public function update(Request $request)
    {
        $carrera = Carreras::find($request->id);

        $carrera->name = $request->name;
        $carrera->description = $request->description;
        $carrera->save();
        return redirect('admin-carreras')->with('status', 'Carrera Actializada!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Carreras  $carreras
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $carrera = Carreras::find($id);
        $carrera->delete();
        return redirect('admin-carreras')->with('status', 'Carrera Borrada!');
    }
}
