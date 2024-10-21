<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use PhpParser\Node\Expr\FuncCall;

class PostController extends Controller
{
    // Show all data from the DB
    public function index()
    {
        $postFromDB = Post::all();
        //dd($postFromDB);

        return view("posts.index", ['posts' => $postFromDB]);
    }
    // Show Single Post
    public function show(Post $post)
    {
        // // first Solution
        // $singlPost = Post::find($post);
        // if ($singlPost === null) {
        //     return "Not Found";
        // } else
        //     return view('show', ['singlePost' => $singlPost]);
        //=======================
        // Other Solution
        //$singlePost = Post::findOrFail($post);
        // this gonna search in db about the key if it doesn't exist it will throw exception and will stop the page with 404
        return view('posts.show', ['singlePost' => $post]);
    }
    // Redirect to create new post page
    public function create()
    {
        $users = User::all();
        return view('posts.create', ['users' => $users]);
    }
    // Store the data from create new post
    public function store()
    {

        //$data = request()->all(); //retrive all data from the form
        $title = request()->title; // title is the name of the input field in html
        $description = request()->description;
        // first way to insert data into DB but you have to solve MassAssignmentException in Post Model
        // Post::create([
        //     'title' => $title,
        //     'description' => $description
        // ]);

        // Second way to insert data into DB without fixing MassAssignmentException
        $post = new Post();
        $post->title = request()->title;
        $post->description = request()->description;

        $post->user_id = request()->user_id;

        $post->save();

        return redirect(route('posts.index'));
        // or
        // return redirect()->route('posts.index);
    }
    // redirect to form to edit post
    public function edit(Post $post)
    {
        //$singlePost = Post::findOrFail($post);

        $users = User::all();
        return view('posts.edit', ['singlePost' => $post, 'users' => $users]);
    }
    // update the post in database and redirect to the posts page
    public function update(Request $request, Post $post,User $user )
    {
        //$singlePost = Post::findOrFail($post);
        $post->title = $request->title;
        $post->description = $request->description;
        $post->user_id = $request->user_id;
        $post->save();
        return redirect()->route('posts.index');
    }
    // Delete posts
    public function destroy(Post $post)
    {
        //$singlePost = Post::findOrFail($post);
        $post->delete();
        return redirect()->route('posts.index');
    }
}
