<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = DB::table('posts')->get();

        return view('posts.index', compact('posts'));
    }

    public function show($id){
        $post = Post::find($id);
        return view('posts.show', compact('post'));
        // $product = Product::find($id);
        // return view('products.show', compact('product'));
    }

}