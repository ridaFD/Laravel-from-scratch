<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function show($post) {

        $posts = [
            'my-first-post' => 'Hello, this is my first blog post',
            'my-second-post' => 'now I am getting the hang of this blogging thing'
        ];
    
        return view('post', [
            'post' => $posts[$post]
        ]);
    }
}
