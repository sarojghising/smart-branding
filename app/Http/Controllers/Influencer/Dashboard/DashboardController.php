<?php

namespace App\Http\Controllers\Influencer\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:influencer');
    }

    /**
     * after login redirect to Admin Dashboard
     *
     * @return Illuminate\Support\Facades\View
     */
    public function dashboard()
    {
        return view('influencer.index');
    }
}
