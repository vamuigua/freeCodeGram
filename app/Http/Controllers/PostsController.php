<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

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

        //save instance of image to uploads path
        $imagePath = request('image')->store('uploads', 'public');

        //resize the image
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200);
        $image->save();

        //authenticate user before creating posts and save the post
        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'image' => $imagePath,
        ]);

        //redirect to authenticated user's profile
    	return redirect('/profile/' . auth()->user()->id);
    }
}
