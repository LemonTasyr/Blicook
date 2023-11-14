<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        $title = 'All Posts';
        if(request('category')){
            $category = category::firstWhere('slug', request('category'));
            $title = 'Posts in: ' . $category->name;
        }
        if(request('author')){
            $user = User::firstWhere('username', request('author'));
            $title = 'Posts by: ' . $user->name;        
        }

        return view('posts', [
            "title" => $title,
            "active" => 'posts',
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single Post",
            "active" => 'posts',
            "post" => $post
        ]);
    }
}
