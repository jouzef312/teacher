<?php

namespace App\Http\Controllers\back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Annee;

class AnneeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Annees = Annee::All();
         return view('back.Annee.index',compact('Annees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('back.Annee.create');
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
            'start' => ['required'],
            'end' => ['required']
            
        ]);

         $annee = new Annee();
         $annee->name = $request->name;
         $annee->Start = $request->start;
         $annee->End = $request->end;
         $annee->save();
          return redirect('/annee');


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
        $annee = Annee::find($id);
         return view('back.Annee.edit',compact('annee'));
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
            'start' => ['required'],
            'end' => ['required']
            
        ]);

         $annee = Annee::find($id);
         $annee->name = $request->name;
         $annee->Start = $request->start;
         $annee->End = $request->end;
         $annee->save();
          return redirect('/annee');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $annee = Annee::find($id);
        $annee->delete();
          return redirect('/annee');
    }
}
