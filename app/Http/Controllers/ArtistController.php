<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtistController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    $artists = \App\Artist::all();
    return view('artist.index',compact('artists'));
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {

    return view('artist.create');
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */


  public function store(Request $request)
  {
    $validatedData = $request->validate([
      'name' => 'required|unique:artists|max:255',
      'bio' => 'required|min:5',
    ]);

    $photo = 'user_blank.png';
    if($request->hasFile('photo')){
      $photo = $request->file('photo')->store('public');
    }
    $artist = \App\Artist::create([
      'name' => $request['name'],
      'photo' => $photo,
      'bio' => $request['bio']
    ]);
    return redirect('artists')->with('message','Artista creado con exito!');
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
    return view('artist.show');
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
    return view('artist.edit');
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
    //
    return redirect('artist.index');
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
    return redirect('artist.index');
  }
}
