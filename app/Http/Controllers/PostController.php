<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function Index(){
        $posts = Post::all()->sortByDesc('created_at');
        // dd($posts);
        return  view('admin.posts.index', compact('posts'));
    }

    public function criarPost(Request $request){
        $titulo = $request->titulo;
        $conteudo = $request->conteudo;
       
        return response()->json($request);
    }
}
