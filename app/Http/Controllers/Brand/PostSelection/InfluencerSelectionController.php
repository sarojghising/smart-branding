<?php

namespace App\Http\Controllers\Brand\PostSelection;

use App\Http\Controllers\Controller;
use App\Models\Influencer;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class InfluencerSelectionController extends Controller
{
    public function list()
    {

        $influencers = Influencer::latest()->orderByDesc('created_at')->get();

        return view('brand.selection-influencer.index', compact('influencers'));
    }


    public function destroy($id)
    {
        $influencer = Influencer::findOrFail($id);

        $success = $influencer->delete();

         $success ?

        Toastr::success('Success','Influencer Deleted Successfully') :
        Toastr::error('Error','Sorry, There was problem while deleting influencer...');

        return redirect()->back();
    }

}
