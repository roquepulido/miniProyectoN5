<?php

namespace App\Http\Controllers;

use App\Models\Clases;
use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Models\User;

class TeachersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = Teacher::all();
        return view('admin.maestros.index')
            ->with('maestros', $teachers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $materias = Clases::all();
        return view("admin.maestros.create")->with("clases", $materias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::create([
            'name' => $request->first_name . " " . $request->last_name,
            'email' => $request->email,
            'password' => ("$request->first_name")
        ]);
        $user->assignRole('teacher');

        Teacher::create(
            [
                'user_id' => $user->id,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'address' => $request->address,
                'birth_date' => $request->birth_date,
            ]
        );
        return redirect('admin-maestros')->with('status', 'Maestro Creado!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $teacher = Teacher::find($id);
        $clases = Clases::all();
        return view("admin.maestros.update")->with("maestro", $teacher)->with("clases", $clases);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = User::find($request->user_id);
        $user->email = $request->email;
        $user->save();

        $teacher = Teacher::find($request->id);
        $teacher->first_name = $request->first_name;

        $teacher->address = $request->address;
        $teacher->birth_date = $request->birth_date;

        $teacher->save();
        return redirect('admin-maestros')->with('status', 'Maestro Actualizado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teacher = Teacher::find($id);
        $user = User::find($teacher->user_id);
        $teacher->delete();
        $user->delete();
        return redirect('admin-maestros')->with('status', 'Maestro Eliminado!');
    }
}
