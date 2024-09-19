<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SupplierStocksDetails;
use App\Models\InventoryRequest;
use Illuminate\Support\Facades\Validator;


class InventoryRequestController extends Controller
{
    public function index(){
        $header = "Inventory";
        $title = "Request Stock";
        $supplierStock = $this->supplierStock();
        return view('inventory.request-stock', compact(['supplierStock','header','title']));
    }

    public function supplierStock(){
        $data = SupplierStocksDetails::all()->where('quantity','>',0);

        return $data;
    }

    public function makeRequest(Request $request){
        $rules = [
            'product_id' => 'required|exists:supplier_stocks_dtls_tbl,id', // Ensure product_id exists in product_type_tbl
            'quantity' => 'required|integer|min:1', // Ensure quantity is a positive integer
            'reason' => 'required|string|max:1000',
        ];

        // Create a Validator instance with the request data and rules
        $validator = Validator::make($request->all(), $rules);

        // Custom validation for quantity
        $validator->after(function ($validator) use ($request) {
            $product = SupplierStocksDetails::find($request->product_id);

            if ($product && $request->quantity > $product->quantity) { // Assuming 'quantity' is the stock column
                $validator->errors()->add('quantity', 'The quantity exceeds the available stock.');
            }
        });

        // If validation fails, return errors
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()->all()
            ], 400);
        }

        $data = InventoryRequest::create([
            'product_id' => $request->product_id,
            'quantity' => $request->quantity,
            'reason' => $request->reason,
            'requestor_id' => auth()->user()->id,
            'status' => 2,
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Stocks request submitted successfully'
        ]);
    }
}
