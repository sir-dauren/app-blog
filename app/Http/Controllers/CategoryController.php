<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function showCetegoryPost($id)
    {
        $category = Category::findOrFail($id);
        $categories = Category::all();

        $categoryArticles = $category->articles;
        

        return view('articles.post_category', compact('categoryArticles', 'categories'));
    }
}
