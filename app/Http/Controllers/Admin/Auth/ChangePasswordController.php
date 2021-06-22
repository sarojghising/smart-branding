<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Rules\AdminOldPasswordMatch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function changePassword(Request $request)
    {

        if ($request->isMethod('post')) {

            $this->validateRule($request);

            $success = Admin::find(Auth::guard('admin')->user()->id)
                ->update(['password' => Hash::make($request->new_password)]);

            return $success ?
                redirect()->back()->with('success', 'Password Changed Successfully') :
                redirect()->back()->with('error', 'Sorry! There was problem while updating password.');
        }


        return view('admin.profile.change-password');
    }


    /**
     * @param $request
     * @return mixed
     */
    public function validateRule($request)
    {
        return $request->validate([
            'password' => ['required', new AdminOldPasswordMatch],
            'new_password' => ['required'],
            'confirm_password' => ['same:new_password']
        ]);
    }
}
