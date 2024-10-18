<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InventoryRequest;
class InventoryDashboardController extends Controller
{
    public function index(){
        $header = "Inventory";
        $title = "Dashboard";
        return view('inventory.inventory-dashboard',compact(['header','title']));
    }
    public function showPendingStocks(){
        $data = InventoryRequest::all()->where('status',2);

        $response = [];
        foreach($data as $row){
            $response[] = [
                'id' => $row->id,
                'product' => $row->product_dtls->return_stock_id->product_name,
                'image' => '<img src="'.asset('storage/image/'. $row->product_dtls->return_stock_id->image).'" class="img-thumbnail w-50">',
                'quantity' => $row->quantity,
                'status' => $row->status_dtls->name,
            ];
        }
        return response()->json($response);
    }
    public function showApprovedStocks(){
        $data = InventoryRequest::all()->where('status',1);

        $response = [];
        foreach($data as $row){
            $response[] = [
                'id' => $row->id,
                'product' => $row->product_dtls->return_stock_id->product_name,
                'quantity'  => $row->quantity,
                'supplier' => $row->product_dtls->return_stock_id->return_supplier_id->name,
                'status' => $row->status_dtls->name,
            ];
        }
        return response()->json($response);
    }
}
