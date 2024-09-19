<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FinanceGenerateReportController extends Controller
{
    public function index(){
        $header = "Finance";
        $title = "Generate Report";
        return view('finance.finance-generate-report', compact(['header', 'title']));
    }
}
