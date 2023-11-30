<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class Medee extends Controller
{
    public function index() {

        $lastNews = News::orderByDesc('id')->limit(4)->get();
        return view('front-ui.index', compact('lastNews'));
    }

    public function detail(News $oneNews){

        return view('front-ui.detail', compact('oneNews'));
    }

    public function cat(Category $category){
        $catNews = News::find($category);
        return view('front-ui.category', compact('catNews'));
    }
}
