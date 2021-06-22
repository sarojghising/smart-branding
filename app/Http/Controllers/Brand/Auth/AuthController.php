<?php

namespace App\Http\Controllers\Brand\Auth;

use App\Http\Controllers\Controller;
use App\Mail\VerifyBrandMail;
use App\Models\Brand;
use App\Notifications\BrandEmailVerification;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class AuthController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest:brand');
    }

    /**
     * brandRegister
     *
     * @return void
     */
    public function brandRegister(Request $request)
    {
        if ($request->isMethod('post')) {

            $request->validate([
                'brand_name' => 'required|unique:brands,brand_name',
                'first_name' => 'required|string',
                'last_name' => 'required|string',
                'website' => 'nullable|url',
                'country' => 'required|string',
                'mobile_no' => 'required|numeric',
                'email' => 'required|email',
                'password' => 'required|min:6'

            ]);


            $token = Str::random(64);



            $brand = Brand::create([
                'brand_name' =>  $request->brand_name,
                'first_name' =>  $request->first_name,
                'last_name' =>  $request->last_name,
                'website' =>  $request->input('website', 'https://example.tc.org'),
                'country' => $request->country,
                'mobile_no' => $request->mobile_no,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'remember_token' => $token

            ]);


            Mail::to($brand->email)->send(new VerifyBrandMail($brand));


            return $brand ? redirect()->back()->with('success', 'Brand Register Successfully.Please verify Your Email to login !!') :
                redirect()->back()->with('error', 'Sorry! Brand data not inserted yet..');
        }

        return view('frontend.auth.brand.register');
    }

    public function verifyAccount($token)
    {
        $brand = Brand::where('remember_token', $token)->first();

        if (isset($brand)) {
            if (!$brand->is_email_verified) {

                $brand->update(['is_email_verified' => 1, 'email_verified_at' => Carbon::now()]);

                $status = "Your e-mail is verified. You can now login.";
            } else {
                $status = "Your e-mail is already verified. You can now login.";
            }
        } else {
            return redirect()->route('brand.login.form')->with('error', "Sorry your email cannot be identified.");
        }
        return redirect()->route('brand.login.form')->with('success', $status);
    }
}
