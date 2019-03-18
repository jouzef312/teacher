<?php

namespace App\Http\Controllers\back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Visite;
use App\Teacher;
use App\Institut;

class VisiteController extends Controller
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
         $visites = Visite::All();
         return view('back.Visite.index',compact('teachers','instituts','visites'));
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
        return view('back.Visite.create',compact('teachers','instituts'));
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
            $visite = new Visite();
            $visite->name = $request->name;
            $visite->date = $request->date;
            $visite->institut_id = $request->institut;
            $visite->teacher_id = $request->teacher;
            $visite->save();
             return redirect('/visite');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
 $visite = Visite::find($id);

  $teachers = Teacher::All();
        $instituts = Institut::All();
         return view('back.Visite.edit',compact('instituts','teachers','visite'));
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
             $visite = Visite::find($id);
            $visite->name = $request->name;
            $visite->date = $request->date;
            $visite->institut_id = $request->institut;
            $visite->teacher_id = $request->teacher;
            $visite->save();
             return redirect('/visite');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            $visite = Visite::find($id);
            $visite->delete();
                   return redirect('/visite');  //
    }
}
