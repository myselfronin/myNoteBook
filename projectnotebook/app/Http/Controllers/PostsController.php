<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Reply;
use App\Comment;
use Illuminate\Support\Facades\DB;
class PostsController extends Controller
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
        $posts= Post::orderBy('created_at','des')->paginate(5);
        return view('posts.index')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->has('form1'))
        { //validate a post
            $this->validate($request, [
                'title' => 'required',
                'body' => 'required',
                'cover_image' => 'image|nullable|max:1999',
            ]);

            //Handle File Upload
            if ($request->hasFile('cover_image')) {
                //get filname with the extension

                $filenamewithExt = $request->file('cover_image')->getClientOriginalName();

                //get just gile name

                $filename = pathinfo($filenamewithExt, PATHINFO_FILENAME);

                // GET just ext

                $extension = $request->file('cover_image')->getClientOriginalExtension();

                //filename to store

                $fileNameToStore = $filename . '_' . time() . '.' . $extension;
                //upload image
                $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
            } else {
                $fileNameToStore = 'noimage.jpg';
            }


            //Create posts
            $post = new Post;
            $post->title = $request->input('title');
            $post->body = $request->input('body');
            $post->user_id = auth()->user()->id;
            $post->cover_image = $fileNameToStore;
            $post->save();
            return redirect('/posts')->with('success','post created');
        }
        if($request->has('form2')) {
            $comment =new Comment;
            $comment->comment = $request->input('body');
            $comment->user_id=auth()->user()->id;
            $comment->post_id=$request->input('post_id');
            $comment->faculty='post';
            $comment->save();
            return back();
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

        $data = array(
            'post' => Post::find($id),
            'comments'=> Comment::where('faculty', 'post')->get(),
            'replies' => Reply::where('faculty','post')->get(),
        );
        return view('posts.show')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $post=Post::find($id);
        if(auth()->user()->id !==$post->user_id){
            return redirect('/posts')->with('error','Unauthorized page');
        }
        return view('posts.edit')->with('post',$post);
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
            'title' =>'required',
            'body' => 'required',

        ]);


        //Create posts
        $post=Post::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();

        return redirect('/posts')->with('success','post updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        if(auth()->user()->id !==$post->user_id){
            return redirect('/posts')->with('error','Unauthorized page');
        }

        $post->delete();
        return redirect('/posts')->with('success','Post removed');
    }
}
