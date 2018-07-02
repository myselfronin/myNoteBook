<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use App\Reply;

class ElectronicController extends Controller
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
            'electronics'=> Comment::where('faculty','electronic')->orderBy('created_at','des')->paginate(3),
            'replies' => Reply::where('faculty','electronic')->get(),
        );
        return view('notes.bex')->with($data);
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
        $electronic =new Comment;
        $electronic->comment = $request->input('comment');
        $electronic->user_id=auth()->user()->id;
        $electronic->faculty='electronic';
        $electronic->save();

        return redirect('/notes/bex')->with('success','Joined the conversation');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Electronic  $electronic
     * @return \Illuminate\Http\Response
     */
    public function show(Electronic $electronic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Electronic  $electronic
     * @return \Illuminate\Http\Response
     */
    public function edit(Electronic $electronic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Electronic  $electronic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Electronic $electronic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Electronic  $electronic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Electronic $electronic)
    {
        //
    }
}
