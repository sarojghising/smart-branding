<?php

namespace App\Http\Controllers\Influencer\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * influencerRegister
     *
     * @return void
     */
    public function influencerRegister()
    {
        return view('frontend.auth.influencer.register');
    }


    /**
     * influencerLogin
     *
     * @return void
     */
    public function influencerLogin()
    {
        return view('frontend.auth.influencer.login');
    }
}
