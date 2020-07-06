<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('isadmin');
        $this->middleware('auth');
    }
  public function getDashboard(){
    return view('admin.dashboard');
  }
}
