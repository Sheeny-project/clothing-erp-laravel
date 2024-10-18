<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HrDashboardController extends Controller
{
    public function index(){
        $header = "Human Resource";
        $title = "Dashboard";
        return view('hr.hr-dashboard', compact(['header', 'title']));
    }
}
