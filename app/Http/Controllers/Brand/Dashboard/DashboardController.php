<?php

namespace App\Http\Controllers\Brand\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:brand');
    }

    /**
     * after login redirect to Admin Dashboard
     *
     * @return Illuminate\Support\Facades\View
     */
    public function dashboard()
    {
        return view('brand.index');
    }
}
