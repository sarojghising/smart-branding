<?php

namespace App\Http\Controllers\Brand\Campaign;

use App\Http\Controllers\Controller;
use App\Http\Requests\Campaign\CampaignCreateRequest;
use App\Models\Campaign;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CampaignController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $campaigns = Campaign::where('brand_id', auth()->guard('brand')->user()->id)->latest()->orderByDesc('created_at')->get();

        return  view('brand.campaign.index', compact('campaigns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('brand.campaign.edit-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CampaignCreateRequest $request)
    {

        $data = $request->all();

        $success = Campaign::create(
            $request->only(['title', 'code', 'description', 'start_date', 'end_date'])
            +['brand_id' => auth()->guard('brand')->user()->id ?? null]
        );

        $success ?

            Toastr::success('Success', 'Campaign Added Successfully') :
            Toastr::error('Error', 'Sorry, There was problem while adding campaign...');

        return redirect()->route('brand.campaigns.index');
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
        $campaign = Campaign::findOrFail($id);

        return  view('brand.campaign.edit-create', compact('campaign'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CampaignCreateRequest $request, $id)
    {

        $campaign = Campaign::findOrFail($id);

        $data = $request->all();

        $success =  $campaign->update($data);

        $success ?

            Toastr::success('Success', 'Campaign Updated Successfully') :
            Toastr::error('Error', 'Sorry, There was problem while updating campaign...');

        return redirect()->route('brand.campaigns.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $campaign = Campaign::findOrFail($id);

        $success = $campaign->delete();

        $success ?

            Toastr::success('Success', 'Campaign Deleted Successfully') :
            Toastr::error('Error', 'Sorry, There was problem while deleting campaign...');

        return redirect()->route('brand.campaigns.index');
    }
}
