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

    /*public function login()
    {
    	return view('dashboard.login');
    }

    public function registration()
    {
    	return view('dashboard.registration');
    }

    public function registration1()
    {
        return view('dashboard.registration1');
    }

    public function registration2()
    {
        return view('dashboard.registration2');
    }*/

    public function messages()
    {
        return view('dashboard.messages');
    }
}
