<?php

namespace App\Http\Controllers\Leader;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardLeaderController extends Controller
{
    public function index(){
        return view('leader.dashboard');
    }
}
