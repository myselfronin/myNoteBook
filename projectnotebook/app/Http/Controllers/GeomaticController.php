<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use App\Reply;

class GeomaticController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
     {
         $this->middleware('auth',['except'=>['index','show']]);
     }


    public function index()
    {
        $data = array(
            'geomatics'=> Comment::where('faculty','geomatic')->orderBy('created_at','des')->paginate(3),
            'replies' => Reply::where('faculty','geomatic')->get(),
        );
        return view('notes.bge')->with($data);
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
        $this->validate($request,[
            'comment' =>'required|min:10'
        ]);


        //Create posts
        $geomatic =new Comment;
        $geomatic->comment = $request->input('comment');
        $geomatic->user_id=auth()->user()->id;
        $geomatic->faculty='geomatic';
        $geomatic->save();

        return redirect('/notes/bge')->with('success','Joined the conversation');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Geomatic  $geomatic
     * @return \Illuminate\Http\Response
     */
    public function show(Geomatic $geomatic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Geomatic  $geomatic
     * @return \Illuminate\Http\Response
     */
    public function edit(Geomatic $geomatic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Geomatic  $geomatic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Geomatic $geomatic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Geomatic  $geomatic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Geomatic $geomatic)
    {
        //
    }
}
