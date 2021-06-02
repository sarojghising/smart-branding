<?php

namespace App\Http\Controllers\Brand;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductService\ProductServiceRequest;
use App\Models\Category;
use App\Models\ProductService;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProductServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('brand.product.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::latest()->orderByDesc('created_at')->get();
        return view('brand.product._edit-create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductServiceRequest $request)
    {
        $data = $request->all();

        if ($data['video_link'] == null ||  !isset($data['image'])) {

              $success = ProductService::create($data);

              $success ?

             Toastr::success('Success','Product Added Successfully') :
             Toastr::error('Error','Sorry, There was problem while adding product...');

             return redirect()->back();
        }


      $data['image'] =  $this->uploadImage($data['image'],'product','/app/public/images/product/');

      $data['video_link'] = $data['video_link'] ?? null;

      $success = ProductService::create($data);

         $success ?

        Toastr::success('Success','Product Added Successfully') :
        Toastr::error('Error','Sorry, There was problem while adding product...');

        return redirect()->back();

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
      /**
     * @param $image
     * @param $imageFieldName
     * @param $path
     * @return string
     */
    public function uploadImage($image, $imageFieldName, $path)
    {
        $extension = $image->getClientOriginalExtension();

        $filename = $imageFieldName . '-' . Carbon::now()->timestamp . '.' . $extension;

        $image->move(storage_path($path), $filename);

        return $filename;
    }

}
