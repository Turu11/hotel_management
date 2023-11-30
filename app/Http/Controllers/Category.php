<?php

namespace App\Http\Controllers;
use App\Models\Category as ModelsCategory;

//use App\Http\Controllers\Category;

use Illuminate\Http\Request;

class Category extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = ModelsCategory::orderByDesc('id')->get();

        return view('admin-ui.category.category', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin-ui.category.category_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cat = new ModelsCategory;
        $cat->name = $request->cat_name;
        $cat->save();
        return redirect('admin/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ModelsCategory $cat)
    {
        $oneCategory = ModelsCategory::find($cat);
        return view('admin-ui.category.category_update', compact('oneCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $justCat = ModelsCategory::find($id);
        $justCat->name = $request->cat_name;
        $justCat->update();
        return redirect('admin/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ModelsCategory $category)
    {
        $category->delete();
        return redirect()->route('cat_home');
    }
}
