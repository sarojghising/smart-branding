<?php

namespace App\Http\Controllers\Admin\Auth\Profile;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
     /**
     * viewProfile
     *
     * @param  mixed $id
     * @return void
     */
    public function viewProfile($id)
    {
        $admin = Admin::findOrFail($id);

        return view('admin.profile.update-profile',compact('admin'));
    }


    /**
     * updateProfile
     *
     * @param  mixed $id
     * @param  mixed $request
     * @return void
     */
    public function updateProfile($id,Request $request)
    {
        $admin = Admin::findOrFail($id);

        $admin->update($request->only('name','email'));

        return $admin ?
            redirect()->back()->with('success','Profile Updated Successfully') :
            redirect()->back()->with('error','Sorry! Admin not updated yet.');
    }

}
