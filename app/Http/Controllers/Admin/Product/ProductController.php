<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\ProductService;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = ProductService::with('category')->latest()->orderByDesc('created_at','id')->get();

        return view('admin.product.index',compact('products'));

    }


    
    public function destroy($id)
    {
        $product = ProductService::findOrFail($id);

        $success = $product->delete();

         $success ?

        Toastr::success('Success','Product Deleted Successfully') :
        Toastr::error('Error','Sorry, There was problem while deleting product...');

        return redirect()->back();
    }
}
