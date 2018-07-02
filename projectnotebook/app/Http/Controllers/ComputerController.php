<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Reply;
use App\demo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ComputerController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth',['except'=>['index','show']]);
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
            'computers'=> Comment::where('faculty','computer')->orderBy('created_at','des')->paginate(3),
            'replies' => Reply::where('faculty','computer')->get(),
        );
        return  view('notes.bct')->with($data);



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

           // $this->validate($request, [
           //     'comment' => 'required|min:10',

           // ]);


            //Create posts
            $computer = new Comment;
            $computer->comment = $request->input('comment');
            $computer->user_id = auth()->user()->id;
            $computer->faculty = 'computer';
            $computer->save();

       return redirect('/notes/bct')->with('success','Joined the conversation');
   }

    /**
     * Display the specified resource.
     *
     * @param  \App\Computer  $computer
     * @return \Illuminate\Http\Response
     */
    public function show(Computer $computer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Computer  $computer
     * @return \Illuminate\Http\Response
     */
    public function edit(Computer $computer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Computer  $computer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Computer $computer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Computer  $computer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Computer $computer)
    {
        //
    }
}
