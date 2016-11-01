<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	return view('dashboard.index');
    }
    
    public function information()
    {
    	return view('dashboard.information');
    }

    public function profile()
    {
    	return view('dashboard.profile');
    }

    public function map()
    {
    	return view('dashboard.map');
    }

    public function qr()
    {
    	return view('dashboard.qr');
    }

    public function schedule()
    {
    	return view('dashboard.schedule');
    }

    public function security()
    {
    	return view('dashboard.security');
    }

    public function messages()
    {
        return view('dashboard.messages');
    }
}
