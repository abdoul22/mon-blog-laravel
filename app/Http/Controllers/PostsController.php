<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;

class PostsController extends Controller
{
    //index page
    public function index() {
        //tech 1 $posts = post::where('id',5)->get();
       // tech 2 $posts = post::take(6)->get(); 
       //tech 3 $posts = post::orderBy('id','desc')->get();
       //$posts = post::orderBy('id','desc')->paginate(5); 

       //on peut aussi utiliser query builder    
       //$posts = DB::select('select * from posts');

        $posts = Post::orderBy('id','desc')->paginate(5);       
        $count = Post::count();
        return view('posts.index',compact('posts','count'));
    }
    //show page
    public function show($id){
        $post = Post::find($id);
        return view('posts.show',compact('post'));
    }
    //create post
    public function create(){
        return view('posts.create');
    }

    // store post
    public function store(Request $request){
        $request->validate([
            'title' => 'required|max:200',
            'body' => 'required|max:500'
        ]);
        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;

        $post->save();

        return redirect('/posts')->with('status','Post was created !');

    }

    //edit post form

    public function edit($id){
        $post = Post::find($id);
        $post->save();  
        return view('posts.edit',compact('post'));


    }
    public function update($id){
        $post = Post::find($id);
        return view('posts.show',compact('post'));


    }

}
