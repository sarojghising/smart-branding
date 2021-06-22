<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * after login redirect to Admin Dashboard
     *
     * @return Illuminate\Support\Facades\View
     */
    public function dashboard()
    {
        return view('admin.index');
    }
}
