<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            'posts' => Post::latest()->filter(request(['search', 'category']))->with('category', 'user')->get(),
            'categories' => Category::all(),
            'currentCategory' => Category::firstWhere('slug', request('category')),
        ]);
    }

    /**
     * @param Post $post
     */
    public function view(Post $post)
    {
        // Route-model binding, when we type-hint 'Post' in this function, it tries to find a Post using binding key 'id'
        // For tweaking the key, see Post->getRouteKeyName()
        return view('post', [
            'post' => $post,
        ]);
    }
}
