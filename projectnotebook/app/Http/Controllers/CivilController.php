<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use App\Reply;

class CivilController extends Controller
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
            'civils'=> Comment::where('faculty','civil')->orderBy('created_at','des')->paginate(3),
            'replies' => Reply::where('faculty','civil')->get(),
        );
        return view('notes.bce')->with($data);
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
        $civil =new Comment;
        $civil->comment = $request->input('comment');
        $civil->user_id=auth()->user()->id;
        $civil->faculty='civil';
        $civil->save();

        return redirect('/notes/bce')->with('success','Joined the conversation');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Civil  $civil
     * @return \Illuminate\Http\Response
     */
    public function show(Civil $civil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Civil  $civil
     * @return \Illuminate\Http\Response
     */
    public function edit(Civil $civil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Civil  $civil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Civil $civil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Civil  $civil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Civil $civil)
    {
        //
    }
}
