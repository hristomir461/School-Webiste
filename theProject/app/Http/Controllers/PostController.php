<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Image;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{

    public function welcome(): View
    {
        $posts = Post::latest()
            ->filter(request(['category', 'search']))
            ->paginate(2);
        $categories = Category::all();
        $images = Image::all();

        return view('welcome', compact('posts', 'categories', 'images'));
    }

    public function details(Post $post): View
    {
        return view('details', ['post' => $post]);
    }

}
