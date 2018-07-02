<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use App\Reply;

class MechanicalController extends Controller
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
            'mechanicals'=> Comment::where('faculty','mechanical')->orderBy('created_at','des')->paginate(3),
            'replies' => Reply::where('faculty','mechanical')->get(),
        );
        return view('notes.bme')->with($data);
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
        $mechanical =new Comment;
        $mechanical->comment = $request->input('comment');
        $mechanical->user_id=auth()->user()->id;
        $mechanical->faculty='mechanical';
        $mechanical->save();

        return redirect('/notes/bme')->with('success','Joined the conversation');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mechanical  $mechanical
     * @return \Illuminate\Http\Response
     */
    public function show(Mechanical $mechanical)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mechanical  $mechanical
     * @return \Illuminate\Http\Response
     */
    public function edit(Mechanical $mechanical)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mechanical  $mechanical
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mechanical $mechanical)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mechanical  $mechanical
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mechanical $mechanical)
    {
        //
    }
}
