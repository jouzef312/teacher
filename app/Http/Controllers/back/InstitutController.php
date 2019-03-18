<?php

namespace App\Http\Controllers\back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Institut;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image as InterventionImage;

class InstitutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $instituts = Institut::All();
                return view('back.Institut.index',compact('instituts'));
 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
           return view('back.Institut.create');
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
            'name'=>'required',
            'email' => 'required',
            'adresse' => 'required',
            'telephone' => 'required',
            'site' => 'required',
            'fax' => 'required',
            ]);
  $path = Storage::disk('images')->put('', $request->file('file'));
    // Save thumb
    $img = InterventionImage::make($request->file('file'))->widen(100);
    Storage::disk('thumbs')->put($path, $img->encode());

    $institut = new Institut();
    $institut->name = $request->name;
    $institut->adresse = $request->adresse;
    $institut->email = $request->email;
    $institut->telephone = $request->telephone;
    $institut->site = $request->site;
    $institut->fax = $request->fax;
    $institut->file = $path;
    $institut->save();
              return redirect('/institut');



       


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
          $institut = Institut::find($id);
                return view('back.Institut.edit',compact('institut'));
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
            'site' => 'required',
            'fax' => 'required',
            ]);
  // $path = Storage::disk('images')->put('', $request->file('file'));
  //   // Save thumb
  //   $img = InterventionImage::make($request->file('file'))->widen(100);
  //   Storage::disk('thumbs')->put($path, $img->encode());

    $institut =  Institut::find($id);
    $institut->name = $request->name;
    $institut->adresse = $request->adresse;
    $institut->email = $request->email;
    $institut->telephone = $request->telephone;
    $institut->site = $request->site;
    $institut->fax = $request->fax;
  //  $institut->file = $path;
    $institut->save();
              return redirect('/institut');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $institut =  Institut::find($id);
          $institut->delete();
          return redirect('/institut');

    }
}
