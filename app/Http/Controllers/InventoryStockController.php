<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InventoryRequest;
class InventoryStockController extends Controller
{
    public function index(){
        $header = "Inventory";
        $title = "Stocks";
        return view('inventory.inventory-stock',compact(['header','title']));
    }
}
