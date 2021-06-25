<?php

namespace App\Http\Controllers\Influencer\Brand;

use App\Http\Controllers\Controller;
use App\Models\PostSelection;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function listOfBrand()
    {
        $selected_brand_list = PostSelection::with(['brand', 'productService', 'campaign', 'payment','influencer'])
            ->where('influencer_id', auth()->guard('influencer')->user()->id)
            ->get();

        return view('influencer.brand.brands',compact('selected_brand_list'));
    }
}
