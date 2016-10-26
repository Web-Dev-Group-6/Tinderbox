<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
    	return view('dashboard.index');
    }

    public function information()
    {
    	return view('dashboard.information');
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
    }
}
