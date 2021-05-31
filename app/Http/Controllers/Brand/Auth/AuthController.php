<?php

namespace App\Http\Controllers\Brand\Auth;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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



            $data = Brand::create([
                'brand_name' =>  $request->brand_name,
                'first_name' =>  $request->first_name,
                'last_name' =>  $request->last_name,
                'website' =>  $request->input('website' , 'https://example.tc.org'),
                'country' => $request->country,
                'mobile_no' => $request->mobile_no,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);


            return $data ? redirect()->back()->with('success', 'Brand Register Sucessfully') :
                redirect()->back()->with('error', 'Sorry! Brand data not inserted yet..');
        }

        return view('frontend.auth.brand.register');
    }
}
