<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function Index(){
        $posts = Post::all();
        // dd($posts);
        return  view('admin.posts.index', compact('posts'));
    }
}
