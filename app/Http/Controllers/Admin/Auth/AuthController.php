<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Repositories\Credentials\LoginRepository;
use Illuminate\Http\Request;

class AuthController extends Controller
{
     /**
     * LoginController constructor.
     */
    public function __construct()
    {
        $this->middleware('guest:admin', ['except' => ['logout']]);
    }


    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function adminLogin()
    {
        if (auth()->guard('admin')->check()) return redirect()->route('admin.dashboard');

        return view('admin.auth.login');
    }


    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|mixed
     */
    public function authenticate(Request $request)
    {
        $admin = (new LoginRepository(new Admin));

        $admin->setGuards('admin');

        return $admin->authenticate($request);
    }


    /**
     * @return \Illuminate\Http\RedirectResponse|mixed
     */
    public function logout()
    {
        $admin = (new LoginRepository(new Admin));

        $admin->setGuards('admin');

        return $admin->logout();
    }

}
