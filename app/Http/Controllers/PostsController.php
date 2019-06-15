<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{

    //validate user for login
    public function __construct(){
        $this->middleware('auth');
    }

    //create page for posts
    public function create(){
    	return view('posts.create');
    }

    //save post
    public function store(){
        //validate post data from user
    	$data = request()->validate([
    		'caption' => 'required',
    		'image' => ['required', 'image'],
    	]);

        //save instance image path
        $imagePath = request('image')->store('uploads', 'public');

        //authenticate user before creating posts and save the post
        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'image' => $imagePath,
        ]);

        //redirect to authenticated user's profile
    	return redirect('/profile/' . auth()->user()->id);
    }
}
