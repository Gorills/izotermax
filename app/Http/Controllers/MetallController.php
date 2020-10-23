<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class MetallController extends Controller
{
    public function metall($slug) {

        $category = Category::where('slug', $slug)->first();

        return view('category', [

            'category' => $category,
            'categories' => $category->get()


        ]);

    }


}
