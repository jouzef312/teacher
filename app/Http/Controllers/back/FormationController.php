<?php

namespace App\Http\Controllers\back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Teacher;
use App\Institut;
use App\Formation;
class FormationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $teachers = Teacher::All();
        $instituts = Institut::All();
         $formations = Formation::All();
         return view('back.Formation.index',compact('formations','instituts','teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          $teachers = Teacher::All();
        $instituts = Institut::All();
        return view('back.Formation.create',compact('instituts','teachers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
             $this->validate($request,[
            'name' => ['required', 'max:255'],
            'date' => ['required'],
            'teacher' => ['required'],
            'institut' => ['required'],
            
        ]);
            $formation = new Formation();
            $formation->name = $request->name;
            $formation->date = $request->date;
            $formation->institut_id = $request->institut;
            $formation->teacher_id = $request->teacher;
            $formation->save();
             return redirect('/formation');
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
                    $formation = Formation::find($id);
 $teachers = Teacher::All();
        $instituts = Institut::All();
         return view('back.Formation.edit',compact('formation','instituts','teachers'));
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
            $this->validate($request,[
            'name' => ['required', 'max:255'],
            'date' => ['required'],
            'teacher' => ['required'],
            'institut' => ['required'],
            
        ]);
            $formation = Formation::find($id);
            $formation->name = $request->name;
            $formation->date = $request->date;
            $formation->institut_id = $request->institut;
            $formation->teacher_id = $request->teacher;
            $formation->save();
             return redirect('/formation');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     $formation = Formation::find($id);
     $formation->delete();
             return redirect('/formation');
    }
}
