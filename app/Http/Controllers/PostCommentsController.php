<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostCommentsController extends Controller
{
    // save a comment to the given post
    public function store(Post $post) //  Request $request
    {
        // validation
        request() -> validate([
            'body' => 'required'
        ]);

        // add a comment to the given post
        $post -> comments() -> create([
            'user_id' => request() -> user() -> id,     //$request -> user() -> id,
            'body' => request('body')                   //$request -> input('body')
        ]);
        return back();
    }
}
