<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use App\Reply;

class ElectricalController extends Controller
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
            'electricals'=> Comment::where('faculty','electrical')->orderBy('created_at','des')->paginate(3),
            'replies' => Reply::where('faculty','electrical')->get(),
        );
        return view('notes.bel')->with($data);
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
        $electrical =new Comment;
        $electrical->comment = $request->input('comment');
        $electrical->user_id=auth()->user()->id;
        $electrical->faculty='electrical';
        $electrical->save();

        return redirect('/notes/bel')->with('success','Joined the conversation');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Electrical  $electrical
     * @return \Illuminate\Http\Response
     */
    public function show(Electrical $electrical)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Electrical  $electrical
     * @return \Illuminate\Http\Response
     */
    public function edit(Electrical $electrical)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Electrical  $electrical
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Electrical $electrical)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Electrical  $electrical
     * @return \Illuminate\Http\Response
     */
    public function destroy(Electrical $electrical)
    {
        //
    }
}
