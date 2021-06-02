<?php

namespace App\Http\Controllers\Brand\Auth;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Repositories\Credentials\LoginRepository;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    /**
     * LoginController constructor.
     */
    public function __construct()
    {
        $this->middleware('guest:brand', ['except' => ['logout']]);
    }

    /**
     * brandLogin
     *
     * @return void
     */
    public function brandLogin()
    {
        if (auth()->guard('brand')->check()) return redirect()->route('brand.dashboard');

        return view('frontend.auth.brand.login');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|mixed
     */
    public function authenticate(Request $request)
    {
        $brand = (new LoginRepository(new Brand));

        $brand->setGuards('brand');

        return $brand->authenticate($request);
    }


    /**
     * @return \Illuminate\Http\RedirectResponse|mixed
     */
    public function logout()
    {
        $brand = (new LoginRepository(new Brand));

        $brand->setGuards('brand');

        return $brand->logout();
    }
}
