<?php

namespace App\Http\Controllers\Brand\Payment;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class PaymentController extends Controller
{

    public function verifyPayment(Request $request)
    {
        $status = $request->q;

        $oid = $request->oid;

        $refId = $request->refId;

        $amt = $request->amt;

        $url = "https://uat.esewa.com.np/epay/transrec";

        //dd($refId,$amt,$oid);



        $data = [
            'amt' => intval($amt),
            'rid' => $refId,
            'pid' => 'ee2c3ca1-696b-4cc5-a6be-2c40d929d453',
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
                'payment_amount' => intval($amt),
                'brand_id' => auth()->guard('brand')->user()->id ?? null,
                'post_selection_id' => $request->post_selection_id ?? null
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
