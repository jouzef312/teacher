<?php

namespace App\Http\Controllers\back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Section;
Use App\Classe;
use App\Level;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classe = Classe::All();
        $sections = Section::All();
        $levels = Level::All();
                 return view('back.Class.index',compact('classe','levels','sections'));

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sections = Section::All();
         return view('back.Class.create',compact('sections'));

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
            'section' => ['required'],
            'level' => ['required'],
           
            
        ]);
        $classe = Classe::All();
        $sections = Section::All();
        foreach ($classe as $key) {
           if($key->name == $request->name AND $key->section_id = $request->section){
            return back();


           }
        }

         $class = new Classe();
         $class->name = $request->name;
         $class->section_id = $request->section;
         $class->level_id = $request->level;
         $class->save();
                   return redirect('/class');



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

        $sections = Section::All();
        $class = Classe::find($id);
         return view('back.Class.edit',compact('sections','class'));
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
           
            
        ]);


        $class = Classe::find($id);
         $class->name = $request->name;
         $class->section_id = $request->section;
         $class->level_id = $request->level;
         $class->save();
                   return redirect('/class');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $class = Classe::find($id);
        $class->delete();
        return redirect('/class');

    }
}
