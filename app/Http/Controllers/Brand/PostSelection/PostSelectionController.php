<?php

namespace App\Http\Controllers\Brand\PostSelection;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostSelectionPerInfluencerRequest;
use App\Models\Campaign;
use App\Models\Influencer;
use App\Models\PostSelection;
use App\Models\ProductService;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\PostDec;
use Ramsey\Uuid\Type\Decimal;

class PostSelectionController extends Controller
{


    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $post_selections = PostSelection::with('influencer')->latest()->get();

        return  view('brand.post-selection.index', compact('post_selections'));
    }


    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        $influencers = Influencer::latest()->get();

        $campaigns =  Campaign::latest()->get();

        $product_services = ProductService::latest()->get();

        return view('brand.post-selection.create', compact('influencers', 'campaigns', 'product_services'));
    }



    /**
     * result
     *
     * @param  mixed $request
     * @return void
     */
    public function result(PostSelectionPerInfluencerRequest $request)
    {

        $data = $request->all();

        $data['campaign_id'] = $request->input('campaign_id', 0);

        $data['product_service_id'] = $request->product_service_id;

        $data['brand_id'] = auth()->guard('brand')->user()->id ?? null;

        $influencer = Influencer::findOrFail($data['influencer_id']);

        // calculation
        $data['campaign_cost'] =  $data['no_of_post']  * 100 * (int) $influencer->impression;

        $data['estimated_impression'] =  $influencer->impression;

        $per =  '0.2' . ' - ' . $data['post_type'];

        $data['cost_per_impression'] = $per;


        $post_selection = PostSelection::create($data);

        $post_selection ?

            Toastr::success('Success', 'Post Selection created Successfully') :
            Toastr::error('Error', 'Sorry, There was problem while selecting post...');


        return redirect()->route('brand.post.selection.list');
    }

    /**
     * destroy
     *
     * @param  mixed $id
     * @return void
     */
    public function destroy($id)
    {


        $post_selection = PostSelection::findOrFail($id);


        $success =  $post_selection->delete();


        $success ?

            Toastr::success('Success', 'Post Selection deleted Successfully') :
            Toastr::error('Error', 'Sorry, There was problem while deleting post...');


        return redirect()->route('brand.post.selection.list');
    }
}
