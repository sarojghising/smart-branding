<?php

namespace App\Http\Controllers\Admin\Brand;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\PostSelection;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {

        $brands = Brand::latest()->orderByDesc('created_at', 'id')->get();

        return view('admin.brand.index', compact('brands'));
    }



    public function show($id)
    {
        $brand = Brand::findOrFail($id);

        $post_selection = PostSelection::with(['influencer','campaign','productService'])->where('brand_id', $brand->id)->get();

         return  view('admin.brand.show',compact('brand','post_selection'));


    }


    public function destroy($id)
    {
        $brand = Brand::findOrFail($id);

        $success = $brand->delete();

        $success ?

            Toastr::success('Success', 'Brand Deleted Successfully') :
            Toastr::error('Error', 'Sorry, There was problem while deleting brand...');

        return redirect()->back();
    }



    public function notifyBrand($id)
    {
        $brand = Brand::findOrFail($id);

        dd($brand);
    }




    public function rejectedBrand($id)
    {
        $brand = Brand::findOrFail($id);


        dd($brand);

    }
}
