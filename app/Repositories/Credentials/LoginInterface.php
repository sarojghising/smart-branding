<?php
namespace App\Repositories\Credentials;

interface LoginInterface
{
    /**
     * @param $request
     * @return mixed
     */
    public function authenticate($request);

    /**
     * @param $request
     * @return mixed
     */
    public function validateLogin($request);

    /**
     * @return mixed
     */
    public function username();

    /**
     * @param $request
     * @return mixed
     */
    public function credentials($request);

    /**
     * @return mixed
     */
    public function guard();

    /**
     * @param $request
     * @return mixed
     */
    public function attemptLogin($request);

    /**
     * @return mixed
     */
    public function sendFailedLoginResponse();

    /**
     * @param $request
     * @return mixed
     */
    public function sendSuccessResponse($request);

    /**
     * @return mixed
     */
    public function logout();

    /**
     * @param $guardType
     * @param $user
     * @return mixed
     */
    public function specificUserLogin($guardType,$user);

    /**
     * @param $guardType
     * @return mixed
     */
    public function specificUserLogout($guardType);


}
