<?php

namespace App\Http\Controllers\back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Teacher;
use App\Classe;
use App\Emploit;
use App\Section;
use App\Level;

class EmploitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       $sections = Section::All();
        $levels = Level::All();
          $classe = Classe::All();
 $teachers = Teacher::All();
  
   $emplois = Emploit::All();

         return view('back.Emploit.create',compact('classe','teachers','sections','levels','emplois'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sections = Section::All();
        $levels = Level::All();
          $classe = Classe::All();
 $teachers = Teacher::All();
  
   $emplois = Emploit::All();

         return view('back.Emploit.create',compact('classe','teachers','sections','levels','emplois'));
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
            'teacher' => ['required'],
            'class' => ['required'],
            'day' => ['required'],
            'start' => ['required'],
            'end' => ['required'],
            
        ]);

        $emploi = new Emploit();
        if(Carbon::parse($request->start)->format('H:i:s') > Carbon::parse($request->end)->format('H:i:s') ){
  return back();
        }
$emplois = Emploit::All();
foreach ($emplois as $key ) {
if(($key->teacher_id == $request->teacher AND $key->day == $request->day) OR ($key->class_id == $request->class AND $key->day == $request->day)){

    if((Carbon::parse($request->start)->format('H:i:s') >= Carbon::parse($key->start)->format('H:i:s') ) AND (Carbon::parse($request->start)->format('H:i:s') <= Carbon::parse($key->end)->format('H:i:s'))){
      
       if((Carbon::parse($request->end)->format('H:i:s') >= Carbon::parse($key->start)->format('H:i:s') ) AND (Carbon::parse($request->end)->format('H:i:s') <= Carbon::parse($key->end)->format('H:i:s'))){
         return back();
      
    }
    }
}
}
 
 $classe = Classe::find($request->class);

 
   $section = Section::find($classe->section_id);
        $level = Level::find($classe->level_id);
      
        $emploi->classe = $level->name.$section->name.$classe->name;
        $emploi->teacher_id = $request->teacher;
        $emploi->class_id = $request->class;
        $emploi->day = $request->day;
        $emploi->start = $request->start;
        $emploi->end = $request->end;
        $emploi->color = $request->color;
    
        $emploi->save();
         return back();

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
    public function update(Request $request, $id)
    {
         $this->validate($request,[
          
            'classe' => ['required'],
            'daye' => ['required'],
            'start_time' => ['required'],
            'finish_time' => ['required'],
             'starter' => ['required'],
            'ende' => ['required'],
            
        ]);



      if(Carbon::parse($request->start_time)->format('H:i:s') > Carbon::parse($request->finish_time)->format('H:i:s') ){
  return back();
        }

        $emploi = Emploit::where('day',$request->daye)
                    ->where('start',$request->starter)
                    ->where('end',$request->ende)
                    ->where('teacher_id',$id)
                    ->first();
$emplois = Emploit::where('id','!=',$emploi->id)
                    
                    ->get();




foreach ($emplois as $key ) {
if(($key->teacher_id == $id AND $key->day == $request->daye) OR ($key->class_id == $emploi->class_id AND $key->day == $request->daye)){

    if((Carbon::parse($request->start_time)->format('H:i:s') >= Carbon::parse($key->start)->format('H:i:s') ) AND (Carbon::parse($request->start_time)->format('H:i:s') <= Carbon::parse($key->end)->format('H:i:s'))){
      
       if((Carbon::parse($request->finish_time)->format('H:i:s') >= Carbon::parse($key->start)->format('H:i:s') ) AND (Carbon::parse($request->finish_time)->format('H:i:s') <= Carbon::parse($key->end)->format('H:i:s'))){
         return back();
      
    }
    }
}
}



 $emploi->start = $request->start_time;
        $emploi->end = $request->finish_time;
      
    
        $emploi->save();
         return back();



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
