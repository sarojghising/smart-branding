<?php

namespace App\Repositories\Credentials;

use Illuminate\Support\Facades\Auth;

class LoginRepository implements LoginInterface
{

    /**
     * @var $model
     */
    protected $model;

    /**
     * @var $guards
     */
    private $guards;


    /**
     * LoginRepository constructor.
     * @param $model
     */
    public function __construct($model)
    {
        $this->model = $model;
    }


    /**
     * @return mixed
     */
    public function getGuards()
    {
        return $this->guards;
    }


    /**
     * @param $guards
     *
     * @return $this
     */
    public function setGuards($guards)
    {
        $this->guards = $guards;

        return $this;
    }


    /**
     * @param $request
     * @return \Illuminate\Http\RedirectResponse|mixed
     */
    public function authenticate($request)
    {
        $this->validateLogin($request);

        if ($this->attemptLogin($request)) return $this->sendSuccessResponse($request);

        return $this->sendFailedLoginResponse();
    }

    /**
     * @param $request
     * @return mixed|void
     */
    public function validateLogin($request)
    {
        $request->validate([
            $this->username() => 'required|email',
            'password' => 'required|string'
        ]);
    }


    /**
     * @return mixed|string
     */
    public function username()
    {
        return 'email';
    }


    /**
     * @param $request
     * @return mixed
     */
    public function credentials($request)
    {
        return $request->only($this->username(), 'password');
    }


    /**
     * @return \Illuminate\Contracts\Auth\Guard|\Illuminate\Contracts\Auth\StatefulGuard|mixed
     */
    public function guard()
    {
        return Auth::guard($this->getGuards());
    }


    /**
     * @param $request
     * @return bool|mixed
     */
    public function attemptLogin($request)
    {
        return $this->guard()->attempt($this->credentials($request), $request->filled('remember'));
    }


    /**
     * @return \Illuminate\Http\RedirectResponse|mixed
     */
    public function sendFailedLoginResponse()
    {
        if ($this->getGuards() == 'brand') {
            return redirect()->route('brand.login.form')->with('error', 'Invalid Credentials');
        } elseif ($this->getGuards() == 'influencer') {
            return redirect()->route('influencer.login.form')->with('error', 'Invalid Credentials');
        }
        return redirect()->route('admin.login.form')->with('error', 'Invalid Credentials');
    }


    /**
     * @param $request
     * @return \Illuminate\Http\RedirectResponse|mixed
     */
    public function sendSuccessResponse($request)
    {
        $user = $this->model->where('email', $request->email)->first();

        if ($user) return $this->specificUserLogin($this->getGuards(), $user);
    }


    /**
     * @return \Illuminate\Http\RedirectResponse|mixed
     */
    public function logout()
    {
        if ($this->guard()->check()) {

            return $this->specificUserLogout($this->getGuards());
        }
    }


    /**
     * @param $guardType
     * @param $user
     * @return \Illuminate\Http\RedirectResponse|mixed
     */
    public function specificUserLogin($guardType, $user)
    {
        switch ($guardType) {

            case 'brand':
                $this->guard()->login($user);

                return redirect()->route('brand.dashboard');

                break;

            case 'influencer':
                $this->guard()->login($user);

                return redirect()->route('influencer.dashboard');

                break;

            case 'admin':
                $this->guard()->login($user);

                return redirect()->route('admin.dashboard');

                break;

            default:
                dd('not exists');

                break;
        }
    }


    /**
     * @param $guardType
     * @return \Illuminate\Http\RedirectResponse|mixed
     */
    public function specificUserLogout($guardType)
    {
        switch ($guardType) {

            case 'brand':
                $this->guard()->logout();

                return redirect()->route('brand.login.form')->with('success', 'Logout Successfully');

                break;

            case 'influencer':
                $this->guard()->logout();

                return redirect()->route('influencer.login.form')->with('success', 'Logout Successfully');

                break;


            case 'admin':

                $this->guard()->logout();

                return redirect()->route('admin.login.form')->with('success', 'Logout Successfully');

                break;

            default:
                dd('not exists');
                break;
        }
    }
}
