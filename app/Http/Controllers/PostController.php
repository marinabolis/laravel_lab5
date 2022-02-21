<?php

namespace App\Http\Controllers;
use  App\Models\Post;
use  App\Http\Requests\StorePostRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //select * from posts
        $posts=Post::all();
      
        return view("posts.index",["posts"=>$posts]); // he2raa bl object & arr 
        //return view
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //load page
       // return "mmmmmmmmm";
        return view("posts.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
       // $d=$request->description;
       //$d=$request->all();



    //    Post::create([
    //     "title"=>$request->title,
    //     "description"=>$request->description

    //    ]);



 
    // ,[
    //     'title:required'=>"title is null",    //if in problem in required print msg
    //     'description:required'=>"description is null",
    //   ]

    $post= new Post;
    $post->title=$request->title;
    $post->description=$request->description;
    $post->user_id=Auth::id();
    $post->save();
    return redirect('/posts');
      // return "done";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //select  * from posts where id=$id
       $post= Post::find($id); //fun find hta5od p.k bta3k 
       return view("posts.show",$post );
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
        $post= Post::find($id); //fun find hta5od p.k bta3k 
       return view("posts.edit",$post );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StorePostRequest $request, $id)
    {
        //
        //$input=$request->all();
        $post= Post::find($id);
        // $post->title=$input['title'];
        // $post->description=$input['description'];
        $post->title=$request->title;
        $post->description=$request->description;
        $post->save();
       //return view("posts.index");
          //return ("ok");
       //return view('welcome')->with(compact('all_data'));
        // return view("posts.index")->with(['all_data'=>$posts]);
    
      return redirect('/posts');
        //return ("done");

        //***************************************************************** */
        //no use this solution
        // $posts=Post::all();
        // return view("posts.index",["posts"=>$posts]); // he2raa bl object & arr
        //***************************************************************** */
       // return public\resources\Views\posts::make('posts.index"');
       //return make("posts.index");

       //Route::controller(array('order', 'anothercontroller'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //$post= Post::find($id);
         //Post::find($id)->delete();
        Post::destroy($id);
        return redirect('/posts');
      //return "done";
    //  $posts=Post::all();
      //return view("posts.index",["posts"=>$posts]); 
    }
}
