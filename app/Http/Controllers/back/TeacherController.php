<?php

namespace App\Http\Controllers\back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Teacher;
use App\Institut;
use App\Annee;
use App\Emploit;
use App\Classe;
use App\Section;
use App\Level;


class TeacherController extends Controller
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
         $annees = Annee::All();
         return view('back.Teacher.index',compact('teachers','instituts','annees'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $instituts = Institut::All();
         $annees = Annee::All();
         return view('back.Teacher.create',compact('instituts','annees'));    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'email' => 'required',
            'adresse' => 'required',
            'telephone' => 'required',
            'cin' => 'required',
            'in' => 'required',
            'prenom' => 'required',
            'diplome' => 'required',
            'institut' => 'required',
            'annee' => 'required',
            'naissance' => 'required',
            ]);

        $teacher = new Teacher();
        $teacher->name = $request->name;
        $teacher->email = $request->email;
        $teacher->adresse = $request->adresse;
        $teacher->telephone = $request->telephone;
        $teacher->cin = $request->cin;
        $teacher->prenom = $request->prenom;
        $teacher->naissance = $request->naissance;
        $teacher->diplome = $request->diplome;
        $teacher->institut_id = $request->institut;
        $teacher->annee_id = $request->annee;
        $teacher->institut_origin = $request->in;
        $teacher->save();
        return redirect('/teacher');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $teacher = Teacher::find($id);
        $instituts = Institut::All();
         $annees = Annee::All();
         $emplois = Emploit::All();
         return view('back.Teacher.show',compact('teacher','instituts','annees','emplois'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teacher = Teacher::find($id);
      $instituts = Institut::All();
         $annees = Annee::All();
          $emplois = Emploit::All();
           $sections = Section::All();
        $levels = Level::All();
          $classe = Classe::All();
         return view('back.Teacher.edit',compact('teacher','instituts','annees','emplois','classe','sections','levels'));    

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
            'name'=>'required',
            'email' => 'required',
            'adresse' => 'required',
            'telephone' => 'required',
            'cin' => 'required',
            'in' => 'required',
            'prenom' => 'required',
            'diplome' => 'required',
            'institut' => 'required',
            'annee' => 'required',
            'naissance' => 'required',

            ]);

         $teacher = Teacher::find($id);
        $teacher->name = $request->name;
        $teacher->email = $request->email;
        $teacher->adresse = $request->adresse;
        $teacher->telephone = $request->telephone;
        $teacher->cin = $request->cin;
        $teacher->prenom = $request->prenom;
        $teacher->naissance = $request->naissance;
        $teacher->diplome = $request->diplome;
        $teacher->institut_id = $request->institut;
        $teacher->annee_id = $request->annee;
        $teacher->institut_origin = $request->in;
        $teacher->save();
        return redirect('/teacher');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $teacher = Teacher::find($id);
         $teacher->delete();
          return redirect('/teacher');


    }
}
