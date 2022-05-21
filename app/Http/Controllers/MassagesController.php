<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Massage;

class MassagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

// -------------------API-----------------------
    public function index()
    {
        $message=Massage::get();
        return response()->json([
        'sucess'=>true,
        'message'=>'data retrived successfully',
        'data'=>$message
    ]);
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
        $message=new Massage();
        $message->name=$request->name;

        if($message->save()){
            return respose()->json(['data'=>$message,'status'=>"200",'message'=>'saved']);
        }else{
            return respose()->json(['data'=>'not found','message'=>'not saved','status'=>'400']);
        }
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
