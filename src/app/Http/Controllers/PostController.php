<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        //$post = Post::count();
        $posts = Post::get();
        //$post = count($post);
        // dd($posts);
        return view("posts.index",compact('posts'));
    }
}
