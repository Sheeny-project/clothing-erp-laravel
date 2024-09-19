<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InventoryRequest;
class FinanceRequestController extends Controller
{
    public function index(){
        $header = "Finance";
        $title = "Requests";
        return view('finance.finance-request', compact(['header','title']));
    }
    public function showRequest(){
        $data = InventoryRequest::all()->where('status',2);

        $response = [];
        foreach($data as $row){
            $response[] = [
                'id' => $row->id,
                'name' => $row->product_dtls->return_stock_id->product_name,
                'image' => '<img src="'.asset('storage/image/'. $row->product_dtls->return_stock_id->image).'" class="img-thumbnail w-25">',
                'quantity' => $row->quantity,
                'price' => number_format($row->product_dtls->price),
                'action' => '<button class="btn btn-success" id="dtls-btn" data-id="'.$row->id.'" data-image="'.$row->product_dtls->return_stock_id->image.'" data-name="'.$row->product_dtls->return_stock_id->product_name.'" data-supplier="'.$row->product_dtls->return_stock_id->return_supplier_id->name.'" data-quantity="'.$row->quantity.'" data-price="'.number_format($row->quantity * $row->product_dtls->price).'"><i class="lni lni-eye"></i></button>'
            ];
        }
        return response()->json($response);
    }


}
