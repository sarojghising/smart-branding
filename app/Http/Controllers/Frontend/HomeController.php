<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Influencer;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $influencers = Influencer::latest()->take(4)->orderByDesc('created_at','id')->get();
        return view('frontend.index',compact('influencers'));
    }
}
