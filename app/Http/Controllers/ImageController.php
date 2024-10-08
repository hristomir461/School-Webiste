<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Image;
use App\Models\Post;
use Illuminate\View\View;

class ImageController extends Controller
{

    public function gallery(): View
    {
        $images = Image::latest()
            ->paginate(6);


        return view('gallery', compact('images'));
    }

    public function images(Image $image): View
    {
        $categories = $image->categories->pluck('slug')->toArray();

        $images = Image::latest()
            ->whereHas('categories', function ($query) use ($categories) {
                $query->whereIn('slug', $categories);
            })
            ->paginate(6);


        return view('images', compact('images'));
    }

}
