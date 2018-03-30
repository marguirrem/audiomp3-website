<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ServiceUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function login(Request $request)
    {
        if($request->isJson()){
            try{
                $data = $request->json()->all();
                $user = \App\User::where('email',$request['email'])->first();
               if($user && Hash::check($request['password'], $user->password)){
                    return response()->json($user,200);
                }
                else{
                    return response()->json(['error'=>'No Content'],204);
                }
            }catch(ModelNotFoundException $e){
                return response()->json(['error'=>'No Content'],403);
            }
                
            
        }
         return response()->json(['error'=>'No Autorizado'],401);
    }


    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->isJson()){
           
            $user = \App\User::create([
               'first_name' => $request['first_name'],
               'last_name'  => $request['last_name'],
               'username'   => $request['username'],
               'email'      => $request['email'],
               'password'   => bcrypt($request['password'])
            ]);
            return response()->json($user,201);
        }else{
            return response()->json(['error'=>'No autorizado'],401);    
        }
        return response()->json(['error'=>'No autorizado'],401);
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
        //
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
