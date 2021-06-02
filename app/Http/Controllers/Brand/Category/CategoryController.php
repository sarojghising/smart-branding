<?php

namespace App\Http\Controllers\Brand\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\CategoryCreateRequest;
use App\Models\Category;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::latest()->orderByDesc('created_at')->get();

        return  view('brand.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('brand.category.edit-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryCreateRequest $request)
    {

        $data = $request->all();

        $success = Category::create($data);

         $success ?

        Toastr::success('Success','Category Added Successfully') :
        Toastr::error('Error','Sorry, There was problem while adding category...');

        return redirect()->route('brand.categories.index');



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
    public function edit($id)
    {
        $category = Category::findOrFail($id);

        return  view('brand.category.edit-create',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryCreateRequest $request, $id)
    {

        $campaign = Category::findOrFail($id);

        $data = $request->all();

        $success =  $campaign->update($data);

         $success ?

        Toastr::success('Success','Category Updated Successfully') :
        Toastr::error('Error','Sorry, There was problem while updating category...');

        return redirect()->route('brand.categories.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);

        $success = $category->delete();

         $success ?

        Toastr::success('Success','Category Deleted Successfully') :
        Toastr::error('Error','Sorry, There was problem while deleting category...');

        return redirect()->route('brand.categories.index');
    }
}
