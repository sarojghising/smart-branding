<?php

namespace App\Http\Controllers\Influencer\Auth;

use App\Http\Controllers\Controller;
use App\Models\Influencer;
use App\Repositories\Credentials\LoginRepository;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    public function influencerRegister()
    {

        return view('frontend.auth.influencer.register');
    }


    public function influencerRegisterSubmit(Request $request)
    {

        Validator::make($request->all(), [
            'name' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg',
            'impression' => 'required',
            'rate' => 'required|numeric',
            'instagram_followers' => 'required',
            'facebook_followers' => 'required',
            'email' => 'required|unique:influencers,email|email',
            'password' => 'required|min:6'
        ])->validate();




        $successs = Influencer::create($request->only(['name', 'email', 'instagram_followers', 'facebook_followers', 'impression', 'rate'])
            + [
                'password' => Hash::make($request->password),
                'image' => $this->uploadImage($request->file('image'), 'influencer', '/app/public/images/profile/')
            ]);


        return $successs ? redirect()->route('influencer.login.form')->with('success', 'Influencer registered successfully') :

            redirect()->route('influencer.login.form')->with('error', 'Sorry ! Something went wrong...');
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

    /**
     * @param $image
     * @param $imageFieldName
     * @param $path
     * @return string
     */
    public function uploadImage($image, $imageFieldName, $path)
    {
        $extension = $image->getClientOriginalExtension();

        $filename = $imageFieldName . '-' . Carbon::now()->timestamp . '.' . $extension;

        $image->move(storage_path($path), $filename);

        return $filename;
    }
}
