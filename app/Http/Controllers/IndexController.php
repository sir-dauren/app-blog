<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $posts = Article::all();

        return view('main.index', compact('posts'));
    }

}
