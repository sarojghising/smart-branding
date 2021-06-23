<?php

namespace App\Http\Controllers\Brand;

use App\Http\Controllers\Controller;
use App\Models\PostSelection;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function review($id)
    {
        

        $review = PostSelection::with(['influencer','campaign','productService'])->findOrFail($id);

        return view('brand.review.index',compact('review'));
    }

    public function store($id)
    {
        $post_selection = PostSelection::with(['influencer','campaign','productService'])->findOrFail($id);

        return view('brand.review.Campaign_submitted',compact('post_selection'));
    }
}
