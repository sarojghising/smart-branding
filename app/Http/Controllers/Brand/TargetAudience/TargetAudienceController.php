<?php

namespace App\Http\Controllers\Brand\TargetAudience;

use App\Http\Controllers\Controller;
use App\Http\Requests\TargetAudienceRequest;
use App\Models\TargetAudience;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class TargetAudienceController extends Controller
{

    /**
     * create
     *
     * @param  mixed $request
     * @return void
     */
    public function create()
    {
        return view('brand.targetAudience.create');
    }


    /**
     * store
     *
     * @param  mixed $request
     * @return void
     */
    public function store(TargetAudienceRequest $request)
    {

        $data = $request->all();
        $data['locations'] = implode(',' , $request->input('locations'));
        $success = TargetAudience::create($data);

        $success ?

       Toastr::success('Success','TargetAudience Added Successfully') :
       Toastr::error('Error','Sorry, There was problem while adding target audience...');

       return redirect()->back();

    }
}

