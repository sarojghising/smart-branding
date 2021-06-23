<?php

namespace App\Http\Controllers\Brand\Payment;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\PostSelection;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class PaymentController extends Controller
{

    public function verifyPayment(Request $request)
    {

        if(isset($request->oid) && isset($request->amt) && isset($request->refId))
    	{

            $post_selection = PostSelection::findOrFail($request->oid);

            if($post_selection) {

                $url = "https://uat.esewa.com.np/epay/transrec";
    
    
                //dd($refId,$amt,$oid);
        
                $data = [
                    'amt' => intval($request->amt),
                    'rid' => $request->refId,
                    'pid' =>  $post_selection->id,
                    'scd' => 'EPAYTEST'
                ];
        
                $curl = curl_init($url);
                curl_setopt($curl, CURLOPT_POST, true);
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                $response = curl_exec($curl);
                curl_close($curl);
        
        
                if (strpos($response, "Success") == true) {
        
                    $insertData = [
                        'payment_method' => 'eSewa',
                        'payment_amount' => intval($request->amt),
                        'brand_id' => auth()->guard('brand')->user()->id ?? null,
                        'post_selection_id' => $post_selection->id 
                    ];
        
                    Payment::create($insertData);
        
                    Toastr::success('Success', 'Transaction was successfully paid..');
        
                    return redirect()->route('brand.post.selection.list');
                } else {
                    Toastr::error('Error', 'Transaction Failed..');
                    return redirect()->route('brand.post.selection.list');
                }
            }

    
          
        }

       
    }
}
