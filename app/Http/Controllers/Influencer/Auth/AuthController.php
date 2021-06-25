<?php

namespace App\Http\Controllers\Influencer\Auth;

use App\Http\Controllers\Controller;
use App\Models\Influencer;
use App\Repositories\Credentials\LoginRepository;
use Illuminate\Http\Request;

class AuthController extends Controller
{

     /**
     * LoginController constructor.
     */
    public function __construct()
    {
        $this->middleware('guest:influencer', ['except' => ['logout']]);
    }
    /**
     * influencerRegister
     *
     * @return void
     */
    public function influencerRegister(Request $request)
    {

        if($request->method('post')) {

        }


        return view('frontend.auth.influencer.register');
    }

    /**
     * influencerLogin
     *
     * @return void
     */
    public function influencerLogin()
    {
        if (auth()->guard('influencer')->check()) return redirect()->route('influencer.dashboard');

        return view('frontend.auth.influencer.login');
    }


    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|mixed
     */
    public function authenticate(Request $request)
    {

        $influencer = (new LoginRepository(new Influencer));

        $influencer->setGuards('influencer');

        return $influencer->authenticate($request);
    }


    /**
     * @return \Illuminate\Http\RedirectResponse|mixed
     */
    public function logout()
    {
        $influencer = (new LoginRepository(new Influencer));

        $influencer->setGuards('influencer');

        return $influencer->logout();
    }
}
