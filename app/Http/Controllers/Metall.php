<?php

namespace App\Http\Controllers;

use App\Category;
use App\Event;
use App\Stock;
use App\Work;
use Illuminate\Http\Request;

class Metall extends Controller
{
    public function index() {

        return view('izdeliya-iz-metalla', [


            'categories' => Category::with('children')->where('parent_id', 0)->get()

        ]);

    }
}
