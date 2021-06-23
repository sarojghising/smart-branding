<?php

namespace App\Http\Controllers\Admin\Brand;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Influencer;
use App\Models\Payment;
use App\Models\PostSelection;
use App\Notifications\BrandPaymentDetailNotification;
use App\Notifications\InfluencerPaymentDetailNotification;
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

        $post_selection = PostSelection::with(['influencer','campaign','productService','payment'])->where('brand_id', $brand->id)->get();

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

        $payment = Payment::firstWhere('brand_id', $brand->id);

        $post_selection =  Payment::with('postSelection.influencer')->where('brand_id', $brand->id)->first();


         $influencer_email = $post_selection->postSelection->influencer->email;
         
         $influencer = Influencer::firstWhere('email', $influencer_email);


        $brand_amount =  $payment->payment_amount;

        $actual_amount =  $brand_amount * (30 / 100); // admin or website ko owner lae excluded 30 % commission 

        $amt = $brand_amount - $actual_amount; // to brand / influencer

        // send alert message for brand 
         $success = $brand->notify(new BrandPaymentDetailNotification($amt));

        // influencer remaining amount
         $success = $influencer->notify(new InfluencerPaymentDetailNotification($amt));

         $success ?

         Toastr::success('Success','Email was successfully sent to the brand and influncer') :
         Toastr::error('Error','Sorry, There was problem while sending mail...');
 
         return redirect()->back();

    }


    public function deletePostSelection($id)
    {
        $post_selection = PostSelection::findOrFail($id);

        $success = $post_selection->delete();

        $success ?

            Toastr::success('Success', 'Brand influencers Deleted Successfully') :
            Toastr::error('Error', 'Sorry, There was problem while deleting data...');

        return redirect()->back();
    }
}
