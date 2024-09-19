<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FinanceController extends Controller
{
    public function index(){
        $header = "Finance";
        $title = "Dashboard";
        return view('finance.finance', compact(['header', 'title']));
    }
}
