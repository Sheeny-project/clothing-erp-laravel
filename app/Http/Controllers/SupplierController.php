<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index(){
        $header = "Supplier";
        $title = "Dashboard";
        return view('supplier.supplier',compact(['header','title']));
    }
}
