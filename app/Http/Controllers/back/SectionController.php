<?php

namespace App\Http\Controllers\back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Section;
use App\Level;

class SectionController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sections = Section::All();
         return view('back.Section.index',compact('sections'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $levels = Level::All();
         return view('back.Section.create',compact('levels'));
         
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
            'level' => ['required'],
           
            
        ]);

          $section = new Section();
         $section->name = $request->name;
         $section->save();
         $section->Levels()->sync($request->level, false);
          return redirect('/section');
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
         $section = Section::find($id);
          $levels = Level::All();
                  return view('back.Section.edit',compact('section','levels'));

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

          $section = Section::find($id);
         $section->name = $request->name;
         $section->save();
                  $section->Levels()->sync($request->level, false);

          return redirect('/section');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $section = Section::find($id);
        $section->Levels()->detach();
         $section->delete();

          return redirect('/section');
    }
}
